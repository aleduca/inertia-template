<template>
<div class="blog-popular">
      <h5>Categorias populares</h5>
      <div class="blog-popular-item">
          <ul class="list-unstyled">
              <li v-for="category in categories" :key="category.id">
                  <Link :href="category.slug"><h5>{{ category.name }}</h5></Link>
              </li>
          </ul>
      </div>
  </div>

  <div class="blog-newsletter">
      <div class="mb-30">
          <h4>Newsletter</h4>
      </div>
      <div class="my-20">
          <img src="@assets/images/tema/news.webp" alt="Echo">
      </div>
      <p>Fique ligado nas noticias</p>
      <div class="blog-subscribe">
          <form action="POST">
              <div class="blog-newsletter-input-box">
                  <input type="email" placeholder="Email Addresss.." required="">
                  <button type="submit"><i class="fa-regular fa-arrow-right"></i></button>
              </div>
          </form>
      </div>
  </div>
  <div class="blog-anuncios">
      <a href="#"><img src="@assets/images/cursos/item-10.jpg" alt="anuncios"></a>
  </div>
</template>

<script setup>
defineProps(['categories'])
</script>

<style lang="scss" scoped>

</style>