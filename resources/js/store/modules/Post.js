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
    getPosts(context, params){
        context.state.loading = true
        let month = ''
        let year = ''
        if (params.month) {
            month = params.month.value
            year = params.month.year
        }
        axios.get('/api/posts?page=' + params.page + '&search=' + params.target + '&month=' + month + '&year=' + year + '&category=' + params.category + '&rows='  + params.rows)
            .then(response => {
                context.commit('getPosts', {data: response.data})
                context.state.loading = false
            })
            .catch(error => {
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
            })
    },

    getPost(context, params){
        context.state.loading = true
        axios.get('/api/post/' + params.slug)
            .then(response => {
                context.commit('getPost', {data: response.data})
                context.state.loading = false
            })
            .catch(error => {
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
            })
    },
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
}

export default {
    state,
    getters,
    actions,
    mutations
}