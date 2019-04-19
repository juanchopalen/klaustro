import Vue from 'vue'
import Vuex from 'vuex'

import Category from './modules/Category.js'
import Post from './modules/Post.js'
import Comment from './modules/Comment.js'
import Translation from './modules/Translation.js'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)

let store = new Vuex.Store({
    modules:{
        Category,
        Post,
        Comment,
        Translation,
    },
    plugins:[
        createPersistedState()
    ]
})


export default store
