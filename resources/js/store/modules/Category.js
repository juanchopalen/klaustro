let state = {
    data: [],
    list: [],
    perPage: null,
    currentPage: 1,
    lastPage: null,
    totalRows: null,
    loading: false,
}

let getters = {
        findCategory(state){
            return function(id){
                let category = state.categories.find(category => category.id == id)
                return category;
            }
        },
}

let actions = {
    getCategories(context, params){
        context.state.loading = true
        axios.get('/api/categories?page=' + params.page + '&search=' + params.target + '&rows='  + params.rows)
            .then(response => {
                context.commit('getCategories', {data: response.data})
            })
            .catch(error => {
                context.state.loading = false
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
            })
    },

    getAllCategories(context, params){
        context.state.loading = true
        axios.get('/api/categories-list')
            .then(response => {
                context.commit('getAllCategories', response.data)
            })
            .catch(error => {
                context.state.loading = false
                Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
            })
    },
}

let mutations = {
    getCategories(state, {data}){
        state.currentPage = data.current_page
        state.lastPage = data.last_page
        state.totalRows = data.total
        state.perPage = data.per_page
        state.data = data.data
        state.loading = false
    },
    getAllCategories(state, data){
        state.list = data
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}