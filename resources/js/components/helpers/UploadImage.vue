<template>
  <vue-dropzone
    ref="imagesContainer"
    id="imagesContainer"
    :options="dropzoneOptions"
    @vdropzone-file-added="change"
    @vdropzone-removed-file="change"
  ></vue-dropzone>
</template>
<script>
  import vue2Dropzone from 'vue2-dropzone'
  import 'vue2-dropzone/dist/vue2Dropzone.min.css'

  export default {
    props: ['value'],
    name: 'app',
    components: {
      vueDropzone: vue2Dropzone
    },
    data: function () {
      return {
        dropzoneOptions: {
            url: 'http://localhost',
            thumbnailMethod: 'contain',
            maxFilesize: 2,
            headers: { "My-Awesome-Header": "header value" },
            autoProcessQueue: false,
            maxFiles: 1,
            addRemoveLinks: true,
            thumbnailWidth: 200,
        }
      }
    },
    methods: {
      change(){
          if(this.drop.files.length > 1){
              this.drop.removeFile(this.drop.files[1])
          }
          this.$emit('input', this.drop.files[0])
      },
    },
    computed: {
        drop(){
            return this.$refs.imagesContainer.dropzone
        }
    },
  }
</script>