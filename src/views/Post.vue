import React from 'react';
<template>
  <div class="intro">
    <main class="main columns">
      <section class="column main-column" style="padding-bottom: 180px">
        <div class="article" style="color: black; font-size: 20px">
          <p >
            {{post.descriptionShort}}
          </p>
        </div>

        <a class="article first-article">
          <figure class="article-image is-4by3">
            <img v-bind:src="post.img" alt="">
          </figure>

          <div class="article-body">

            <p class="article-content">
              {{post.description}}
            </p>
            <footer class="article-info">
              <span><button class="btn btn-outline-success" v-on:click="addToFavorites">Добавить в избранное </button></span>
              <span></span>
            </footer>
          </div>
        </a>
      </section>
    </main>
  </div>
</template>

<script>
import FavoritesData from '@/components/favorites'
  export default {
    name: "Post",
    data() {
      return {
        post: {}
      }
    },
    created() {
      const url = this.$route.params.url

      this.$http.get('/post/url', {params: {url: url}})
          .then((response) => {
            console.log(response.data)
            this.post = response.data
          })
    },
    methods: {
      addToFavorites() {
        FavoritesData.add(this.post)
      }
    }
  }
</script>
