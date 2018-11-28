<template>
    <modal name="login" :autoshow="autoshow">
        <template slot="title">login</template>
        <img slot="image" src="images/tucacas-way.jpg" alt="" width="510" height="807"/>
        <form method="POST" action="/login" slot="body">
            <input type="hidden" name="_token" :value="token">
            <div class="form-wrap form-wrap-validation">
              <input v-model="email" class="form-input" type="email" name="email" placeholder="E-mail">
              <strong v-if="errors && errors.email" style="color: red">{{ errors.email[0] }}</strong>
            </div>
            <div class="form-wrap form-wrap-validation">
              <input v-model="password" class="form-input" type="password" name="password" placeholder="Password">
              <strong v-if="errors && errors.password" style="color: red">{{ errors.password[0] }}</strong>
            </div>
            <div class="form-button">
              <button :disabled="! validForm" class="button button-block button-secondary button-nina" type="submit">Sign In</button>
            </div>
        </form>
    </modal>
</template>
<script>
    export default {
        data(){
            return {
                email: '',
                password: '',
            }
        },
        props: ['errors'],
        computed:{
            token(){
                return document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            autoshow(){
                if (this.errors.length != 0) {
                    return this.errors.email[0].includes("credentials");
                }
            },
            validForm(){
                return this.validEmail && this.validPassword
            },
            validEmail(){
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(this.email).toLowerCase());
            },
            validPassword(){
                return this.password.length > 5
            }
        }
    }
</script>