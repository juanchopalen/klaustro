<template>
    <section class="section section-lg bg-default">
        <div class="container container-wide">
          <div class="row justify-content-sm-center">
            <div class="col-lg-10 col-xl-8 col-xxl-6 sections-collapsable single-post-wrap">
              <article class="post-blog-article">
                <p>
                  <label><b>Category</b></label>
                  <b-form-select
                    v-model="draft.category_id"
                    :options="categories"
                    class="mb-3 form-input"
                    value-field="id"
                    text-field="name"
                  />
                </p>
                <p>
                  <label><b>Post Title</b></label>
                  <input v-model="draft.title" class="form-input form-control-has-validation form-control-last-child" type="text">
                </p>
                  <p>
                    <label><b>Post Intro</b></label>
                    <wysiwyg v-model="draft.intro"></wysiwyg>
                  </p>
                  <p>
                    <label><b>Post Image</b></label>
                    <upload-image v-model="draft.image"></upload-image>
                  </p>
                  <p>
                    <label><b>Post Content</b></label>
                    <wysiwyg v-model="draft.content"></wysiwyg>
                  </p>
                  <div class="form-button">
                    <button @click.prevent="store" class="button button-secondary button-nina" type="submit" :disabled="!validForm">save</button>
                    <router-link to="/blog" class="button button-primary button-nina" style="top: -18px">cancel</router-link>
                  </div>
              </article>
            </div>
          </div>
        </div>
    </section>
</template>
<script>
    export default {
        data(){
            return {
                draft: {
                    title: '',
                    intro: '',
                    image: '',
                    content: '',
                    category_id: null,
                    user_id: this.$parent.user.id,
                }
            }
        },
        created(){
          this.$store.dispatch('getAllCategories')
        },
        methods: {
          store(){
            this.$store.dispatch('storePost', this.draft)
                .then(response => {
                    this.$router.push({path: '/blog'})
                })
          },
        },
        computed: {
            validForm(){
              return true
            },
            categories(){
              return this.$store.state.Category.list
            },
        },
    }
</script>