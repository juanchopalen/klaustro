<template>
  <div>

    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap rd-navbar-centered">
        <nav class="rd-navbar novi-background" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
          <div class="rd-navbar-inner">
            <div class="rd-navbar-aside-left">
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li :class="active == 'home' ? 'active' : ''">
                    <router-link to="/" @click.native="scrollToTop" data-rd-navbar-toggle="rd-navbar">{{ translate(home, 'navbar_home') }}</router-link>
                  </li>
                  <li :class="active == 'contact' ? 'active' : ''">
                    <router-link to="/contact" @click.native="scrollToTop" data-rd-navbar-toggle="rd-navbar">{{ translate(home, 'navbar_contact') }}</router-link>
                  </li>
                  <li :class="active == 'blog' || active == 'post' ? 'active' : ''">
                    <router-link to="/blog" @click.native="scrollToTop" data-rd-navbar-toggle="rd-navbar">Blog</router-link>
                  </li>
                  <li v-if="user"><a href="#">{{ user.name }}</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="/logout">{{ translate(home, 'navbar_logout') }}</a>
                      </li>
                    </ul>
                  </li>
                  <template v-else>
                    <li>
                      <a href="#" data-toggle="modal" data-target="#login">{{ translate(home, 'navbar_login') }}</a>
                    </li>
                    <li>
                      <a href="#" data-toggle="modal" data-target="#register">{{ translate(home, 'navbar_signup') }}</a>
                    </li>
                  </template>
                </ul>
              </div>
            </div>
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><router-link class="brand-name" to="/"><img class="logo-default" src="/images/logo-default-128x52.png" alt="" width="128" height="52"/><img class="logo-inverse" src="/images/logo-inverse-128x52.png" alt="" width="128" height="52"/></router-link></div>
            </div>
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-right rd-navbar-collapse">
              <!-- RD Navbar Search-->
                <ul class="rd-navbar-nav">
                  <li><a href="#" class="text-upper"><span class="icon novi-icon icon-md icon-primary mdi mdi-web"></span> {{ currentLang ? currentLang.code : 'EN' }}</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li v-for="language in languages">
                        <a href="javascript:void(0)" @click="setLanguage(language.id)" :class="language === currentLang ? 'active' : ''">
                          {{ language.name }}
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <register :errors="errors"></register>
    <login :errors="errors"></login>
  </div>
</template>
<script>
    export default {
        props: ['user', 'errors'],
        computed: {
            active(){
                return this.$route.name
            },
            languages(){
              return this.$store.getters.getLanguages
            },
            currentLang(){
              if (! this.languages) {
                return null
              }
              return this.languages.find( lang => lang.id === this.$store.getters.getLanguageId )
            },
            home(){
              return this.$store.getters.getPage('home')
            }
        },
        created(){
            this.$store.dispatch('getPages')
              .then(response => {
                this.$store.dispatch('getLanguages')
                  .then(response => {
                    if (this.$store.getters.getLanguageId == null) {
                      let current = this.$store.getters.getLanguages.find(language => language.active === true)
                      this.$store.dispatch('setLanguageId', current.id)
                    }
                  })
              })
        },
        methods: {
          setLanguage(id){
            this.$store.dispatch('setLanguageId', id)
          },
           scrollToTop() {
                window.scrollTo(0,0);
           }
        },
    }
</script>
<style scoped>
  .active {
    font-weight: bold !important
  }
</style>
