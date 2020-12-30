import React from 'react';
<template>
  <div class="intro">
    <main class="main columns">
      <section class="column main-column" style="padding-bottom: 320px">
        <div class="article" style="color: black; font-size: 20px">
          <h4>Избранное</h4>
        <div v-for="post in favorites.posts">
            <h5><router-link v-bind:to="{name: 'post', params: {url: post.url}}" class="cart-name">
              {{post.name}}
            </router-link></h5>
          <button class="btn btn-danger btn-sm del-cart" v-on:click="remove(post)">Удалить</button>
      </div>
        </div>
      </section>
    </main>
  </div>
</template>

<script>
import FavoritesData from '@/components/favorites'
export default {
  name: "List",
  data() {
    return {
      favorites: FavoritesData
    }
  },
  methods: {
    remove(item) {
      this.favorites.remove(item)
    }
  }
}
</script>

<style scoped>

</style>
