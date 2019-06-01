import Vue from 'vue'
import Vuex from 'vuex'

import Category from './modules/Category.js'
import Post from './modules/Post.js'
import Comment from './modules/Comment.js'
import Language from './modules/Language.js'
import Page from './modules/Page.js'
import Investment from './modules/Investment.js'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)

let store = new Vuex.Store({
    modules:{
        Category,
        Post,
        Comment,
        Language,
        Page,
        Investment,
    },
    plugins:[
        createPersistedState()
    ]
})


export default store
