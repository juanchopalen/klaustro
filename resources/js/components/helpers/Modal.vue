<template>
  <!-- Modal-->
  <div class="modal modal-custom modal-account fade" :id="name" tabindex="-1" role="dialog" :data-autoshow="autoshow">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        </div>
        <div class="modal-body text-center">
          <div class="modal-body-inner">
            <figure class="modal-account-image">
              <slot name="image">
                <img src="images/registration-modal-01-510x807.jpg" alt="" width="510" height="807"/>
              </slot>
            </figure>
          </div>
          <div class="modal-body-inner">
            <h4 class="modal-title"><slot name="title">Title</slot></h4>
            <!-- RD Mailform-->
            <slot name="body">
              Custom body
            </slot>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    props: {
      name: {default: null},
      autoshow: {default: false}
    }
  }
</script>