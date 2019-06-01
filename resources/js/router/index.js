import Vue from 'vue'
import Router from 'vue-router'

import Home from '../components/layout/Home.vue'
import Contact from '../components/pages/Contact.vue'
import Error from '../components/layout/Error.vue'
import Blog from '../components/blog/Index.vue'
import Post from '../components/blog/Show.vue'
import CreatePost from '../components/blog/Create.vue'
import Investment from '../components/pages/Investment.vue'

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
            name: 'blog',
            path: '/blog',
            component: Blog
        },
        {
            name: 'create-post',
            path: '/blog/create-post',
            component: CreatePost
        },
        {
            name: 'post',
            path: '/blog/:slug',
            component: Post
        },
        {
            name: 'investment',
            path: '/investment',
            component: Investment
        },

        {
            name: 'error',
            path: '*',
            component: Error
        },
    ]
})

export default router
