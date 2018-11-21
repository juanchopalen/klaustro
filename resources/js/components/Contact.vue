<template>
    <div>
      <section class="section section-lg bg-default" :class="loading ? 'loading' : ''">

      <div class="container container-bigger">
        <div class="row row-50 justify-content-md-center justify-content-xl-between">
          <div class="col-md-10 col-lg-7">
            <h3>Contact us</h3>
            <hr class="divider divider-left divider-default">
            <p class="big">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally.</p>
            <!-- RD Mailform-->
              <div class="row row-fix row-20">
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label :class="validString(contact.first_name) ? '' : 'label-required'" class="form-label-outside" for="form-1-name">First name</label>
                    <input v-model="contact.first_name" class="form-input" id="form-1-name" type="text" name="name"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label :class="validString(contact.last_name) ? '' : 'label-required'" class="form-label-outside" for="form-1-last-name">Last name</label>
                    <input v-model="contact.last_name" class="form-input" id="form-1-last-name" type="text" name="last-name"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label :class="validEmail ? '' : 'label-required'" class="form-label-outside" for="form-1-email">E-mail</label>
                    <input v-model="contact.email" class="form-input" id="form-1-email" type="email" name="email"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-wrap form-wrap-validation">
                    <label :class="validString(contact.phone) ? '' : 'label-required'" class="form-label-outside" for="form-1-phone">Phone</label>
                    <input v-model="contact.phone" class="form-input" id="form-1-phone" type="text" name="phone"/>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-wrap form-wrap-validation">
                    <label :class="validString(contact.message) ? '' : 'label-required'" class="form-label-outside" for="form-1-message">Message</label>
                    <textarea v-model="contact.message" class="form-input" id="form-1-message" name="message"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 offset-custom-1">
                  <div class="form-button">
                    <button @click="send" class="button button-secondary button-nina" :disabled="!validForm || loading">send message</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-10 col-lg-5 col-xl-4">
            <div class="column-aside">
              <div class="row">
                <div class="col-sm-10 col-md-6 col-lg-12">
                  <h6>Address</h6>
                  <hr class="divider-thin">
                  <article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span><span><a href="#">Caracas<br class="d-none d-xl-block"> Venezuela</a></span></article>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-12">
                  <h6>Phone</h6>
                  <hr class="divider-thin">
                  <article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                    <ul class="list-comma">
                      <li><a href="tel:#">+58 414 9900552</a></li>
                      <li><a href="tel:#">+58 212 5736017</a></li>
                    </ul>
                  </article>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-12">
                  <h6>E-mail </h6>
                  <hr class="divider-thin">
                  <article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span><span><a href="mailto:#">contact@klaustro.net</a></span></article>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-12">
                  <h6>Work hours </h6>
                  <hr class="divider-thin">
                  <article class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-calendar-clock"></span>
                    <ul class="list-0">
                      <li>Mon–Fri: 8:00 am–5:00 pm</li>
                    </ul>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
      <spinner v-if="loading"></spinner>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                contact: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    message: '',
                },
                loading: false
            }
        },
        methods: {
            send(){
              this.loading = true
                axios.post('/api/contact', this.contact)
                    .then(response => {
                        Vue.toasted.show(response.data.message, {type: 'success'})
                        this.contact.first_name = ''
                        this.contact.last_name = ''
                        this.contact.email = ''
                        this.contact.phone = ''
                        this.contact.message = ''
                        this.loading = false
                    })
                    .catch(error => {
                        console.log(error)
                        Vue.toasted.show(error.message, {type: 'error'})
                        this.loading = false
                    })
            },
            validString(value){
                return value.length > 3
            },
        },
        computed: {
            validForm(){
                return this.validString(this.contact.first_name) //&&
                    this.validString(this.contact.last_name) &&
                    this.validEmail &&
                    this.validString(this.contact.phone) &&
                    this.validString(this.contact.message)

            },
            validEmail(){
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(this.contact.email).toLowerCase());
            },
        }
    }
</script>