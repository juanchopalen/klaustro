import Vue from 'vue'
import Router from 'vue-router'

import Home from '../components/layout/Home.vue'
import Contact from '../components/Contact.vue'
import Error from '../components/layout/Error.vue'

Vue.use(Router)

let router = new Router({
    mode: 'history',
    routes: [
        {
            name: 'home',
            path: '/',
            component: Home
        },
        {
            name: 'contact',
            path: '/contact',
            component: Contact
        },

        {
            name: 'error',
            path: '*',
            component: Error
        },
    ]
})

export default router