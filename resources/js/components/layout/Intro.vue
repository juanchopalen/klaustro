<template>
    <section class="section section-lg bg-gray-lighter novi-background bg-cover">
      <div class="container container-bigger">
        <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between">
          <div class="col-md-10 col-lg-6 col-xxl-5 text-gray-light">
            <h3>a few words about me</h3>
            <div class="divider divider-default"></div>
            <p class="heading-5">In last years I have worked with Laravel framework for the backend, PHPUnit for test-driven development, Vue.js as javascript framework for the frontend, bootstrap and Sass for manage styles sheets</p>
            <p>Finally using continuos integration, like Codeship or travis CI, the customer receive a quality tested product</p><router-link class="button button-secondary button-nina" to="/blog">learn more</router-link>
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
        //
    }
</script>