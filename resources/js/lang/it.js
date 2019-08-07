import itLocale from 'element-ui/lib/locale/lang/it';

export default {
    ...itLocale,
    en: 'EN',
    fr: 'FR',
    it: 'IT',
    de: 'DE',
    yes: 'Yes',
    timestamps:{
        hours: 'Orario',  
        days: 'Giorni',
        weeks: 'Settimane',
        months: 'Mesi',
        years: 'Anni'   
    },
    chooseLanguage: 'Scegliere la lingua',
    languages: {
        fr: 'Français',
        it: 'Italiano',
        de: 'Deutsch',
        en: 'English'
    },
    footerText: {
        companyName: 'Propify',
        leftSideText: 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor quibusdam sunt.',
        allRightsSaved: 'Tutti i diritti riservati',
    },
    days: {
        monday: 'lunedì',
        tuesday: 'martedì',
        wednesday: 'mercoledì',
        thursday: 'Giovedì',
        friday: 'venerdì',
        saturday: 'sabato',
        sunday: 'domenicale'
    },
    no: 'No',
    none: 'Nessuna',
    all: 'Tutti',
    loadMore: 'Carica di più',
    account: "Conto",
    unauthenticated: 'Non autenticato',
    logged_out: 'Disconnesso',
    logged_in: 'Loggato',
    invalid_credentials: 'Credenziali non valide',
    server_error: 'Errore del server',
    reset_password: 'Reimpostare la password',
    reset_password_mail: 'Inviare la mail di reset della password',
    reset_password_mail_sent: 'Reimposta la password inviata, controlla la tua casella di posta in arrivo',
    back_to_login: 'Torna al login',
    forgot_password: 'Password dimenticata',
    remember_me: 'Ricordati di me',
    password: 'La password',
    change_password: 'Cambiare la password',
    new_password: 'Nuova password',
    old_password: 'Vecchia password',
    new_password_confirmation: "Conferma della nuova password",
    change: 'Cambiamento',
    cancel: 'Annulla',
    confirm: 'Conferma',
    confirm_password: 'Conferma la password',
    incorrect_password: "La vecchia password è incorect",
    password_changed: "Password modificata con successo",
    details_saved: 'Dettagli salvati',
    please_wait: 'Attendere per favore...',
    no_data_available: 'Nessun dato disponibile',
    password_validation: {
        required: "La password è richiesta",
        confirm: 'Inserisci nuovamente la password',
        match: 'Le password non sono uguali',
        min: "La password deve essere di almeno 6 caratteri",
        old_password_min: "La vecchia password deve essere di almeno 6 caratteri",
        old_password_required: 'È richiesta una vecchia password'
    },
    email: 'eMail',
    email_validation: {
        required: 'è richiesta una e-mail',
        email: 'Inserisci un\'e-mail valida',
    },
    token_invalid: "Gettone non valido",
    login: 'Accedi',
    menu: {
        dashboard: 'Cruscotto',
        news: 'Notizie',
        requests: 'Richieste',
        all_requests: 'Tutte le richieste',
        marketplace: 'Mercato',
        settings: 'Impostazioni',
        logout: 'Logout',
        profile: 'Profilo',
        users: 'Utenti',
        employees: 'Dirigenti',
        companies: 'Servizi',
        admins: 'Amministratori',
        super_admins: 'Super amministratori',
        home_owners: 'Proprietari',
        registered: 'Registrato',
        about: 'A proposito di',
        feedback: 'Feedback',
        tenants: 'Gli inquilini',
        buildings: 'Edifici',
        all_buildings: 'Tutti gli edifici',
        units: 'Unità',
        addresses: 'Indirizzi',
        posts: 'Notizie',
        districts: 'Distretti',
        products: 'Prodotti',
        requestCategories: 'Richiesta categorie',
        services: 'Partner di servizio',
        activity: 'Attività',
        propertyManagers: 'Gestori',
        templates: 'Modelli'
    },
    dashboard:{
        statistics: 'Statistiche',
        requests_by_creation_date: 'Richieste per data di creazione',
        requests_by_status: 'Richieste per stato',
        requests_by_category: 'Richieste per categoria',
        each_hour_request: 'Ogni ora richiede',
        average_request_duration: 'Tempo di risoluzione',
        week_hour: 'Settimana vs. Ora',
        month_date: 'Mese vs. data',
        news_by_creation_date: 'Notizie per data di creazione',
        news_by_status: 'Notizie per stato',
        news_by_type: 'Notizie per tipo',
        products_by_creation_date: 'Mercato dei prodotti per data di creazione',
        products_by_type: 'Piazza del mercato prodotti per tipologia',
        tenants_by_creation_date: 'Gli inquilini per data di creazione',
        tenants_by_request_status: 'Situazione degli inquilini in base alle richieste',
        tenants_by_status: 'Affittuari per stato',
        buildings: {
            total_building: 'Total Count',
            total_units: 'Total Units',
            occupied_units: 'Occupied Units',
            free_units: 'Free Units',
            buildings_by_creation_date: 'Buildings by creation date'
        },
        tenants: {
            total_tenants: 'Total Count'
        }
    },
    pages: {
        profile: {
            pageTitle: 'Profile',
            profile: 'Profile',
            account: 'Account',
            security: 'Security',
            notifications: 'Notifications'
        },
        user: {
            title: 'Users'
        },
        request_activities: {
            title: 'Request activities'
        },
        tenant: {
            title: 'Tenants'
        }
    },
    support: "Support",
    actions: {
        label: "Operations",
        edit: 'Edit',
        add: 'Add',
        delete: 'Delete',
        create: 'Create',
        view: 'Details',
        save: 'Save',
        close: 'Close',
        saveAndClose: 'Save & Close',
        upload: 'Upload'
    },
    models: {
        user: {
            edit_action: 'Edit',
            delete: 'Delete',
            name: 'Name',
            phone: 'Phone',
            date: 'Date',
            email: 'Email',
            id: 'ID',
            add: 'Add user',
            save: 'Save',
            saved: 'User saved successfully',
            deleted: 'Utente cancellato',
            edit: 'Edit user',
            not_found: 'User not found',
            profile_image: 'Profile image',
            profile_text: 'Profile text',
            avatar_uploaded: 'Avatar uploaded',
            logo_uploaded: 'Logo uploaded',
            logo: 'Logo',
            address: 'Address',
            blank_pdf: 'Blank pdf',
            realEstateSaved: "Real Estate settings saved",
            serviceRequestCategorySaved: "Categoria della richiesta di servizio salvata",
            validation: {
                name: {
                    required: 'Name is required'
                },
                role: {
                    required: 'Role is required'
                }
            }
        },
        tenant: {
            view: 'View',
            view_title: 'View tenant',
            edit_title: 'Edit tenant',
            download_credentials: 'Download credentials',
            send_credentials: 'Send credentials',
            credentials_sent: 'Credentials sent',
            credentials_send_fail: 'Credentials file not found. Try updating the tenant password to regenerate it',
            credentials_download_failed: 'Credentials file not found. Try updating the tenant password to regenerate it',
            add: 'Add tenant',
            save: 'Save',
            saved: 'Inquilino salvato',
            deleted: 'Inquilino cancellato',
            update: 'Update',
            name: 'Name',
            first_name: 'First name',
            last_name: 'Last name',
            birth_date: 'Birth date',
            language: 'Language',
            title: 'Title',
            mobile_phone: 'Mobile phone',
            work_phone: 'Work phone',
            email: 'Email',
            personal_phone: 'Personal phone',
            private_phone: 'Personal phone',
            created_at: 'Date',
            created_date: 'Data di creazione',
            edit: 'Edit',
            delete: 'Delete',
            id: 'ID',
            details: 'Details',
            contract: 'Contract',
            posts: 'Posts',
            products: 'Products',
            requests: 'Requests',
            company: 'Company name',
            no_building: 'No building',
            building: {
                name: 'Building'
            },
            unit: {
                name: 'Unit'
            },
            search_building: 'Search building',
            search_unit: 'Search unit',
            search: 'Search',
            confirmDelete: {
                title: "This will permanently delete the tenant.",
                text: 'Are you sure?'
            },
            validation: {
                first_name: {
                    required: 'First name is required'
                },
                last_name: {
                    required: 'Last name is required'
                },
                birth_date: {
                    required: 'Birth date is required'
                },
                building: {
                    required: 'Building is required',
                },
                unit: {
                    required: 'Unit is required',
                },
                title: {
                    required: 'Title is required',
                },
                language: {
                    required: 'Language is required'
                }
            },
            building_card: 'Assign unit',
            personal_details_card: 'Personal details',
            account_info_card: 'User login',
            contact_info_card: 'Contact details',
            personal_data: 'Personal data',
            my_documents: 'My documents',
            my_contract: 'My contract',
            contact_persons: 'My contacts',
            no_contacts: 'No contacts available',
            rent_end: 'Rent end',
            rent_start: 'Rent start',
            rent_contract: 'Rent contract',
            contact: {
                category: 'Category',
                name: 'Name',
                email: 'Email',
                phone: 'Phone'
            },
            titles: {
                mr: 'Mr.',
                mrs: 'Mrs.',
                company: 'Company'
            },
            status: {
                label: 'Status',
                active: 'Active',
                not_active: 'Not active'
            },
            confirmChange: {
                title: 'Are you sure you want to continue?',
                warning: 'Warning',
                confirmBtnText: 'Ok',
                cancelBtnText: 'Cancel'
            }
        },
        building: {
            title: 'Buildings',
            edit_title: 'Edit Building',
            add: 'Add building',
            name: 'Name',
            cancel: 'Cancel',
            created_at: 'Date',
            edit: 'Edit',
            delete: 'Delete',
            deleted: 'Building deleted successfully',
            units: 'Units',
            save: 'Save',
            saved: 'Building saved',
            floors: 'Floors',
            basement: 'Basement',
            attic: 'Attic',
            description: 'Description',
            floor_nr: 'Number of floors',
            label: "Label",
            address: 'Address',
            address_search: 'Please enter address',
            not_found: 'Building not found',
            house_rules: 'House rules',
            operating_instructions: 'Operating instructions',
            files: 'Files',
            add_files: 'Add files',
            add_companies: 'Add companies',
            companies: 'Services companies',
            no_services: 'No services added',
            details: 'Details',
            select_media_category: 'Selected media category',
            district: 'District',
            tenants: 'Tenants',
            managers: 'Managers',
            requests: 'Requests',
            house_nr: 'House Nr.',
            assign: 'Assign',
            assign_managers: 'Assign managers',
            unassign_manager: 'Unassign',
            managers_assigned: 'Managers assigned',
            occupied_units: "Ocuppied units",
            free_units: "Free units",
            manager: {
                unassigned: 'Manager unassigned'
            },
            document: {
                uploaded: 'Document uploaded',
                deleted: 'Document deleted'
            },
            service: {
                deleted: 'Service removed from this building'
            },
            confirmDelete: {
                title: "This will permanently delete the building.",
                text: 'Are you sure?'
            },
            validation: {
                name: {
                    required: 'Name is required'
                },
                floor_nr: {
                    required: 'Floor number is required'
                },
                description: {
                    required: 'Description is required'
                },
                label: {
                    required: 'Label is required'
                },
                address_id: {
                    required: 'Address is required'
                },
            },
            requestStatuses: {
                total: 'Total requests',
                received: 'Received requests',
                assigned: 'Assigned requests',
                in_processing: 'In processing requests',
                reactivated: 'Reactivated requests',
                done: 'Done requests',
                archived: 'Archived requests'
            },
            placeholders: {
                search: 'Search'
            },
            delete_building_modal: {
                title: "Delete Building(s)",
                description_unit: "Units are assigned to the selected property. If you want to delete the units as well, please activate the option below.",
                description_request: "Requests are assigned to the selected property. If you also want to delete request as well, please activate the option below.",
                description_both: "Units and requests are assigned to the selected property. If you also want to delete them, please activate the options below.",
                delete_units: "Delete Unit(s)",
                dont_delete_units: "Don't Delete Unit(s)",
                delete_requests: "Delete Request(s)",
                dont_delete_requests: "Don't Delete Request(s)"
            }
        },
        unit: {
            title: 'Units',
            not_found: 'Unit not found',
            add: 'Add unit',
            name: 'Unit number',
            created_at: 'Date',
            edit: 'Edit',
            delete: 'Remove',
            deleted: 'Unità cancellata',
            save: 'Save',
            saved: "Unit saved",
            floor: 'Floor',
            sq_meter: 'Sq Meter',
            room_no: 'Number of rooms',
            monthly_rent: 'Monthly rent',
            building_search: 'Please enter a building name and select it',
            building: 'Building',
            description: 'Description',
            basement: 'Basement',
            attic: 'Attic',
            requests: 'Requests',
            tenant: 'Tenant',
            empty_requests: 'No requests',
            assigned_tenant: 'Assigned tenant',
            type: {
                label: 'Type',
                apartment: 'Apartment',
                business: 'Business'
            },
            confirmDelete: {
                title: "This will permanently delete the unit.",
                text: 'Are you sure?'
            },
            validation: {
                name: {
                    required: 'Name is required'
                },
                building: {
                    required: 'Building is required'
                },
                monthly_rent: {
                    required: 'Monthly rent is required'
                },
                floor: {
                    required: 'Floor is required'
                },
                room_no: {
                    required: 'Room number is required'
                },
                description: {
                    required: 'Description is required'
                },
            },
            placeholders: {
                search: 'Search',
                select: 'Select'
            }
        },
        address: {
            add: 'Add address',
            created_at: 'Date',
            name: 'Address',
            edit: 'Edit',
            delete: 'Remove',
            save: 'Save',
            city: 'City',
            country: 'Country',
            street: 'Street',
            street_nr: 'Street Nr.',
            zip: 'Zip',
            not_found: 'Address not found',
            saved: 'Address saved',
            confirmDelete: {
                title: "This will permanently delete the address.",
                text: 'Are you sure?'
            },
            state: {
                label: 'State'
            },
            validation: {
                state: {
                    required: 'State is required'
                },
                city: {
                    required: 'City is required'
                },
                street: {
                    required: 'Street is required'
                },
                street_nr: {
                    required: 'Street number is required'
                },
                zip: {
                    required: 'Zip is required'
                }
            }
        },
        post: {
            title: 'News',
            title_label: 'Title',
            content: 'Content',
            preview: 'Preview',
            add: 'Add',
            add_pinned: 'Add pinned post',
            save: 'Save',
            saved: 'Notizie salvate',
            updated: 'Notizie aggiornate',
            deleted: 'Notizie cancellate',
            edit: 'Edit',
            edit_title: 'Edit post',
            show: 'Details',
            user: "User",
            delete: 'Delete',
            likes: 'Likes',
            details: 'Post Details',
            published_at: 'Published',
            publish: 'Publish',
            unpublish: 'Unpublish',
            buildings: 'Buildings',
            pinned: 'Pinned',
            notify_email: 'Notify email',
            pinned_to: 'Pinned to',
            comments: 'Comments',
            images: 'Images',
            details_title: "Details",
            placeholders: {
                buildings: "Choose buildings",
                search: 'Search',
                search_provider: 'Search provider'
            },
            media: {
                deleted: 'Media deleted',
                removed: 'Media removed'
            },
            type: {
                label: 'Type',
                article: 'Article',
                new_neighbour: 'New neighbour',
                pinned: 'Pinned',
            },
            status: {
                label: 'Status',
                new: 'New',
                published: 'Published',
                unpublished: 'Unpublished',
                not_approved: 'Not approved'
            },
            visibility: {
                label: 'Visibility',
                address: 'Address',
                district: 'District',
                all: 'All'
            },
            confirmChange: {
                title: 'Are you sure you want to continue?',
                warning: 'Warning',
                confirmBtnText: 'Ok',
                cancelBtnText: 'Cancel'
            },
            assignmentTypes: {
                building: 'Building',
                district: 'District'
            },
            assignType: 'Type',
            unassign: 'Unassign',
            assign: 'Assign',
            attached: {
                building: 'Building assigned',
                district: 'District assigned',
                provider: 'Provider assigned'
            },
            detached: {
                building: 'Buiding unassigned',
                district: 'District unassigned',
                provider: 'Provider unassigned'
            },
            buildingAlreadyAssigned: 'Building is already inside on a district',
            confirmUnassign: {
                title: 'Are you sure you want to continue?',
                warning: 'Warning',
                confirmBtnText: 'Ok',
                cancelBtnText: 'Cancel'
            },
            execution_interval: {
                label: 'Execution interval',
                end: 'Execution End',
                start: 'Execution Start',
                separator: 'To'
            },
            category: {
                label: 'Category',
                general: 'General',
                maintenance: 'Maintenance',
                electricity: 'Electricity',
                heating: 'Heating',
                sanitary: 'Sanitary'
            }
        },
        service: {
            title: 'Services',
            add_title: 'Add Service',
            edit_title: 'Edit Service',
            edit: 'Edit',
            delete: 'Delete',
            saved: 'Servizio salvato',
            deleted: 'Servizio cancellato',
            category: 'Category',
            electrician: "Electrician",
            heating_company: 'Heating company',
            lift: 'Lift',
            sanitary: 'Sanitary',
            key_service: 'Key service',
            caretaker: 'Caretaker',
            real_estate_service: 'Real estate service',
            deleted: 'Deleted',
            name: 'Name',
            requests: 'Requests',
            contact_details: 'Contact details',
            user_credentials: 'User credentials',
            company_details: 'Company details',
            assignmentTypes: {
                building: 'Building',
                district: 'District'
            },
            assignType: 'Type',
            unassign: 'Unassign',
            assign: 'Assign',
            attached: {
                building: 'Building assigned',
                district: 'District assigned'
            },
            detached: {
                building: 'Buiding unassigned',
                district: 'District unassigned'
            },
            buildingAlreadyAssigned: 'Building is already inside on a district',
            confirmUnassign: {
                title: 'Are you sure you want to continue?',
                warning: 'Warning',
                confirmBtnText: 'Ok',
                cancelBtnText: 'Cancel'
            },
            placeholders: {
                search: 'Search',
                category: 'Select category'
            }
        },
        district: {
            title: 'Districts',
            name: 'Name',
            description: 'Description',
            add: 'Add district',
            edit: 'Edit district',
            save: 'Save',
            saved: 'Distretto salvato',
            edit_action: 'Edit',
            delete: 'Delete',
            deleted: 'Distretto soppresso',
            cancel: 'Cancel',
            required: 'This field is required',
            details: 'Details',
            buildings: 'Buildings'
        },
        realEstate: {
            title: 'Settings real estate',
            details: 'Details',
            settings: 'Settings',
            district_enable: 'District',
            marketplace_approval_enable: 'Enable Market',
            news_approval_enable: 'News approval',
            comment_update_timeout: 'Comment update timeout',
            closed: 'Closed',
            schedule: 'Schedule',
            endTime: 'End time',
            startTime: 'Start time',
            to: 'To',
            categories: 'Categories',
            templates: 'Templates',
            contact_enable: "Enable 'My contacts'",
            cleanify_email: 'Cleanify email',
            iframe_url: {
                label: 'Iframe URL',
                validation: 'Iframe URL should be a valid URL'
            }
        },
        request: {
            edit: 'Edit',
            delete: 'Delete',
            deleted: 'Deleted',
            title: 'Requests',
            created: 'Created',
            saved: 'Richiesta salvata',
            deleted: 'Richiesta cancellata',
            prop_title: 'Title',
            description: 'Description',
            category: 'Category',
            address: 'Address',
            edit_title: 'Edit request',
            add_title: 'Add request',
            tenant: 'Tenant',
            due_date: 'Due date',
            closed_date: 'Closed date',
            service: 'Service',
            created_by: 'Created by',
            is_public: 'Public',
            comments: 'Comments',
            assigned_to: 'Assigned to',
            assign_providers: 'Assign providers',
            assign_managers: 'Assign managers',
            unassign: 'Unassign',
            notify: 'Notify',
            public_legend: 'Set this option to make the request visible to all tenant neighbours',
            conversation: 'Conversation',
            open_conversation: 'Open',
            other_recipients: 'Other recipients',
            recipients: 'Recipients',
            assign: 'Assign',
            images: 'Images',
            no_images_message: 'No files uploaded',
            request_details: 'Request details',
            internal_notices: 'Internal notices',
            assignmentTypes: {
                services: 'Services',
                managers: 'Managers'
            },
            media: {
                added: 'Documento aggiunto',
                removed: 'Media removed',
                deleted: 'Media deleted',
                delete: 'Delete'
            },
            priority: {
                label: 'Priority',
                urgent: 'Urgent',
                low: 'Low',
                normal: 'Normal'
            },
            defect_location: {
                label: 'Defect location',
                apartment: 'Apartment',
                building: 'Building',
                environment: 'Environment'
            },
            qualification: {
                label: 'Qualification',
                none: 'None',
                optical: 'Optical',
                sia: 'Sia',
                '2_year_warranty': '2 Year Warranty',
                cost_consequences: 'Cost consequences'
            },
            status: {
                label: 'Status',
                received: 'Received',
                in_processing: 'In processing',
                assigned: 'Assigned',
                done: 'Done',
                reactivated: 'Reactivated',
                archived: 'Archived'
            },
            placeholders: {
                category: 'Select category',
                priority: 'Select priority',
                defect_location: 'Select defect location',
                qualification: 'Select qualification',
                status: 'Select status',
                due_date: 'Pick due date',
                tenant: 'Search for a tenant',
                service: 'Search for a service',
                propertyManagers: 'Search for managers',
                search: 'Search',
                visibility: 'Select visibility'
            },
            confirmChange: {
                title: 'Are you sure you want to continue?',
                warning: 'Warning',
                confirmBtnText: 'Ok',
                cancelBtnText: 'Cancel'
            },
            confirmUnassign: {
                title: 'Are you sure you want to continue?',
                warning: 'Warning',
                confirmBtnText: 'Ok',
                cancelBtnText: 'Cancel'
            },
            mail: {
                body: 'Body',
                subject: 'Subject',
                to: 'To',
                title: 'Notify service',
                notify: 'Send Email',
                bodyPlaceholder: 'Please write your message here',
                provider: 'Provider',
                manager: 'Manager',
                cancel: 'Cancel',
                send: 'Send',
                cc: 'CC',
                bcc: 'BCC',
                success: 'Notification mail sent successfully',
                validation: {
                    required: 'This field is required',
                    email: 'This field should be a valid email'
                },
                fail_cc: "CC/BCC/TO fields must be valid emails"
            },
            attached: {
                services: 'Provider attached successfully',
                managers: 'Manager attached successfully'
            },
            detached: {
                service: 'Provider detached successfully',
                manager: 'Manager detached successfully'
            },
            userType: {
                label: 'Type',
                provider: 'Service',
                user: 'Manager'
            },
            visibility: {
                label: 'Visibility',
                tenant: 'Private',
                district: 'District',
                building: 'Building',
            },
            requestID: "Request ID",
            requestCategory: "Request Category",
        },
        requestCategory: {
            title: 'Request categories',
            add: 'Add category',
            edit: 'Edit',
            delete: 'Delete',
            name: 'Name',
            cancel: 'Cancel',
            required: 'This field is required',
            parent: 'Parent category'
        },
        propertyManager: {
            title: 'Property managers',
            title_label: 'Title',
            add: 'Add property manager',
            save: 'Save',
            saved: 'Property manager salvato',
            deleted: 'Property manager cancellato',
            edit: 'Edit',
            edit_title: 'Edit property manager',
            delete: 'Delete',
            firstName: 'First name',
            lastName: 'Last name',
            name: 'Name',
            profession: 'Profession',
            slogan: 'Slogan',
            linkedin_url: 'Linkedin URL',
            xing_url: 'Xing URL',
            email: "Email",
            password: 'Password',
            confirm_password: 'Confirm password',
            phone: 'Phone',
            building_card: 'Assign buildings',
            details_card: 'Details',
            no_buildings: 'There are no buildings assigned',
            add_buildings: 'Add buildings',
            buildings_search: 'Search for buildings',
            districts: 'Districts',
            requests: 'Requests',
            assign: 'Assign',
            unassign: 'Unassign',
            delete_with_reassign_modal: {
                title : 'Delete & reassign buildings',
                description: 'The selected property manager is linked to properties. You can assign the properties to another person. To do this, select a property manager from the list.',
                search_title: 'Search Property Manager',
            },
            delete_without_reassign: 'Delete',
            profile_card: 'User Profile',
            social_card: 'Social Media',
            deleted: 'Deleted',
            titles: {
                mr: 'Mr.',
                mrs: 'Mrs.'
            },
            assignmentTypes: {
                building: 'Building',
                district: 'District'
            },
            assignType: 'Type',
            placeholders: {
                search: 'Search'
            },
            attached: {
                building: 'Building assigned',
                district: 'District assigned',
            },
            detached: {
                building: 'Buiding unassigned',
                district: 'District unassigned'
            },
            buildingAlreadyAssigned: 'Building is already inside on a district',
            confirmUnassign: {
                title: 'Are you sure you want to continue?',
                warning: 'Warning',
                confirmBtnText: 'Ok',
                cancelBtnText: 'Cancel'
            }
        },
        product: {
            title: 'Products',
            add: 'Add product',
            edit_title: 'Edit product',
            edit: 'Edit',
            delete_action: 'Delete',
            show: 'Details',
            details: 'Product details',
            delete: 'Delete product',
            content: "Content",
            product_title: 'Title',
            published_at: 'Published',
            publish: 'Publish',
            unpublish: 'Unpublish',
            likes: 'Likes',
            save: 'Save',
            saved: 'Prodotto salvato',
            deleted: 'Prodotto cancellato',
            comments: 'Comments',
            user: 'User',
            contact: 'Contact',
            price: 'Price',
            media: {
                removed: 'Media removed',
                deleted: 'Media deleted',
            },
            type: {
                label: 'Type',
                sell: 'Sell',
                lend: 'Lend',
                service: 'Service',
                giveaway: 'Give away'
            },
            status: {
                label: 'Status',
                published: 'Published',
                unpublished: 'Unpublished'
            },
            visibility: {
                label: 'Visibility',
                address: 'Address',
                district: 'District',
                all: 'All'
            }
        },
        template: {
            name: 'Name',
            edit: 'Edit',
            delete: 'Delete',
            saved: 'Modello salvato',
            deleted: 'Modello cancellato',
            add: 'Add',
            title: 'Templates',
            subject: 'Subject',
            body: 'Body',
            category: 'Category',
            tags: 'Tags',
            placeholders: {
                category: 'Choose category'
            }
        },
        cleanify: {
            pageTitle: 'Cleanify request',
            title: 'Title',
            lastName: 'Last name',
            firstName: 'First name',
            address: 'Address',
            city: 'City',
            zip: 'Zip',
            email: 'Email',
            phone: 'Phone',
            save: 'Send request',
            success: 'Cleanify request sent successfully',
            terms_and_conditions: 'Accept Terms & Conditions',
            terms_text: "Terms text here, long text"
        }
    },
    swal: {
        delete: {
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            confirmText: 'Yes, delete it!',
            deleted: 'Deleted successfully'
        },
        add: {
            added: 'Added successfully'
        },
        media: {
            added: 'Documento/foto aggiunto',
            deleted: 'Documento/foto soppresso',            
        },
        logout_confirm: 'Sarai disconnesso.'
    },
    roles: {
        label: 'Role',
        administrator: 'Administrator',
        homeowner: 'Home Owner',
        manager: 'Manager',
        registered: 'Registered',
        service: 'Service',
        super_admin: 'Super Admin',
    },
    settings: {
        notifications: "Notifications and language",
        admin: 'Admin notifications',
        news: 'News notifications',
        marketplace: 'Marketplace notifications',
        service: 'Service notifications',
        updated: 'Settings updated',
        language: 'Language',
        summary: {
            label: "Summary statistics",
            daily: "Daily",
            monthly: "Monthly",
            yearly: "Yearly"
        }
    },
    search: {
        placeholder: 'Search'
    },
    filters: {
        header: 'Filters',
        districts: 'Districts',
        buildings: 'Buildings',
        requests: 'Requests',
        open_requests: 'Open requests',
        units: 'Units',
        states: 'States',
        status: 'Status',
        search: 'Search',
        requestStatus: 'Request status',
        propertyManagers: 'Property Manager',
        categories: 'Categories',
        created_from: 'Created from',
        created_to: 'Created to',
        services: 'Services',
        tenant: 'Type tenants'
    },
    errors: {
        files_extension_images: 'Only jpg and png files accepted'
    },
    validation: {
        general: {
            required: 'This field is required'
        },
        price: {
            valid: 'Please enter a valid price',
            required: 'Price is required',
        },
        firstName: {
            required: 'First name is required'
        },
        lastName: {
            required: 'Last name is required'
        },
        phone: {
            required: 'Phone is required'
        },
        address: {
            required: 'Address is required'
        },
        zip: {
            required: 'Zip is required'
        },
        city: {
            required: 'City is required'
        },
        title: {
            required: 'Title is required'
        },
        terms: {
            required: 'Please approve with terms and conditions'
        }
    },

    layouts: {
        tenant: {
            menu: {
                logout: 'Logout'
            },
            sidebar: {
                dashboard: 'Dashboard',
                myTenancy: 'My tenancy',
                myPersonalData: 'My personal data',
                myRecentContract: 'My recent contract',
                myDocuments: 'Documents',
                myContactPersons: 'Contact persons',
                posts: 'News',
                requests: 'Requests',
                products: 'Marketplace',
                settings: 'Settings'
            }
        }
    },
    components: {
        common: {
            audit: {

            },
            commentsList: {
                loading: 'Loading...',
                loadMore: {
                    simple: 'Load {count} more',
                    detailed: 'Load {count} more comments'
                },
                emptyPlaceholder: {
                    title: 'There are no messages yet...',
                    description: 'Start messaging by using the below form and press enter.'
                }
            },
            comment: {
                updateShortcut: 'or use {shortcut} shortcut',
                updateOrCancel: '{update} or press {esc} to {cancel}',
                update: 'update',
                esc: 'ESC',
                cancel: 'cancel',
                addChildComment: 'Comment',
                loadMore: 'Load 1 more comment | Load {count} more comments',
                deletedCommentPlaceholder: 'This comment was deleted.'
            },
            addComment: {
                placeholder: 'Type a comment...',
                tooltipTemplates: 'Choose a template',
                loadingTemplates: 'Loading templates...',
                saveShortcut: 'or use {shortcut} shortcut',
                emptyTemplatesPlaceholder: 'No templates available.'
            }
        },
        tenant: {
            weatherWidget: {
                minTemp: 'min',
                maxTemp: 'max',
                wind: 'wind',
                cloudiness: 'cloudiness',
                humidity: 'humidity',
                pressure: 'pressure'
            }
        },
        admin: {

        }
    },

    views: {
        tenant: {
            my: {
                personal: {
                    title: 'Personal data',
                    description: 'My personal details.',
                    placeholder: {
                        title: 'No personal data available.',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                    }
                }
            }
        }
    },
    dateTimeFormat: '{date} at {time}',
    date_range: {
        range_separator: 'To',
        start_date: 'Start date',
        end_date: 'End date',
        last_week: 'Last week',
        last_month: 'Last Month',
        last_3_months: 'Last 3 months',
        last_6_months: 'Last 6 months',
        last_year: 'Last year',
        last_2_years: 'Last 2 years'
    }
}
