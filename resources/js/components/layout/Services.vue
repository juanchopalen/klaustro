<template>
    <section class="section section-lg novi-background bg-cover text-center">
      <div class="container container-wide">
        <h3>{{ translate(home, 'services_title') }}</h3>
        <div class="divider divider-default"></div>
        <div class="row row-50 row-xxl-90 offset-custom-2 text-left">
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon fl-bigmug-line-pencil85"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service1_title') }}</h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service1_description') }}</div>
            </article>
          </div>
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon fl-bigmug-line-equalizer26"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service2_title') }}</h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service2_description') }}oposal

            </div>
            </article>
          </div>
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon box-minimal-icon-sm fl-bigmug-line-monitor74"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service3_title') }} </h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service8_description') }}</div>
            </article>
          </div>
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon fl-bigmug-line-upload91"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service4_title') }} </h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service4_description') }}</div>
            </article>
          </div>
          <!-- row 2     -->
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon fl-bigmug-line-cube29"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service5_title') }}</h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service5_description') }}</div>
            </article>
          </div>
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon fl-bigmug-line-cellphone55"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service6_title') }}</h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service6_description') }}</div>
            </article>
          </div>
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon fl-bigmug-line-planetary2"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service7_title') }}</h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service7_description') }}</div>
            </article>
          </div>
          <div class="col-sm-10 col-md-6 col-xl-3">
            <article class="box-minimal">
              <div class="box-minimal-header">
                <div class="box-minimal-icon novi-icon fl-bigmug-line-nine16"></div>
                <h6 class="box-minimal-title">{{ translate(home, 'service8_title') }}</h6>
              </div>
              <div class="box-minimal-text">{{ translate(home, 'service8_description') }}</div>
            </article>
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
