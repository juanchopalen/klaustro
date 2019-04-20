<template>
    <section class="section section-md bg-gradient-1 novi-background bg-cover text-center text-md-left d-none d-sm-block">
      <div class="container-wide">
        <div class="row row-fix row-50 justify-content-sm-center">
          <div class="col-xxl-8">
            <div class="box-cta box-cta-inline">
              <div class="box-cta-inner">
                <h3 class="box-cta-title">{{ translate(home, 'consulting_title') }}</h3>
                <p>{{ translate(home, 'consulting_subtile') }}</p>
              </div>
              <div class="box-cta-inner">
                <router-link class="button button-secondary" to="contact" @click.native="scrollToTop">{{ translate(home, 'consulting_button') }}</router-link>
              </div>
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
    methods: {
           scrollToTop() {
                window.scrollTo(0,0);
           }
    }
  }
</script>
