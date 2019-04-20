<template>
    <modal name="register" :autoshow="autoshow">
      <template slot="title">{{ translate(auth, 'signup') }}</template>
      <img slot="image" src="/images/tucacas-way.jpg" alt="" width="510" height="807"/>
      <form method="POST" action="/register" slot="body">
        <input type="hidden" name="_token" :value="token">
        <div class="form-wrap form-wrap-validation">
          <input v-model="name" class="form-input" type="text" name="name" :placeholder="translate(auth, 'name')">
          <strong v-if="errors && errors.name" v-for="error in errors.name"  style="color: red">
            {{ error }}
          </strong>
        </div>
        <div class="form-wrap form-wrap-validation">
          <input v-model="email" class="form-input" type="email" name="email" :placeholder="translate(auth, 'email')">
          <strong v-if="errors && errors.email" v-for="error in errors.email" style="color: red">
            <template v-if="!error.includes('credentials')">
            {{ error }}
            </template>
          </strong>
        </div>
        <div class="form-wrap form-wrap-validation">
          <input v-model="password" class="form-input" type="password" name="password" :placeholder="translate(auth, 'password')">
          <strong v-if="errors && errors.password" v-for="error in errors.password" style="color: red">
            {{ error }}
          </strong>
        </div>
        <div class="form-wrap form-wrap-validation">
          <input v-model="password_confirmation" class="form-input" type="password" name="password_confirmation" :placeholder="translate(auth, 'confirm_password')">
        </div>
        <div class="form-button">
          <button :disabled="!validForm" class="button button-block button-secondary" type="submit">{{ translate(auth, 'signup_button') }}</button>
        </div>
      </form>
    </modal>
</template>
<script>
  export default {
    props:['errors'],
    data() {
      return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
      }
    },
    computed:{
      token(){
          return document.querySelector('meta[name="csrf-token"]').getAttribute("content")
      },
      autoshow(){
          if (this.errors.length != 0) {
              return ! this.errors.email[0].includes("credentials");
          }
      },
      validForm(){
          return true
          return this.validName &&
            this.validEmail &&
            this.validPassword &&
            this.validConfirm
      },
      validName(){
          return this.name.length > 3
      },
      validEmail(){
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(String(this.email).toLowerCase());
      },
      validPassword(){
          return this.password.length > 5
      },
      validConfirm(){
          return this.password == this.password_confirmation
      },
      auth(){
        return this.$store.getters.getPage('auth')
      }
    }

  }
</script>
