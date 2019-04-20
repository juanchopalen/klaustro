<template>
    <footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-default">
      <div class="container container-wide">
        <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
          <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left"><router-link to="/"><img class="default-logo" src="/images/logo-default-128x52.png" alt="" width="128" height="52"/><img class="inverse-logo" src="/images/logo-inverse-128x52.png" alt="" width="128" height="52"/></router-link></div>
          <div class="col-md-10 col-lg-7 col-xl-4">
            <p class="right">&reg; <span class="copyright-year"></span> {{ translate(home, 'footer_rights') }}</p>
          </div>
          <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
            <ul class="group-xs group-middle">
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook" href="https://www.facebook.com/juanchopalen" target="_blank"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-twitter" href="https://twitter.com/juanchopalen_en" target="_blank"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram" href="https://www.instagram.com/juanchopalen/" target="_blank"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-google" href="https://plus.google.com/u/0/114769580272235387328" target="_blank"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-linkedin" href="https://www.linkedin.com/in/juan-palencia-50a35777/" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
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
