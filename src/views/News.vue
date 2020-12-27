import React from 'react';
<template>
  <div class="intro">
    <main class="main columns">
      <section class="column main-column">
        <router-link v-bind:to="{name: 'post', params: {url: items[2].url}}">
        <a class="article first-article">
          <figure class="article-image is-4by3">
            <img v-bind:src="items[2].img" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              {{items[2].name}}
            </h2>
            <p class="article-content">
              {{items[2].descriptionShort}}
            </p>
            <footer class="article-info">
<!--              <span>By Joe Smith</span>-->
<!--              <span>42 comments</span>-->
            </footer>
          </div>
        </a>
        </router-link>
        <div class="columns">
          <div class="column nested-column">
            <router-link v-bind:to="{name: 'post', params: {url: items[1].url}}">
            <a class="article">
              <figure class="article-image is-16by9">
                <img v-bind:src="items[1].img" alt="">
              </figure>
              <div class="article-body">
                <h2 class="article-title">
                  {{items[1].name}}
                </h2>
                <p class="article-content">
                  {{items[1].descriptionShort}}
                </p>
                <footer class="article-info">
<!--                  <span>By Joe Smith</span>-->
<!--                  <span>42 comments</span>-->
                </footer>
              </div>
            </a>
           </router-link>
          </div>
          <div class="column">
            <router-link v-bind:to="{name: 'post', params: {url: items[3].url}}">
            <a class="article">
              <figure class="article-image is-16by9">
                <img v-bind:src="items[3].img" alt="">
              </figure>
              <div class="article-body">
                <h2 class="article-title">
                  {{items[3].name}}
                </h2>
                <p class="article-content">
                  {{items[3].descriptionShort}}
                </p>
                <footer class="article-info">
<!--                  <span>By Joe Smith</span>-->
<!--                  <span>42 comments</span>-->
                </footer>
              </div>
            </a>
            </router-link>
            <router-link v-bind:to="{name: 'post', params: {url: items[0].url}}">
            <a class="article">
              <div class="article-body">
                <h2 class="article-title">
                  {{items[0].name}}
                </h2>
                <p class="article-content">
                  {{items[0].descriptionShort}}
                </p>
                <footer class="article-info">
                  <span>By Joe Smith</span>
                  <span>22 comments</span>
                </footer>
              </div>
            </a>
            </router-link>
            <router-link v-bind:to="{name: 'post', params: {url: items[5].url}}">
            <a class="article">
              <div class="article-body">
                <h2 class="article-title">
                  {{items[5].name}}
                </h2>
                <p class="article-content">
                  {{items[5].descriptionShort}}
                </p>
                <footer class="article-info">
<!--                  <span>By Joe Smith</span>-->
<!--                  <span>42 comments</span>-->
                </footer>
              </div>
            </a>
            </router-link>
          </div>
        </div>
      </section>
<!--      <section class="column">-->
<!--        <a class="article" href="#">-->
<!--          <figure class="article-image is-3by2">-->
<!--            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/image-04-lo.jpg" alt="">-->
<!--          </figure>-->
<!--          <div class="article-body">-->
<!--            <h2 class="article-title">-->
<!--              Hello World-->
<!--            </h2>-->
<!--            <p class="article-content">-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--            </p>-->
<!--            <footer class="article-info">-->
<!--              <span>By Joe Smith</span>-->
<!--              <span>42 comments</span>-->
<!--            </footer>-->
<!--          </div>-->
<!--        </a>-->
<!--        <a class="article" href="#">-->
<!--          <div class="article-body">-->
<!--            <h2 class="article-title">-->
<!--              Hello World-->
<!--            </h2>-->
<!--            <p class="article-content">-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--            </p>-->
<!--            <footer class="article-info">-->
<!--              <span>By Joe Smith</span>-->
<!--              <span>42 comments</span>-->
<!--            </footer>-->
<!--          </div>-->
<!--        </a>-->
<!--        <a class="article" href="#">-->
<!--          <div class="article-body">-->
<!--            <h2 class="article-title">-->
<!--              Hello World-->
<!--            </h2>-->
<!--            <p class="article-content">-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--            </p>-->
<!--            <footer class="article-info">-->
<!--              <span>By Joe Smith</span>-->
<!--              <span>42 comments</span>-->
<!--            </footer>-->
<!--          </div>-->
<!--        </a>-->
<!--        <a class="article" href="#">-->
<!--          <div class="article-body">-->
<!--            <h2 class="article-title">-->
<!--              Hello World-->
<!--            </h2>-->
<!--            <p class="article-content">-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit.-->
<!--            </p>-->
<!--            <footer class="article-info">-->
<!--              <span>By Joe Smith</span>-->
<!--              <span>42 comments</span>-->
<!--            </footer>-->
<!--          </div>-->
<!--        </a>-->
<!--      </section>-->
    </main>
  </div>
</template>

<script>
export default {
  name: "News",
  data() {
    return {
      data: [],
      author: [],
      items: []
    }
  },
  created() {
    this.$http.get('/post/all')
        .then((response) => this.items = response.data)
  }
}
</script>
