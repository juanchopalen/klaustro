<template>
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap rd-navbar-centered">
        <nav class="rd-navbar novi-background" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
          <div class="rd-navbar-inner">
            <div class="rd-navbar-aside-left">
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li :class="active == 'home' ? 'active' : ''"><router-link to="/">Home</router-link>
                  </li>
                  <li :class="active == 'contact' ? 'active' : ''"><router-link to="contact" @click.native="scrollToTop">Contact</router-link>
                  </li>
                  <li class="rd-navbar--has-megamenu rd-navbar-submenu"><a href="#">Blocks</a>
                    <!-- RD Navbar Megamenu-->
                    <ul class="rd-navbar-megamenu">
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="blocks-accordions.html">Accordions</a></li>
                          <li><a href="blocks-cta.html">Call to Actions</a></li>
                          <li><a href="blocks-cards.html">Cards</a></li>
                          <li><a href="blocks-contact-forms.html">Contact Forms</a></li>
                          <li><a href="blocks-footers.html">Footers</a></li>
                          <li><a href="blocks-galleries.html">Galleries</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="blocks-large-features.html">Large Features</a></li>
                          <li><a href="blocks-maps.html">Maps</a></li>
                          <li><a href="blocks-navigation-bars.html">Navigation Bars</a></li>
                          <li><a href="blocks-pricing.html">Pricing</a></li>
                          <li><a href="blocks-processes.html">Processes</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="blocks-signup-forms.html">Sign Up Forms</a></li>
                          <li><a href="blocks-sliders.html">Sliders</a></li>
                          <li><a href="blocks-small-features.html">Small Features</a></li>
                          <li><a href="blocks-subscription-forms.html">Subscribe Forms</a></li>
                          <li><a href="blocks-tabs.html">Tabs</a></li>
                          <li><a href="blocks-teams.html">Teams</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="blocks-testimonials.html">Testimonials</a></li>
                          <li><a href="blocks-text-layouts.html">Text Layouts</a></li>
                          <li><a href="blocks-titles.html">Titles</a></li>
                          <li><a href="blocks-videos.html">Videos</a></li>
                          <li><a href="blocks-isotope.html">Isotope</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="rd-navbar--has-megamenu rd-navbar-submenu"><a href="#">Pages</a>
                    <!-- RD Navbar Megamenu-->
                    <ul class="rd-navbar-megamenu">
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="404-page.html">404 Page</a></li>
                          <li><a href="503-page.html">503 Page</a></li>
                          <li><a href="about-me.html">About Me</a></li>
                          <li><a href="about-us.html">About Us</a></li>
                          <li><a href="careers.html">Careers</a></li>
                          <li><a href="coming-soon.html">Coming Soon</a></li>
                          <li><a href="contacts.html">Contacts</a></li>
                          <li><a href="contacts-variant-2.html">Contacts variant 2</a></li>
                          <li><a href="login-page.html">Login Page</a></li>
                          <li><a href="our-history.html">Our History</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="pricing-page.html">Pricing Page</a></li>
                          <li><a href="registration-page.html">Registration Page</a></li>
                          <li><a href="search-results.html">Search Results</a></li>
                          <li><a href="single-job.html">Single Job</a></li>
                          <li><a href="services.html">Services</a></li>
                          <li><a href="single-service.html">Single Service</a></li>
                          <li><a href="services-variant-2.html">Services variant 2</a></li>
                          <li><a href="under-construction.html">Under Construction</a></li>
                          <li><a href="shop-3-columns-layout.html">Shop 3 Columns Layout</a></li>
                          <li><a href="shop-4-columns-layout.html">Shop 4 Columns Layout</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="checkout.html">Checkout</a></li>
                          <li><a href="product-page.html">Product Page</a></li>
                          <li><a href="shopping-cart.html">Shopping Cart</a></li>
                          <li><a href="classic-blog.html">Classic Blog</a></li>
                          <li><a href="grid-blog.html">Grid Blog</a></li>
                          <li><a href="masonry-blog.html">Masonry Blog</a></li>
                          <li><a href="modern-blog.html">Modern Blog</a></li>
                          <li><a href="audio-post.html">Audio Post</a></li>
                          <li><a href="single-post.html">Single Post</a></li>
                          <li><a href="image-post.html">Image Post</a></li>
                          <li><a href="video-post.html">Video Post</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="grid-gallery-outside-title.html">Grid Gallery Outside Title</a></li>
                          <li><a href="grid-gallery-inside-title.html">Grid Gallery Inside Title</a></li>
                          <li><a href="grid-gallery-hover-title.html">Grid Gallery Hover Title</a></li>
                          <li><a href="masonry-gallery-inside-title.html">Masonry Gallery Inside Title</a></li>
                          <li><a href="masonry-gallery-outside-title.html">Masonry Gallery Outside Title</a></li>
                          <li><a href="masonry-gallery-hover-title.html">Masonry Gallery Hover Title</a></li>
                          <li><a href="fullwidth-gallery-hover-title.html">Fullwidth Gallery Hover Title</a></li>
                          <li><a href="fullwidth-gallery-inside-title.html">Fullwidth Gallery Inside Title</a></li>
                          <li><a href="grid-album-gallery.html">Grid Album Gallery</a></li>
                          <li><a href="single-project.html">Single Project</a></li>
                          <li><a href="single-event.html">Single Event</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="logo-default" src="images/logo-default-128x52.png" alt="" width="128" height="52"/><img class="logo-inverse" src="images/logo-inverse-128x52.png" alt="" width="128" height="52"/></a></div>
            </div>
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-right rd-navbar-collapse">
              <!-- RD Navbar Search-->
              <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                  <div class="form-wrap">
                    <label class="form-label form-label" for="rd-navbar-search-form-input">Search...</label>
                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                    <div class="rd-search-results-live"> </div>
                  </div>
                  <button class="rd-search-form-submit mdi mdi-magnify"></button>
                </form>
              </div><router-link class="button button-sm button-default-outline button-nina" to="contact" @click.native="scrollToTop">Book a Service</router-link>
            </div>
          </div>
        </nav>
      </div>
    </header>
</template>
<script>
    export default {
        computed: {
            active(){
                return this.$route.name
            }
        },
        methods: {
           scrollToTop() {
                window.scrollTo(0,0);
           }
        }
    }
</script>