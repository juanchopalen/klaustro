<template>
    <div>
      <div class="section-md" :class="loading ? 'loading' : ''">
        <p class="h3-alternate">Comments</p>
        <div class="comment-group">
            <template v-for="comment in comments">
                <!-- Comment-->
                <article class="comment">
                    <div class="comment-avatar"><img src="/images/user.png" alt="" width="80" height="80"/>
                    </div>
                    <div class="comment-body">
                      <div class="comment-header">
                        <p class="comment-title">{{ comment.name }}</p>
                        <time class="comment-time" datetime="2018">{{ comment.created_at | moment("MMMM Do YYYY") }}</time>
                      </div>
                      <div class="comment-text">
                        <p>{{ comment.message }}</p>
                      </div>
                      <div class="comment-footer"><a class="comment-link-reply" href="##" @click="reply = comment.id">Reply</a></div>
                    </div>
                </article>
                <create-comment
                    v-if="reply == comment.id"
                    :post_id="post_id"
                    :reply="comment.id"
                    @submited="submited"
                ></create-comment>
                <!-- Replies -->
                <div v-if="comment.replies.length > 0" class="comment-group">
                <!-- Comment-->
                    <article v-for="reply in comment.replies" class="comment">
                      <div class="comment-avatar"><img src="/images/user.png" alt="" width="80" height="80"/>
                      </div>
                      <div class="comment-body">
                        <div class="comment-header">
                          <p class="comment-title">{{ reply.name }}</p>
                          <time class="comment-time" datetime="2018">{{ reply.created_at | moment("MMMM Do YYYY")}}</time><span class="comment-reply">{{ comment.name }}</span>
                        </div>
                        <div class="comment-text">
                          <p>{{ reply.message }}</p>
                        </div>
                      </div>
                    </article>
                </div>
            </template>
        </div>
        <b-pagination
          :total-rows="totalRows"
          size="md"
          v-model="currentPage"
          @input="getComments"
          :per-page="perPage"
          class="pagination-custom"
          :limit="3"
        ></b-pagination>
      </div>
      <create-comment
          v-if="reply == null"
          :post_id="post_id"
          @submited="submited"
      ></create-comment>
      <spinner v-if="loading"></spinner>
    </div>
</template>
<script>
    export default {
        props:['post_id'],
        data(){
            return {
                currentPage: null,
                reply: null,
            }
        },
        methods:{
            getComments(){
                this.$store.dispatch('getComments', {page: this.currentPage, post_id: this.post_id, rows: 5})
            },
            submited(){
                this.reply = null
                this.getComments()
            },
        },
        computed:{
            comments(){
                return this.$store.state.Comment.data
            },
            current_page(){
                return this.$store.state.Comment.currentPage
            },
            totalRows(){
                return this.$store.state.Comment.totalRows
            },
            perPage(){
                return parseInt(this.$store.state.Comment.perPage)
            },
            loading(){
               return this.$store.state.Comment.loading
            }
        },
        watch:{
          post_id(val){
            if (val) {
              this.getComments()
            }
          }
        }
    }
</script>