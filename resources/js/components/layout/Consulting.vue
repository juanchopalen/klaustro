<template>
    <section class="section section-md bg-gradient-1 novi-background bg-cover text-center text-md-left">
      <div class="container-wide">
        <div class="row row-fix row-50 justify-content-sm-center">
          <div class="col-xxl-8">
            <div class="box-cta box-cta-inline">
              <div class="box-cta-inner">
                <h3 class="box-cta-title">do you need a consultation?</h3>
                <p>Ask without compromise, I will respond you soon</p>
              </div>
              <div class="box-cta-inner">
                <router-link class="button button-secondary button-nina" to="contact" @click.native="scrollToTop">learn more</router-link>
              </div>
            </div>
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