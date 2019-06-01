<template>
      <section class="section section-lg bg-default">
          <div class="container container-wide">
            <div class="row justify-content-sm-center">
              <div class="sections-collapsable single-post-wrap">
                <h3>Investments</h3>

            <div class="row row-fix row-20">
                <div class="col-md-3">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-1-name">Plan</label>
                    <input v-model="params.plan" class="form-input" id="form-1-name" type="text" name="name"/>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-1-last-name">Frequency</label>
                    <input v-model="params.frequency" class="form-input" id="form-1-last-name" type="text" name="last-name"/>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label-outside" for="form-1-email">Weeks</label>
                    <input v-model="params.weeks" class="form-input" id="form-1-email" type="email" name="email"/>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="form-button">
                        <button @click="getInvestments" class="button button-secondary send-button">Send</button>
                    </div>
                </div>
              </div>

                <hr class="divider divider-left divider-default">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Week</th>
                                <th>Fecha</th>
                                <th>Inversion</th>
                                <th>Limite</th>
                                <th>Porcentaje</th>
                                <th>Ganancia</th>
                                <th>Ganancia Acumulada</th>
                                <th>Retiro</th>
                                <th>Acumulado</th>
                                <th>Dinero</th>
                                <th>Real Inversion</th>
                                <th>Real Limite</th>
                                <th>Real Porcentaje</th>
                                <th>Real Ganancia</th>
                                <th>Real Retiro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr :class="'tr-' + investment.color" v-for="(investment, index) in investments">
                                <td>{{ index +1 }}</td>
                                <td>{{ investment.date }}</td>
                                <td>{{ investment.investement | money }}</td>
                                <td>{{ investment.limit | money }}</td>
                                <td>{{ investment.percent | money }}</td>
                                <td>{{ investment.profit | money }}</td>
                                <td>{{ investment.profit_acum | money }}</td>
                                <td>{{ investment.retirement | money }}</td>
                                <td>{{ investment.acum | money }}</td>
                                <td>{{ investment.real | money }}</td>
                                <td>{{ investment.real_amount | money }}</td>
                                <td>{{ investment.real_limit | money }}</td>
                                <td>{{ investment.real_percent | money }}</td>
                                <td>{{ investment.real_profit | money }}</td>
                                <td>{{ investment.real_retirement | money }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
      </section>
</template>
<script>
    export default {
        data(){
            return {
                params: {
                    plan: 1000,
                    frequency: 4,
                    weeks: 52,
                }
            }
        },
        created(){
            this.getInvestments()
        },
        methods: {
            getInvestments(){
                this.$store.dispatch('getInvestments', this.params)
            }
        },
        computed: {
            investments(){
                return this.$store.getters.getInvestments
            }
        }
    }
</script>
<style scoped>
    .tr-green{
        color: green;
        font-weight: bold;
    }
    .tr-red{
        color: red;
        font-weight: bold;
    }
    .tr-purple{
        color: purple;
        font-weight: bold;
    }
    .send-button{
        top: 32px;
    }
</style>
