import React from 'react';
<template>
  <div class="intro">
  <main class="main columns">
    <section class="column main-column" style="padding-bottom: 470px">
      <div class="article" style="color: black; font-size: 20px">
    <h2 v-if="user" style="font-size: 25px">Вы зашли как {{user.accessToken}}</h2>
    <h2 v-if="!user" style="font-size: 25px">Необходимо авторизоваться для получения доступа к избранному.</h2>
    <hr class="my-4">
    <p class="lead" v-if="!user">Войдите в аккаунт или зарегестрируйтесь для полного доступа к сайту.</p>
    <p class="lead btn-lead">
      <button v-if="user" class="btn waves-effect waves-light " style="padding-left: 50px" v-on:click="signOut">Выйти</button>
      <button v-if="user" class="btn waves-effect waves-light " style="padding-left: 50px" v-on:click="routeToFavorites">Избранное</button>
      <button v-if="!user" class="btn waves-effect waves-light " style="padding-left: 50px" v-on:click="routeToSignIn">Войти</button>
      <button v-if="!user" class="btn waves-effect waves-light " style="padding-left: 50px" v-on:click="routeToSignUp">Зарегестрироваться</button>
    </p>
  </div>
  </section>
  </main>
  </div>
</template>

<script>
import router from "../router";
import User from '@/components/user/user';
export default {
  name: "Favorites",
  data() {
    return {
      user: User
    }
  },
  created() {
    if (localStorage.getItem('userData') === null) {
      return
    }
    const userData = JSON.parse(localStorage.getItem('userData'));
    this.user = { ...userData }
  },
  methods: {
    routeToSignIn() {
      router.push({ name: 'login' })
    },
    routeToSignUp() {
      router.push({ name: 'register' })
    },
    signOut() {
      localStorage.removeItem('userData')
      this.user = null
      alert("вы вышли")
    },
    routeToFavorites() {
      router.push({ name: 'list' })
    },

  }
}
</script>
