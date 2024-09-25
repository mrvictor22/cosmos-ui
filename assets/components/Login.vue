<template>
    <div class="login">
      <h2>Login</h2>
      <form @submit.prevent="submitLogin">
        <div>
          <label for="username">Username</label>
          <input v-model="username" type="text" id="username" />
        </div>
        <div>
          <label for="password">Password</label>
          <input v-model="password" type="password" id="password" />
        </div>
        <button type="submit">Login</button>
        <p v-if="error">{{ error }}</p>
      </form>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    data() {
      return {
        username: "",
        password: "",
        error: null,
      };
    },
    methods: {
      submitLogin() {
        axios
          .post("/login", {
            username: this.username,
            password: this.password,
          })
          .then((response) => {
            // Redirigir o manejar login exitoso
            window.location.href = "/dashboard"; // Ejemplo
          })
          .catch((error) => {
            this.error = "Login failed. Please check your credentials.";
          });
      },
    },
  };
  </script>
  