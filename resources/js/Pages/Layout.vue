<template>
<!--==============================
COMEÇA BUSCA
============================== -->
<Search :toggleSearch @openSearchBox="toggleSearchBox" />
<!--==============================
FIM BUSCA
============================== -->

<!--==============================
COMEÇA MENU MOBILE
============================== -->
<MenuMobile />
<!--==============================
FIM MENU MOBILE
============================== -->
<!--==============================
COMEÇA HEADER
============================== -->
<Header @openSearchBox="toggleSearchBox" />
<!--==============================
    FIM HEADER
==============================-->
<slot />

<Footer />

<!--==============================
    FIM FOOTER
============================== -->

<!--==============================
    SCROLL TO TOP
============================== -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import Search from '@/Components/Search.vue'
import MenuMobile from '@/Components/MenuMobile.vue'
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'

const toggleSearch = ref(false);

function toggleSearchBox() {
    toggleSearch.value = !toggleSearch.value;
}

</script>

<style lang="scss" scoped>

</style>