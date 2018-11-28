let state = {
    data: [],
    solo: null,
    perPage: null,
    currentPage: 1,
    lastPage: null,
    totalRows: null,
    loading: false,
}

let getters = {
        findPost(state){
            return function(id){
                let post = state.posts.find(post => post.id == id)
                return post;
            }
        },
}

let actions = {
    getPosts(context, payload){
        context.state.loading = true
        let month = ''
        let year = ''
        if (payload.month) {
            month = payload.month.value
            year = payload.month.year
        }
        axios.get('/api/posts?page=' + payload.page + '&search=' + payload.target + '&month=' + month + '&year=' + year + '&category=' + payload.category + '&rows='  + payload.rows)
            .then(response => {
                context.commit('getPosts', {data: response.data})
                context.state.loading = false
            })
            .catch(error => {
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                context.state.loading = false
            })
    },

    getPost(context, payload){
        context.state.loading = true
        axios.get('/api/post/' + payload.slug)
            .then(response => {
                context.commit('getPost', {data: response.data})
                context.state.loading = false
            })
            .catch(error => {
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                context.state.loading = false
            })
    },

    storePost(context, payload){
        context.state.loading = true
        return new Promise((resolve, reject) => {
            axios.post('/api/post', payload)
                .then(response => {
                    context.commit('storePost', response.data.post)
                    Vue.toasted.show(response.data.message, {type: 'success'})
                    context.state.loading = false
                    resolve()
                })
                .catch(error => {
                    Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                    context.state.loading = false
                    reject()
                })

        })
    },

    updatePost(context, payload){
        context.state.loading = true
        axios.put('/api/post/' + payload.id, payload)
            .then(response => {
                context.commit('updatePost', response.data.post)
                Vue.toasted.show(response.data.message, {type: 'success'})
                context.state.loading = false
            })
            .catch(error => {
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                context.state.loading = false
            })
    },
    removePost(context, id){
        context.state.loading = true
        axios.delete('/api/post/' + id)
            .then(response => {
                context.commit('removePost', id)
                Vue.toasted.show(response.data.message, {type: 'success'})
                context.state.loading = false
            })
            .catch(error => {
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                context.state.loading = false
            })
    }
}

let mutations = {
    getPosts(state, {data}){
        state.currentPage = data.current_page
        state.lastPage = data.last_page
        state.totalRows = data.total
        state.perPage = data.per_page
        state.data = data.data;
    },

    getPost(state, {data}){
        state.solo = data;
    },

    storePost(state, payload){
        state.loading = false
    },

    updatePost(state, payload){
        let index = state.solo = payload
    },
    removePost(state, id){
        let index = state.data.findIndex(post => post.id == id)
        state.data.splice(index, 1)
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}