import React from 'react';
<template>
 <div>
    <form class="card auth-card">
      <form @submit="handleSubmit">
      <div class="card-content">
        <span class="card-title">Регистрация</span>
        <a href="/"><router-link to="news">Продолжить без регистрации</router-link></a>
        <div class="input-field">
          <input type="text" id="inputUsername" v-model="username"/>
          <label for="inputUsername">Логин</label>
          <small class="helper-text invalid">login</small>
        </div>
        <div class="input-field">
          <input id="password" type="password" class="validate" v-model="password"/>
          <label for="password">Пароль</label>
          <small class="helper-text invalid">Password</small>
        </div>
        <div class="input-field">
          <input id="repeatPassword" type="password" class="validate" v-model="repeatPassword"/>
          <label for="repeatPassword">Повторите пароль</label>
          <small class="helper-text invalid">Password</small>
        </div>
      </div>
      <div class="card-action">
        <div>
          <button class="btn waves-effect waves-light auth-submit" type="submit">
            Зарегистрироваться
            <i class="material-icons right">send</i>
          </button>
        </div>

        <p class="center">
          Уже есть аккаунт?
          <a><router-link to="/Login">Войти!</router-link></a>
        </p>
      </div>
    </form>
    </form>
  </div>
</template>

<script>
import router from "../router";
export default {
  name: "Register",
  data() {
    return {
      username: '',
      password: '',
      repeatPassword: '',
    }
  },
  methods: {
    handleSubmit: function (e) {
      e.preventDefault()
      if (this.password !== this.repeatPassword) {
        alert('Пароли не совпадают')
        return
      }
      const submissionData = {
        username: this.username,
        password: this.password,
      }
      this.$http.post('/user/register', submissionData)
          .then((response) => {
            localStorage.setItem('userData', JSON.stringify(response.data))
            router.push({ name: 'favorites' })
          })
          .catch((error) => alert(error.response.data.statusText))
    }
  }
}
</script>
