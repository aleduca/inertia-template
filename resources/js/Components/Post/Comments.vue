<template>
  <div class="blog-comentarios">
      <h5>Comentarios ({{ comments.length }})</h5>
      <template v-if="!comments.length">
        <ul class="m-0 p-0">
            <li class="blog-comentarios-lista">No comments yet</li>
        </ul>
      </template>
      <template v-else>
      <ul class="m-0 p-0">
          <li class="blog-comentarios-lista" v-for="comment in comments" :key="comment.id">
              <div class="blog-conteudo-imagem">
                  <img :src="comment.user.avatar" class="rounded-circle" alt="autor">
              </div>
              <div class="blog-comentarios-content">
                  <h5 class="title">{{ comment.user.name }}</h5>
                  <a href="#" class="pe-none">
                    {{ formatDate(comment.created_at) }}
                  </a>
                  <p class="desc">{{ comment.content }}</p>
              </div>
              <div class="reply"><i class="fa-regular fa-share"></i> Responder</div>
          </li>
      </ul>
    </template>
  </div>
  <div class="blog-formulario">
      <h5>Deixe um comentário</h5>
      <form action="#">
          <div class="row">
              <div class="col-lg-6">
                  <input type="text" placeholder="Nome completo" required="">
              </div>
              <div class="col-lg-6">
                  <input type="email" placeholder="Endereço de email" required="">
              </div>
              <div class="col-lg-12">
                  <textarea name="text" placeholder="Escreva seu comentário aqui"></textarea>
              </div>
              <div class="col-12">
                  <button type="submit" class="submit-btn">Envie agora</button>
              </div>
          </div>
      </form>
  </div>
</template>

<script setup>
import {formatDate} from '../../helpers.js';
defineProps(['comments'])
</script>

<style lang="scss" scoped>

</style>