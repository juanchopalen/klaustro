<template>
<section class="section section-lg text-center bg-default novi-background bg-cover">
  <div class="container container-wide">
    <h3>Tools</h3>
    <div class="divider divider-default"></div>
    <div class="row row-50 row-xxl-90 justify-content-sm-center" data-lightgallery="group">
      <div v-for="tool in tools" class="col-sm-12 col-md-6 col-lg-4"><a class="gallery-item titled-gallery-item" href="images/gallery-01-original.jpg" data-lightgallery="item">
          <div class="gallery-item-image">
            <figure><img :src="tool.image" alt="" width="570" height="380"/>
            </figure>
            <div class="caption">
            </div>
          </div></a>
        <div class="titled-gallery-caption"><a href="#">{{ tool.title }}</a></div>
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
                        title: '348% More Organic Traffic in 7 Days',
                        image: 'images/gallery-grid-01-570x380.jpg',
                    },
                    {
                        title: 'How Manual Tasks Sabotage the Potential of Natural Search Marketers',
                        image: 'images/gallery-grid-02-570x380.jpg',
                    },
                    {
                        title: 'A Search Engine Based on Expert Documents',
                        image: 'images/gallery-grid-03-570x380.jpg',
                    },
                    {
                        title: 'Enterprise SEO Tools: The Marketer’s Guide',
                        image: 'images/gallery-grid-04-570x380.jpg',
                    },
                    {
                        title: 'SEO for Small Medical Practices',
                        image: 'images/gallery-grid-05-570x380.jpg'
                    },
                    {
                        title: 'Information Retrieval Data Structures &amp; Algorithms',
                        image: 'images/gallery-grid-06-570x380.jpg',
                    },
                ],
            }
        }
    }
</script>