import Vue from 'vue'
import Vuex from 'vuex'

import Post from './modules/Post.js'
import Comment from './modules/Comment.js'
import Category from './modules/Category.js'

Vue.use(Vuex)

let store = new Vuex.Store({
    modules:{
        Category,
        Post,
        Comment,
    },
})


export default store