<script setup>
import { ref } from 'vue';
import testComp from '../components/testComp.vue';


const Createemail = ref('');
const Createpassword = ref('');

function handleRegistration() {
  const data = {
    email: Createemail.value,
    password: Createpassword.value,
  };
  console.log(data);
}
</script>

<template>
  <div class="test">
    <h1>inscription</h1>
    <br>
    
    <input class="input" id="emailInput" placeholder="Enter email" v-model="Createemail">
    <br>
    <input class="input" id="passwordInput" placeholder="Enter password" v-model="Createpassword">
    <button type="button" @click="handleRegistration">Click here</button>

	<testComp :essaie="Createemail"/>
  </div>
</template>

<style scoped>
</style>