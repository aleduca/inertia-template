<template>
<header class="ac-header ac-header-layout header-cfs">
        <div class="header-top"></div>
        <div class="ac-wrapper">
            <div class="menu-area">
                <div class="logo-bg"></div>
                <div class="container ac-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="@assets/images/tema/logo.png" alt="Clube Full-Stack"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><Link href="/">Home</Link></li>
                                    <li><Link href="/blog">blog</Link></li>
                                    <li><Link href="/contact">Contato</Link></li>
                                </ul>
                            </nav>
                            <button type="button" class="ac-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <button type="button" @click="$emit('openSearchBox')" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                                <Link href="/login" class="ac-btn btn"><i class="fas fa-user me-2"></i>Fazer login</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>