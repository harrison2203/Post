<script setup>
import axios from 'axios'
import { ref } from "vue";
import { createToaster } from "@meforma/vue-toaster";
import { routeLocationKey, useRoute } from 'vue-router';


const toaster = createToaster({});
let route = useRoute()


function supprimos() {
  axios.delete('http://127.0.0.1:8000/api/posts/' + route.params.id, {
    data: { id: route.params.id }
  })
    .then(function (response) {
      toaster.success('Post effacé avec succès')
      console.log(response)
    })
    .catch(function (error) {
      toaster.error("Le post n'a pas été effacé")
      console.log("l'erreur est " + error)
    })
  }

</script>


<template>
  <div class="containerButton">
    <div class="buttonNumberOne">
      <RouterLink to="/" class="postsLinks">
        <button @click="supprimos">Supprimer</button>
      </RouterLink>
    </div>

    <!-- <RouterLink :to="{path: '/modify/'+route.params.id}"  // ici je récupère la route dymanique comme id -->
    <RouterLink :to="{ name:'Modify',params: {id: route.params.id}}" class="postsLinks"> 
      <div class="ButtonNumberTwo">
        <button>Modifier</button>
      </div>
    </RouterLink>
  </div>

</template>


<style scoped>
.containerButton {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  margin-top: 70px;
}

button {
  position: relative;
  z-index: 0;
  width: 240px;
  height: 56px;
  text-decoration: none;
  font-size: 14px;
  font-weight: bold;
  color: var(--line_color);
  letter-spacing: 2px;
  transition: all .3s ease;
}

.postsLinks {
  text-decoration: none;
  color: black;
}


</style>