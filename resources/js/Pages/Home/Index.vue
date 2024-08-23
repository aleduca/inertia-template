<template>
<AppHead title="Home" />
<Slide />
<Posts :posts />
</template>

<script setup>
import Slide from '@/Components/Slide.vue'
import Posts from '@/Components/Posts.vue'

defineProps(['posts']);

</script>

<style lang="scss" scoped>

</style>