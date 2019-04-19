let state = {
    language_id: null,
    languages: [],
    loading: false,
}

let getters = {
    getLanguageId: state => {
        return state.language_id
    },
    getLanguages: state => {
        return state.languages
    },
}

let actions = {
    getLanguages(context){
        context.loading = true
        return new Promise((resolve, reject) => {
            axios.get('/api/language')
                .then(response => {
                    context.commit('getLanguages', response.data)
                    context.loading = false
                    resolve(response)
                })
                .catch(error => {
                    context.loading = false
                    Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
                    reject(error)
                })

        })
    },
    setLanguageId(context, id){
        context.commit('setLanguageId', id)
    }
}

let mutations = {
    getLanguages(state, payload){
        Vue.set(state, 'languages', payload)
    },
    setLanguageId(state, payload){
        Vue.set(state, 'language_id', payload)
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}
