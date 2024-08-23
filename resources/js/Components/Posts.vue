<template>
<section class="ac-post-home mt-50 post-fundo">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 post-espaco">
                <div class="col-md-6 post-titulo">
                    <h2 class="fw-bold">posts</h2>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="#" class="ac-btn">Todos Posts</a>
                </div>
            </div>
        </div>
        <div class="ac-post-content">
            <div class="row gx-5">
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="ac-posta-main-content">
                        <div class="ac-post-img img-transition-scale">
                            <Link :href="route('post.show',posts[0].slug)">
                                <img :src="posts[0].image" alt="do php ao laravel">
                            </Link>
                        </div>
                        <div class="ac-posta-meta-content">
                            <div class="ac-meta-box">
                                <div class="ac-meta-btn">
                                    <span>{{ posts[0].category.name }}</span>
                                </div>
                                <div class="ac-meta-date">
                                    <span>
                                        {{ formatDate(posts[0].created_at) }}
                                    </span>
                                </div>
                            </div>
                            <div class="ac-post-img-title left">
                                <h2>
                                    <Link :href="route('post.show',posts[0].slug)" class="text-capitalize">
                                        {{ posts[0].title }}
                                    </Link>
                                </h2>

                                <p v-snip="{ lines: 3 }">
                                    {{ posts[0].content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="right-side">
                        <div class="ac-posta-main-content small" v-for="post in postsSidebar" :key="post.id">
                            <div class="ac-post-img img-transition-scale">
                                <Link :href="route('post.show',post.slug)">
                                    <img :src="post.image" alt="do php ao laravel">
                                </Link>
                            </div>
                            <div class="ac-posta-meta-content">
                                <div class="ac-meta-box">
                                    <div class="ac-meta-btn">
                                        <span>{{ post.category.name }}</span>
                                    </div>
                                    <div class="ac-meta-date">
                                        <span>
                                            {{ formatDate(post.created_at) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="ac-post-img-title">
                                    <h3>
                                        <Link :href="route('post.show',post.slug)" class="text-capitalize title-hover">
                                            {{ post.title }}
                                        </Link>
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script setup>
import {computed} from 'vue';
import {formatDate} from '../helpers.js';
const props = defineProps(['posts']);

const postsSidebar = computed(() => {
    return props.posts.slice(1, 3);
});
</script>

<style lang="scss" scoped>

</style>