import React from 'react';
<template>
<form class="card auth-card">
<form @submit="signIn">
<div class="card-content">
  <span class="card-title">Вход</span>
  <a href="/"><router-link to="news">Продолжить без входа</router-link></a>
  <div class="input-field">
    <input id="name" type="text" class="validate" v-model="name">
    <label for="name">name</label>
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
</form>
</form>
</template>

<script>
import router from "../router";
import User from '@/components/user/user'
export default {
  name: "Login",
  data() {
    return {
      name: '',
      password: '',
      errors: {},
      user: User
    }
  },
  methods: {
    signIn(e) {
      if (this.validate()) {
        // const result = {
        //   name: this.name,
        //   password: this.password
        // }
        this.$http.get('/user/login', {params: {username: this.name, password: this.password}})
            .then((response) => { console.log(response.data)
              if (response.data.username != undefined){
                User.login(response.data)
                router.push({ name: "favorites"})
              }
              else{
                alert("Неправильно введен логин или пароль")
              }
            })
      }
      e.preventDefault();
    },
    validate() {
      this.errors = {}
      if (this.name.trim().length === 0) {
        alert('Заполните Имя')
      }
      if (this.password.trim().length === 0) {
        alert('Заполните Пароль')
      }
      return Object.keys(this.errors).length === 0
    }
  }
}
</script>
