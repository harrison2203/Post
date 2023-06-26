<script setup>
// composant qui affiche un  post grâce à l'id
import axios from 'axios'
import { ref } from "vue";
import { createToaster } from "@meforma/vue-toaster";
import { routeLocationKey, useRoute } from 'vue-router';
import {useRouter} from 'vue-router';

const toaster = createToaster({});
const showpost = ref([])
let route = useRoute()


axios.get ('http://127.0.0.1:8000/api/posts/' + route.params.id)
	.then (function (response) {
	toaster.success ('Post chargé avec succès')
	showpost.value = response.data
	})

</script>


<template>

<div class="containerMajor">
	<!-- <div class="titleOnePost">Mon Post It</div> -->
</div>

<div class="container">
	<div class="postOneElement">
		<div class="elementId" v-for="element in showpost">
			<h2>{{ element.id}}</h2>
			<h2>{{ element.title }}</h2>
			<p>{{ element.content }}</p>
		</div>
	</div>
</div>

</template>

<style scoped>

.containerMajor{
height: 130px;
display: flex;
align-items: center;
justify-content: center;
}


.container{
gap: 30px;
margin-top: 30px;
display:flex;
justify-content:center;
}

.postOneElement{
width: 50%;
background: #cbecda;
padding: 3em;
font-size: 15px;
padding-left: 6rem;
padding-right:-rem;
display:flex;
flex-direction:column;
justify-content:center;
align-self:center;
}


</style>