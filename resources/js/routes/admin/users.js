import AdminPermissions from 'boot/roles/admin'
import hasPermissionGuard from 'guards/hasPermissionGuard'
import VueRouterMultiguard from 'vue-router-multiguard'

export default [{
    path: 'users',
    component: {
        template: '<router-view />'
    },
    children: [{
        name: 'adminUsers',
        path: '/',
        component: () => import ( /* webpackChunkName: "admin/users/index */ 'views/Admin/Users'),
        beforeEnter: VueRouterMultiguard([hasPermissionGuard(AdminPermissions.list.user)]),
        meta: {
            title: 'Users'
        }
    }, {
        name: 'adminUsersAdd',
        path: 'add',
        component: () => import ( /* webpackChunkName: "admin/users/add" */ 'views/Admin/Users/Add'),
        beforeEnter: VueRouterMultiguard([hasPermissionGuard(AdminPermissions.create.user)]),
        props: {
            title: 'Add Administrator/Super admin'
        },
        meta: {
            title: 'Add User'
        }
    }, {
        name: 'adminUsersEdit',
        path: ':id',
        component: () => import ( /* webpackChunkName: "admin/users/edit" */ 'views/Admin/Users/Edit'),
        beforeEnter: VueRouterMultiguard([hasPermissionGuard(AdminPermissions.update.user)]),
        props: {
            title: 'Edit user'
        },
        meta: {
            title: 'Edit User'
        }
    }]
}]