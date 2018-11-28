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
                    <router-link to="/" @click.native="scrollToTop" data-rd-navbar-toggle="rd-navbar">Home</router-link>
                  </li>
                  <li :class="active == 'contact' ? 'active' : ''">
                    <router-link to="/contact" @click.native="scrollToTop" data-rd-navbar-toggle="rd-navbar">Contact</router-link>
                  </li>
                  <li :class="active == 'blog' || active == 'post' ? 'active' : ''">
                    <router-link to="/blog" @click.native="scrollToTop" data-rd-navbar-toggle="rd-navbar">Blog</router-link>
                  </li>
                  <li v-if="user"><a href="#">{{ user.name }}</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">
                      <li><a href="/logout">Logout</a>
                      </li>
                    </ul>
                  </li>
                  <template v-else>
                    <li>
                      <a href="#" data-toggle="modal" data-target="#login">Login</a>
                    </li>
                    <li>
                      <a href="#" data-toggle="modal" data-target="#register">Sign up</a>
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
              <router-link class="button button-sm button-default-outline button-nina" to="/contact" @click.native="scrollToTop" data-rd-navbar-toggle="rd-navbar">Book a Service</router-link>
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
        },
        methods: {
           scrollToTop() {
                window.scrollTo(0,0);
           }
        }
    }
</script>