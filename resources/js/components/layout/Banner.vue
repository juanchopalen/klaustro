<template>
<section class="section section-xl bg-image bg-image-9 novi-background custom-bg-image text-center">
  <div class="container container-wide">
    <div class="row row-50 row-fix justify-content-sm-center">
      <div class="col-md-10 col-xl-6">
        <div class="heading-group">
          <p class="heading-3 text-elight">WEB APPLICATION DEVELOPMENT</p>
          <h1>juan palencia</h1>
          <p class="heading-3 text-elight"><a href="/">klaustro.net</a></p>
        </div>
        <div class="divider divider-default"></div>
        <p class="heading-5">IT Professional graduated in Nueva Esparta University in Venezuela, more than 15 yeas of experience developing high performance applications</p>
        <div class="group-md button-group"><router-link class="button button-secondary button-nina" to="contact" @click.native="scrollToTop">free consultation</router-link></div>
      </div>
    </div>
  </div>
</section>
</template>

<script>
    export default {
        methods: {
           scrollToTop() {
                window.scrollTo(0,0);
           }
        }
    }
</script>
