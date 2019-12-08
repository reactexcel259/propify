import {mapActions, mapGetters} from 'vuex';
import {displayError, displaySuccess} from 'helpers/messages';
import ListTable from 'components/ListTable';
import ListFieldFilter from 'components/ListFieldFilter';

export default ({
                    header,
                    actions: {
                        delete: deleteAction,
                        get: getAction,
                        
                        getParams
                    },
                    getters: {
                        items,
                        pagination
                    }
                }) => ({
    components: {
        ListTable,
        ListFieldFilter
    },
    data() {
        return {
            items: [],
            loading: false,
            filtersHeader: '',
            selectedItems: [],
            fields: [],
            headerOrder: null,
        };
    },
    methods: {
        ...mapActions([getAction, deleteAction]),

        async fetchMore(params = {
            ...this.$route.query,
            ...this.fetchMoreParams
        }) {
            try {
                this.loading = true;
                let assignee_id = this.$store.getters.loggedInUser.id;

                if (getParams) {
                    params = {...params, ...getParams};
                }

                if( this.$route.name == "adminAllpendingRequests") {
                    params = {...params, pending_request : true };
                }

                if( this.$route.name == "adminUnassignedRequests") {
                    params = {...params, not_assigned : true };
                }

                if( this.$route.name == "adminMyRequests") {
                    params = {...params, my_request:true};
                }

                if( this.$route.name == "adminMypendingRequests") {
                    params = {...params, pending_request : true ,my_request:true};
                }
                
                await this[getAction](params)
            } catch (err) {
                displayError(err);
            } finally {
                this.loading = false;
            }
        },
        selectionChanged(rows) {
            this.selectedItems = rows;
        },
        batchDelete() {
            this.$confirm(this.$t('general.swal.delete.text'), this.$t('general.swal.delete.title'), {
                type: 'warning'
            }).then(() => {
                Promise.all(this.selectedItems.map((item) => {
                    return this[deleteAction](item)
                        .then(r => {

                            displaySuccess(r);
                        })
                        .catch(err => displayError(err));
                })).then(() => {
                    this.fetchMore();
                })
            }).catch(() => {
            });
        },
        batchDeleteWithIds(){
            this.$confirm(this.$t('general.swal.delete.text'), this.$t('general.swal.delete.title'), {
                type: 'warning'
            }).then(() => {
                return this[deleteAction](this.selectedItems)
                .then(r => {
                    this.fetchMore();
                    this.selectedItems = []
                    displaySuccess(r);
                })
                .catch(err => displayError(err));                
            }).catch(() => {
            });
        },  
        async saveFilter(filter = {}) {
            let fields_data = {};
            if(!this.headerOrder)
                this.header.forEach((item) => {
                    fields_data[item.label] = !this.fields.includes(item.label);
                });
            else
                this.headerOrder.forEach((item) => {
                    fields_data[item] = !this.fields.includes(item);
                });
            if(!filter.id)
                await this.axios.post('/userFilters', {
                    title: filter.title,
                    menu: this.$route.name,
                    options_url: JSON.stringify(this.$route.query),
                    fields_data: [JSON.stringify(fields_data)],
                });
            else
                await this.axios.put('/userFilters/' + filter.id, {
                    title: filter.title,
                    menu: this.$route.name,
                    options_url: JSON.stringify(this.$route.query),
                    fields_data: [JSON.stringify(fields_data)],
                });
            this.$refs.listtable.getSavedFilters();
        },
    },
    computed: {
        ...mapGetters([items, pagination]),
        filters() {
            return [];
        },
        total() {
            return parseInt(this[pagination].total);
        },
        currSize() {
            return parseInt(this[pagination].per_page);
        },
        currPage() {
            return parseInt(this[pagination].current_page);
        },
        headerFilter() {
            let result = [];
            if(!this.headerOrder)
                result = this.header;
            else
                this.headerOrder.forEach((val) => {
                    result.push(this.header.find(item => item.label === val));
                });
            return result.filter(item => !this.fields.includes(item.label));
        }
    },
    watch: {
        [items](newValue) {
            this.items = newValue;
        }
    }
});
