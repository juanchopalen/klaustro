<template>
    <div class="section-lg">
        <p class="h3-alternate">{{ translate(blog, 'comment_title')}}</p>
        <!-- RD Mailform-->
        <form class="rd-mailform form-fix">
          <div class="row row-fix row-20">
            <div class="col-md-6">
              <div class="form-wrap form-wrap-validation">
                <label :class="validString(comment.name) ? '' : 'label-required'" class="form-label-outside" for="form-comment-name">{{ translate(blog, 'name')}}</label>
                <input v-model="comment.name" class="form-input" id="form-comment-name" type="text" name="name" data-constraints="@Required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap form-wrap-validation">
                <label :class="validEmail ? '' : 'label-required'" class="form-label-outside" for="form-comment-email">{{ translate(blog, 'email')}}</label>
                <input v-model="comment.email" class="form-input" id="form-comment-email" type="email" name="email" data-constraints="@Email @Required">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-wrap form-wrap-validation">
                <label :class="validString(comment.message) ? '' : 'label-required'" class="form-label-outside" for="form-comment-message">{{ translate(blog, 'comment')}}</label>
                <textarea v-model="comment.message" class="form-input" id="form-comment-message" name="message" data-constraints="@Required"></textarea>
              </div>
            </div>
            <div class="col-sm-12 offset-custom-1">
              <div class="form-button">
                <button @click.prevent="store" class="button button-secondary" type="submit" :disabled="!validForm">{{ translate(blog, 'comment_button')}}</button>
                <button v-if="reply" @click.prevent="cancel" class="button button-primary button-nina" type="submit" style="top: -18px">{{ translate(blog, 'cancel_button')}}</button>
              </div>
            </div>
          </div>
        </form>
    </div>
</template>
<script>
    export default {
        props: {
            post_id: {},
            reply: {default: null}
        },
        data(){
            return {
                comment: {
                    post_id: this.post_id,
                    name: '',
                    email: '',
                    message: '',
                    reply: this.reply
                }
            }
        },
        methods: {
            store(){
                this.$store.dispatch('storeComment', this.comment)
                    .then(response => {
                        this.clear()
                        this.$emit('submited')
                    })
            },
            cancel(){
                this.$emit('submited')
                this.clear()
            },
            validString(value){
                return value.length > 3
            },
            clear(){
                this.comment.name = ''
                this.comment.email = ''
                this.comment.message = ''
            }
        },
        computed: {
            validForm(){
                return this.validString(this.comment.name) &&
                this.validString(this.comment.name) &&
                this.validEmail
            },
            validEmail(){
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(this.comment.email).toLowerCase());
            },
            blog(){
              return this.$store.getters.getPage('blog')
            },
        },
        watch: {
            post_id(val){
                if (val) {
                    this.comment.post_id = val
                }
            }
        }
    }
</script>
