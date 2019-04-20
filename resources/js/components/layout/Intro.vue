<template>
    <section class="section section-lg bg-gray-lighter novi-background bg-cover">
      <div class="container container-bigger">
        <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between">
          <div class="col-md-10 col-lg-6 col-xxl-5 text-gray-light">
            <h3>{{ translate(home, 'intro_title') }}</h3>
            <div class="divider divider-default"></div>
            <p class="heading-5">{{ translate(home, 'intro_content') }}</p>
            <p>{{ translate(home, 'intro_close') }}</p><router-link class="button button-secondary" to="/blog">{{ translate(home, 'intro_button') }}</router-link>
          </div>
          <div class="col-md-10 col-lg-6">
            <div class="blick-wrap"><img class="image-wrap" src="images/ipad-02-718x519.png" alt="" width="718" height="519"/>
              <div class="blick-content" data-blick-content="ipad"><img src="images/blick-content-02.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>
<script>
  export default {
    computed: {
      home(){
        return this.$store.getters.getPage('home')
      }
    },
  }
</script>
