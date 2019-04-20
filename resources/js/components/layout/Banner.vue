<template>
<section class="section section-xl bg-image bg-image-9 novi-background custom-bg-image text-center">
  <div class="container container-wide">
    <div class="row row-50 row-fix justify-content-sm-center">
      <div class="col-md-10 col-xl-6">
        <div class="heading-group">
          <p class="heading-3 text-elight">{{ translate(home, 'header_title') }}</p>
          <h1>juan palencia</h1>
          <p class="heading-3 text-elight"><a href="/">klaustro.net</a></p>
        </div>
        <div class="divider divider-default"></div>
        <p class="heading-5">{{ translate(home, 'header_subtitle') }}</p>
        <div class="group-md button-group"><router-link class="button button-secondary" to="contact" @click.native="scrollToTop">{{ translate(home, 'header_button') }}</router-link></div>
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
    methods: {
       scrollToTop() {
            window.scrollTo(0,0);
       }
    }
  }
</script>
