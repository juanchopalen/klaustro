<template>
    <section class="section section-lg bg-default">
        <div class="container container-wide">
          <div class="row justify-content-sm-center">
            <div v-if="post" class="col-lg-10 col-xl-8 col-xxl-6 sections-collapsable single-post-wrap">
              <article class="post-blog-article">
                <template v-if="! editing">
                <p class="post-blog-article-title">{{ translate(post, 'title') }}
                  <template v-if="canEdit">
                    <a @click="edit" href="#" title="Edit"><span class="icon novi-icon icon-md icon-primary mdi mdi-pencil"></span></a>
                  </template>
                </p>
                <ul class="post-blog-article-meta group-xl">
                  <li>
                    <div class="box-inline"><span class="icon novi-icon icon-md icon-primary mdi mdi-account"></span>by
                      <div><a href="#">{{ post.author }}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="box-inline"><span class="icon novi-icon icon-md icon-primary mdi mdi-calendar-clock"></span>
                      <time datetime="2018">{{ post.created_at | moment("MMMM Do YYYY") }}</time>
                    </div>
                  </li>
                </ul>
                  <p v-html="translate(post, 'intro')"></p>
                  <p class="text-center">
                    <img href="#" :src="post.image" alt="" width="870" height="580"/>
                  </p>
                  <p v-html="translate(post, 'content')"></p>
                </template>
                <template v-else>
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
                    <upload-image v-model="draft.image"></upload-image>
                  </p>
                  <p>
                    <label><b>Post Content</b></label>
                    <wysiwyg v-model="draft.content"></wysiwyg>
                  </p>
                  <div class="form-button">
                    <button @click.prevent="store" class="button button-secondary button-nina" type="submit" :disabled="!validForm">save</button>
                    <button @click.prevent="cancel" class="button button-primary button-nina" type="submit" style="top: -18px">cancel</button>
                  </div>
                </template>
                <div class="group-md group-middle button-group">
                  <a class="button button-icon-alternate button-icon-left button-sm button-facebook" href="https://www.facebook.com/juanchopalen" target="blank"><span class="icon novi-icon mdi mdi-facebook"></span>Facebook</a>
                  <a class="button button-icon-alternate button-icon-left button-sm button-twitter" href="https://twitter.com/juanchopalen_en" target="blank"><span class="icon novi-icon mdi mdi-twitter"></span>Twitter</a>
                  <a class="button button-icon-alternate button-icon-left button-sm button-google" href="https://plus.google.com/u/0/114769580272235387328" target="blank"><span class="icon novi-icon mdi mdi-google"></span>Google</a></div>
              </article>

              <comments :post_id="post.id"></comments>

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
              category_id: null,
              title: '',
              intro: '',
              content: '',
              language_id: null,
            },
            editing: false,
          }
        },
        created(){
            this.$store.dispatch('getPost', {slug: this.slug})
            window.scrollTo(0,0);
        },
        methods: {
          edit(){
            //Clone post
            this.$store.dispatch('getAllCategories')
            this.draft = JSON.parse(JSON.stringify(this.post))
            this.draft.language_id = this.$store.getters.getLanguageId
            this.editing = true
          },
          store(){
            this.$store.dispatch('updatePost', this.draft)
            this.editing = false
          },
          cancel(){
            this.editing = false
          },
        },
        computed: {
            slug(){
                return this.$route.params.slug
            },
            post(){
                return this.$store.state.Post.solo
            },
            validForm(){
              return true
            },
            user(){
              return this.$parent.user
            },
            canEdit(){
              if (this.user == null) {
                return false
              }
              return this.user.admin == 1 || this.post.user_id == this.user.id
            },
            categories(){
              return this.$store.state.Category.list
            },
        },
    }
</script>
