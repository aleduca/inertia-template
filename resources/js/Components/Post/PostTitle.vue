<template>
 <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="my-2">{{ category }}</p>
                    <h1>{{ title }}</h1>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
defineProps(['title', 'category'])
</script>

<style lang="scss" scoped>

</style>