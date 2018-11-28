let state = {
    data: [],
    perPage: null,
    currentPage: 1,
    lastPage: null,
    totalRows: null,
    loading: false,
}

let getters = {
        findComment(state){
            return function(id){
                let comment = state.comments.find(comment => comment.id == id)
                return comment;
            }
        },
}

let actions = {
    getComments(context, params){
        context.state.loading = true
        axios.get('/api/comments/' + params.post_id + '?page=' + params.page + '&search=' + params.target + '&rows='  + params.rows)
            .then(response => {
                context.commit('getComments', {data: response.data})
            })
            .catch(error => {
                context.state.loading = false
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
            })
    },

    storeComment(context, payload){
        context.state.loading = true
        return new Promise((resolve, reject) => {
            axios.post('/api/comment', payload)
                .then(response => {
                    resolve()
                    context.commit('storeComment')
                    Vue.toasted.show(response.data.message, {type: 'success'})
                })
                .catch(error => {
                    reject()
                    context.state.loading = false
                    Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                })
        })
    }
}

let mutations = {
    getComments(state, {data}){
        state.currentPage = data.current_page
        state.lastPage = data.last_page
        state.totalRows = data.total
        state.perPage = data.per_page
        state.data = data.data
        state.loading = false
    },
    storeComment(state, newComment){
        state.loading = false
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}