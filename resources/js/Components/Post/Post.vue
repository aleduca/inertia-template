<template>
<div class="ac-post-conteudo">
    <img src="@assets/images/cursos/item.webp" alt="Echo" class="post-style-1-frist-hero-img">
    <h2>{{ post.title }}</h2>
    <div class="ac-post-conteudo-like">
        <p><a><i class="fa-light fa-clock"></i>06 minutos de leitura</a></p>
        <p><a><i class="fa-light fa-eye"></i>3.5k visualizações</a></p>
        <p><a><i class="fa-light fa-comment-dots"></i> {{ post.comments.length }} Comentários</a></p>
        <p><a><i class="fa-light fa-arrow-up-from-bracket"></i>1,5k compartilhamentos</a></p>
    </div>
    <p class="lh-base">Mauris in aliquam sem fringilla ut morbi tincidunt augue. Odio ut sem nulla pharetra diam sit amet nisl suscipit. Leo a diam sollicitudin tempor id eu nisl. Praesent semper feugiat nibh sed pulvinar proin. Nisi quis
        eleifend quam adipiscing vitae proin. Odio euismod lacinia at quis risus sed vulputate odio.
        Penatibus et magnis dis parturient montes nascetur ridiculus mus. Pulvinar pellentesque habitant morbi tristique
        senectus et netus. Gravida neque convallis a cras. Maecenas pharetra convallis posuere morbi leo. Nunc id cursus metus aliquam eleifend mi in nulla posuere.
    </p>
    <p class="lh-base">Arcu dui vivamus arcu felis bibendum ut tristique et. Eu nisl nunc mi ipsum faucibus vitae aliquet nec.
        Et ultrices neque ornare aenean euismod. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Vel risus commodo viverra maecenas accumsan. Euismod elementum nisi quis eleifend.
        Diam maecenas sed enim ut. At volutpat diam ut venenatis tellus in. Est velit egestas dui id ornare arcu odio ut. Sapien nec sagittis aliquam malesuada. Tincidunt arcu non sodales neque sodales ut.
    </p>
</div>
<div class="ac-post-conteudo-quote">
    <h2 class="ac-post-conteudo-quote-titulo">"
        Lorem ipsum dolor sit amet consectetur adipisicing elit. culpa voluptatum itaque impedit, eligendi voluptas est. Corporis!"
    </h2>
    <p class="author">Alexandre Cardoso</p>
</div>
<div class="mb-50">
    <div class="mb-50">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <img src="@assets/images/cursos/dophp7.webp" class="img-fluid rounded " alt="blog">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <img src="@assets/images/cursos/dophp8.webp" class="img-fluid rounded " alt="blog">
            </div>
        </div>
    </div>
    <h3 class="title">Laravel + Nuxt</h3>
        <p class="lh-base">
            Commodo viverra maecenas accumsan lacus vel facilisis. Auctor augue mauris augue neque. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. Elementum tempus egestas sed sed risus. Id eu nisl nunc mi ipsum faucibus vitae. Sit amet nisl purus in mollis nunc sed id. Sit amet justo donec enim diam. Amet porttitor eget dolor morbi non arcu risus quis. Mauris vitae ultricies leo integer. Viverra accumsan in nisl nisi scelerisque eu. Pretium aenean pharetra magna ac placerat vestibulum.
        </p>
        <ul class="blog-conteudo-wrapper">
            <li class="blog-conteudo-wrapper-item">Scelerisque varius morbi enim nunc</li>
            <li class="blog-conteudo-wrapper-item">Cursus metus aliquam eleifend nulla.</li>
            <li class="blog-conteudo-wrapper-item">Aliquam sem et tortor consequat</li>
            <li class="blog-conteudo-wrapper-item">Neque aenean euismod elementum.</li>
            <li class="blog-conteudo-wrapper-item">Vulputate sapien nec sagittis aliquam</li>
            <li class="blog-conteudo-wrapper-item">Ac tortor dignissim convallis aenean.</li>
        </ul>
        <p class="lh-base">
            Mauris in aliquam sem fringilla ut morbi tincidunt augue. Odio ut sem nulla pharetra diam sit amet nisl suscipit. Leo a diam sollicitudin tempor id eu nisl. Praesent semper feugiat nibh sed pulvinar proin. Nisi quis eleifend quam adipiscing vitae proin. Odio euismod lacinia at quis risus sed vulputate odio. Penatibus et magnis dis parturient montes nascetur ridiculus mus.
        </p>
        <div class="row  align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="blog-conteudo-detalhe-tag d-flex">
                    <h6 class="me-2">Tags:</h6>
                    <template v-if="!post.tags.length">No Tags</template>
                    <template v-else>
                        <button v-for="tag in post.tags" :key="tag.id">{{ tag.name }}</button>
                    </template>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="blog-conteudo-detalhe-share d-flex">
                    <h6>Share:</h6>
                    <button><i class="fab fa-facebook-f"></i></button>
                    <button><i class="fab fa-twitter"></i></button>
                    <button><i class="fab fa-instagram"></i></button>
                    <button><i class="fab fa-linkedin-in"></i></button>
                </div>
            </div>
        </div>

</div>
<div class="blog-conteudo-autor">
    <div class="blog-conteudo-imagem">
        <img src="@assets/images/tema/avatar.jpg" alt="author">
    </div>
    <div class="blog-conteudo-content">
        <h5 class="mb-10">{{ post.author.name }}</h5>
        <p class="lh-base">
            I am an Example Writer. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labored et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
</div>
</template>

<script setup>
defineProps(['post'])
</script>

<style lang="scss" scoped>

</style>