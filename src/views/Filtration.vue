import React from 'react';
<template>
  <div class="intro">
    <main class="main columns">
      <section class="column main-column" style="padding-bottom: 320px">
        <div class="article" style="color: black; font-size: 20px">
          <h4> Вот что нашлось по этому автору:</h4>
          <div v-for="post in posts">
                <h5><router-link v-bind:to="{name: 'post', params: {url: post.url, id: post.id, idAuthor: post.idAuthor}}" class="cart-name">
                  {{post.name}}
                </router-link></h5>
          </div>
        </div>
      </section>
    </main>
  </div>
</template>

<script>
export default {
  name: "Filtration",
  data() {
    return {
      posts: []
    }
  },
  created() {
    const idAuthor = this.$route.params.idAuthor

    this.$http.get('post/author', {params: {idAuthor: idAuthor}})
        .then((response) => {
          console.log(response.data)
          this.posts = response.data
        })

  },
  methods: {
    addToFavorites() {
      FavoritesData.add(this.post)
    }
  }
}
</script>

<style scoped>

</style>
