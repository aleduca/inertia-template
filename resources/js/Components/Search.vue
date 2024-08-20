<template>
<div class="popup-search-box d-none d-lg-block" :class="{show:toggleSearch }">
        <button class="searchClose" @click="$emit('openSearchBox')"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Qual material está procurando?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
</template>

<script setup>
const props = defineProps(['toggleSearch'])
</script>

<style lang="scss" scoped>

</style>