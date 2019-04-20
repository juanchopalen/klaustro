let state = {
    pages: [],
    loading: false
}

let getters = {
    getPage: state => slug => {
        let page = state.pages.find(page => page.slug === slug)
        return page
    },
    loading: state => {
        return state.loading;
    }
}

let actions = {
    getPages(context){
        context.state.loading = true
        return new Promise((resolve, reject) => {
            axios.get('/api/page')
                .then(response => {
                    context.commit('getPages', response.data)
                    resolve(response)
                })
                .catch(error => {
                    Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                    reject(error)
                })
        })
    }
}

let mutations = {
    getPages(state, payload){
        console.log(payload)
        Vue.set(state, 'pages', payload)
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
