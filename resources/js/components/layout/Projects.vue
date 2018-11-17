<template>
<section class="section section-lg bg-default novi-background bg-cover text-center">
  <div class="container container-wide">
    <div class="row row-fix">
      <div class="col-sm-12">
        <h3>latest Projects</h3>
        <div class="divider divider-default"></div>
        <div class="row row-50">
            <div v-for="post in posts" class="col-md-6 col-xl-4">
                <article class="event-default-wrap">
                  <div class="event-default">
                    <figure class="event-default-image"><img :src="post.image" alt="" width="570" height="370"/>
                    </figure>
                    <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="registration-page.html">View Post</a></div>
                  </div>
                  <div class="event-default-inner">
                    <div class="box-inline"><span class="icon novi-icon icon-md-middle icon-secondary mdi mdi-calendar"></span><a class="event-default-link" href="single-post.html">{{ post.created_at | moment("MMMM Do YYYY") }}</a></div>
                    <h5><a class="event-default-title" href="#">{{ post.title }}</a></h5>
                  </div>
              </article>
            </div>
        </div>
      </div>
    </div><a class="button button-secondary button-nina" href="classic-blog.html">view all blog posts</a>
  </div>
</section>
</template>
<script>
    export default {
        data(){
            return {
                posts: [],
            }
        },
        created(){
            this.getPosts()
        },
        methods: {
            getPosts(){
                axios.get('/api/posts?rows=3')
                    .then(response => {
                        this.posts = response.data.data
                    })
                    .catch(error => {
                        console.log(error)
                    })
            }
        }
    }
</script>