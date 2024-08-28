<template>
    <AppHead title="Post" />

    <PostTitle :title="post.title" :category="post.category.name" />

    <section class="ac-post-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                  <Post :post />
                  <Related />
                  <Comments :comments="post.comments" />
                </div>
                <div class="col-xl-4 col-lg-4">
                  <PostSidebar :categories />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import PostTitle from '@/Components/Post/PostTitle.vue'
import Post from '@/Components/Post/Post.vue'
import Related from '@/Components/Post/Related.vue'
import Comments from '@/Components/Post/Comments.vue'
import PostSidebar from '@/Components/Post/PostSidebar.vue'
defineProps(['post','categories'])
</script>

<style lang="scss" scoped>

</style>