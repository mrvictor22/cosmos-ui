<template>
    <v-container class="login" max-width="500px">
      <v-card>
        <v-card-title class="headline">Login</v-card-title>
        <v-form>
          <v-card-text>
            <v-text-field
              v-model="username"
              label="Username"
              outlined
              dense
              required
            />
            <v-text-field
              v-model="password"
              label="Password"
              type="password"
              outlined
              dense
              required
            />
            <GoogleLogin :callback="callback"/>
            <v-alert v-if="error" type="error" dense>{{ error }}</v-alert>
          </v-card-text>
          <v-card-actions>
            <v-btn color="primary" type="submit" block>Login</v-btn>
          </v-card-actions>
        </v-form>
      </v-card>
    </v-container>
  </template>
  
  <script>
  import axios from "axios";
  import { googleSdkLoaded } from "vue3-google-login";
  
  export default {
    data() {
      return {
        userDetails: null,
        username: "",
        password: "",
        error: null,
      };
    },
    methods: {
        callback(response){
            console.log(response);
            
        },
    }
  }
      
  </script>
  
  <style scoped>
  .login {
    margin: 2rem auto;
  }
  </style>
  