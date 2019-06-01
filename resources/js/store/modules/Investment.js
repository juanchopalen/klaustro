export default {
    state:{
        data: [],
        loading: false,
    },
    getters: {
        getInvestments: state => {
            return state.data
        },
    },
    actions: {
        getInvestments(context, params){
            context.state.loading = true
            axios.post('/investments', params)
                .then(response => {
                    context.commit('getInvestments', response.data)
                })
                .catch(error => {
                    console.log(error)
                    context.state.loading = false
                })
        }
    },
    mutations: {
        getInvestments(state, payload){
            Vue.set(state, 'data', payload)
            state.loading = false
        }
    },
}
