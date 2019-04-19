<template>
    <!-- Blog-->
    <section class="section section-xl bg-gray-lighter">
      <div class="container container-bigger" :class="loading ? 'loading' : ''">
        <template v-if="user">
          <router-link to="/blog/create-post"><h4><span class="icon novi-icon icon-md icon-primary mdi mdi-plus"></span> Add new post</h4></router-link>
        </template>
        <div class="row row-50 row-md-90 justify-content-md-center justify-content-xl-between">
          <div class="col-md-10 col-lg-8 col-xl-7 text-center">
          <transition name="bounce" enter-active-class="bounceInLeft" leave-active-class="bounceOutRight">
            <p v-if="posts.length == 0 && !loading" class="breadcrumbs-custom-subtitle">Sorry, But Posts Was not Found</p>
          </transition>


          <transition name="bounce" enter-active-class="bounceInLeft" leave-active-class="bounceOutRight">
            <div v-if="posts.length > 0 && !loading" class="row row-30">
              <div v-for="post in posts" class="col-md-6">
                <article class="post-blog">
                  <router-link class="post-blog-image" :to="'blog/' + post.slug"><img :src="post.image" alt="" width="420" height="305"/></router-link>
                  <div class="post-blog-caption">
                    <div class="post-blog-caption-header">
                      <ul class="post-blog-tags">
                        <li><router-link class="button-tags" :to="'blog/' + post.slug">{{ translate(post.category, 'name') }}</router-link></li>
                      </ul>
                      <ul class="post-blog-meta">
                        <li><span>by</span>&nbsp;<a href="#">{{ post.author }}</a></li>
                      </ul>
                    </div>
                    <div class="post-blog-caption-body">
                      <h5><router-link class="post-blog-title" :to="'blog/' + post.slug">{{ translate(post, 'title') }}</router-link>
                        <a v-if="user && user.admin == 1" href="##" @click="remove(post.id)"><span class="icon novi-icon icon-md icon-secondary mdi mdi-delete" title="Delete post"></span></a></h5>
                    </div>
                    <div class="post-blog-caption-footer">
                      <time datetime="2018">{{ post.created_at | moment("MMMM Do YYYY") }}</time>
                      <router-link class="post-comment" :to="'blog/' + post.slug">
                        <span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span>
                        <span>{{ post.comments_count }}</span>
                      </router-link>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            </transition>
            <b-pagination
              v-if="posts.length > 0 && !loading"
              :total-rows="totalRows"
              size="md"
              v-model="currentPage"
              @input="getPosts"
              :per-page="perPage"
              class="pagination-custom"
              :limit="3"
            ></b-pagination>
          </div>
          <div class="col-md-10 col-lg-4 blog-aside">
            <div class="blog-aside-item">
              <h6>Search</h6>
              <form class="rd-search rd-search-modern">
                <div class="form-wrap">
                  <input v-model="target" @keyup.enter="getAllPosts" class="rd-search-input form-input" id="rd-search-input" type="text" name="s" autocomplete="off" placeholder="Search">
                </div>
                <button @click.prevent="getAllPosts"  class="button mdi mdi-magnify" type="submit"></button>
              </form>
            </div>
            <div class="blog-aside-item">
              <h6>Archive</h6>
              <ul class="list-marked list-marked-secondary">
                <li><a href="##" @click="getAllPosts">All Posts</a></li>
                <li v-for="month in months">
                  <a href="##" @click="getPostByMonth(month)">{{ month.label }}</a>
                </li>
              </ul>
            </div>
            <div class="blog-aside-item">
              <h6>About me</h6>
              <p>IT Professional graduated in Nueva Esparta University in Venezuela, more than 15 yeas of experience developing high performance applications. In last years I have worked with Laravel framework for the backend, PHPUnit for test-driven development, Vue.js as javascript framework for the frontend, bootstrap and Sass for manage styles sheets.          Finally using continuos integration, like Codeship or travis CI, the customer receive a quality tested product</p><router-link class="button button-xs button-default-outline button-nina" to="/">learn more</router-link>
            </div>
            <div class="blog-aside-item">
              <h6>categories</h6>
              <ul class="list-marked list-marked-secondary">
                <li><a href="##" @click="getAllPosts">All Categories</a></li>
                <li v-for="category in categories">
                  <a href="##" @click="getPostByCategory(category.id)">{{ category.name}}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <spinner v-if="loading"></spinner>
    </section>
</template>
<script>
    export default {
      data(){
        return {
          target: '',
          currentPage: null,
          month: null,
          category: '',
          talfi: false
        }
      },
      created(){
        this.getPosts()
        this.getCategories()
      },
      methods:{
        getPosts(){
          let params = {page: this.currentPage, target: this.target, month: this.month, category: this.category, rows: 4}
          this.$store.dispatch('getPosts', params)
          window.scrollTo(0,0)
        },
        getAllPosts(){
          this.month = null
          this.category = ''
          this.getPosts()
          this.talfi= true
        },
        getPostByMonth(value){
          this.category = ''
          this.month = value
          this.getPosts()
        },
        getPostByCategory(value){
          this.month = null
          this.category = value
          this.getPosts()
        },
        getCategories(){
          let params = {rows: 5}
          this.$store.dispatch('getCategories', params)
        },
        remove(id){
                this.$swal({
                  title: 'Delete post',
                  text: 'Are you sure?',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes',
                  cancelButtonText: 'No',
                }).then((result) => {
                  if (result.value) {
                    this.$store.dispatch('removePost', id)
                  }
                })
        },
      },
      computed: {
        posts(){
          return this.$store.state.Post.data
        },
        current_page(){
            return this.$store.state.Post.currentPage
        },
        totalRows(){
            return this.$store.state.Post.totalRows
        },
        perPage(){
            return parseInt(this.$store.state.Post.perPage)
        },
        loading(){
           return this.$store.state.Post.loading
        },
        categories(){
          return this.$store.state.Category.data
        },
        months(){
          const moment = require('moment')
          let months = []
          for (var i = 4; i >= 0; i--) {
            months.push({
              value: moment().subtract(i, "month").format('MM'),
              year: moment().subtract(i, "month").format('YYYY'),
              label: moment().subtract(i, "month").format('MMMM YYYY')
            })
          }
          return months
        },
        user(){
          return this.$parent.user
        }
      }
    }
</script>
