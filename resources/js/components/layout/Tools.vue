<template>
<section class="section section-lg text-center bg-default novi-background bg-cover">
  <div class="container container-wide">
    <h3>Tools</h3>
    <div class="divider divider-default"></div>
    <div class="row row-50 row-xxl-90 justify-content-sm-center" data-lightgallery="group">
      <div v-for="tool in tools" class="col-sm-12 col-md-6 col-lg-4"><a :href="tool.url" target="_blank">
          <div class="gallery-item-image">
            <figure><img :src="tool.image" alt="" width="380" height="253"/>
            </figure>
            <div class="caption">
            </div>
          </div></a>
        <div class="titled-gallery-caption text-center"><a :href="tool.url" target="_blank">{{ tool.title }}</a></div>
      </div>
    </div>
  </div>
</section>
</template>
<script>
    export default {
        data(){
            return {
                tools: [
                    {
                        title: 'PHP: Scripting Language',
                        image: 'images/php.png',
                        url: 'http://php.net/',
                    },
                    {
                        title: 'Laravel: PHP framework',
                        image: 'images/laravel.png',
                        url: 'https://laravel.com/',
                    },
                    {
                        title: 'Vue.js: Javascript Framework',
                        image: 'images/vue.png',
                        url: 'https://vuejs.org',
                    },
                    {
                        title: 'Bootstrap: HTML, CSS and Javascript Framework',
                        image: 'images/bootstrap.png',
                        url: 'https://getbootstrap.com/',
                    },
                    {
                        title: 'Git: Version Control System',
                        image: 'images/git.png',
                        url: 'https://git-scm.com/',
                    },
                    {
                        title: 'PHPUnit: Unit Testing Framework',
                        image: 'images/phpunit.png',
                        url: 'https://phpunit.de/',
                    },
                ],
            }
        }
    }
</script>