<template>
    <section class="section section-lg bg-default">
        <div class="container container-wide">
          <div class="row justify-content-sm-center">
            <div v-if="post" class="col-lg-10 col-xl-8 col-xxl-6 sections-collapsable single-post-wrap">
              <article class="post-blog-article">
                <p class="post-blog-article-title">{{ post.title }}</p>
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
                <p v-html="post.intro"></p><img :src="post.image" alt="" width="870" height="580"/>
                <p v-html="post.content"></p>
                <div class="group-md group-middle button-group"><a class="button button-icon-alternate button-icon-left button-sm button-facebook" href="#"><span class="icon novi-icon mdi mdi-facebook"></span>Facebook</a><a class="button button-icon-alternate button-icon-left button-sm button-twitter" href="#"><span class="icon novi-icon mdi mdi-twitter"></span>Twitter</a><a class="button button-icon-alternate button-icon-left button-sm button-google" href="#"><span class="icon novi-icon mdi mdi-google"></span>Google</a></div>
              </article>

              <comments :post_id="post.id"></comments>

            </div>
          </div>
        </div>
    </section>
</template>
<script>
    export default {
        created(){
            this.$store.dispatch('getPost', {slug: this.slug})
            window.scrollTo(0,0);
        },
        computed: {
            slug(){
                return this.$route.params.slug
            },
            post(){
                return this.$store.state.Post.solo
            }
        },
    }
</script>