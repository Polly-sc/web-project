import React from 'react';
<template>
<form class="card auth-card">
<form @submit="handleSubmit">
<!--  <section class="column main-column" style="padding-bottom: 320px">-->
<!--    <div class="article" style="color: black; font-size: 20px">-->
<!--      <h2 v-if="user" style="font-size: 25px">Вы зашли как {{ user.name }}</h2>-->
<!--      <div/>-->
<!--  <section/>-->
<!--<h2 v-if="!user" style="font-size: 25px">-->
<div class="card-content">
  <span class="card-title">Вход</span>
  <a href="/"><router-link to="news">Продолжить без входа</router-link></a>
  <div class="input-field">
    <input id="username" type="text" class="validate" v-model="username">
    <label for="username">Username</label>
    <small class="helper-text invalid">Username</small>
  </div>
  <div class="input-field">
    <input id="password" type="password" class="validate" v-model="password">
    <label for="password">Пароль</label>
    <small class="helper-text invalid">Password</small>
  </div>
</div>
<div class="card-action">
  <div>
    <button class="btn waves-effect waves-light auth-submit" type="submit" >Войти<i class="material-icons right">send</i>
    </button>
  </div>
  <p class="center">Нет аккаунта?<a href="/"><router-link to="register">Зарегистрироваться</router-link></a>
  </p>
</div>
<!--</h2>>-->
</form>
</form>
</template>

<script>
import router from '../router';
export default {
  name: "Login",
  data() {
    return {
      username: '',
      password: ''
    }
  },

  methods: {
    handleSubmit: function (e) {
      e.preventDefault()

      const submissionData = {
        username: this.username,
        password: this.password,
      }

      this.$http.post('/user/login', submissionData)
          .then((response) => {
            localStorage.setItem('userData', JSON.stringify(response.data))
            if (response.data.name != undefined){
              console.log(response.data.name)
              alert("Вы вошли в профиль", response.data.name)
              router.push({ name: 'favorites' })
            }
            else{
              alert("Неправильно введен логин или пароль")
            }
          })
          .catch((error) => alert(error.response.data.statusText))
    }
  }
}
</script>
