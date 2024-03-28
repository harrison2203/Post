<script setup>
import {ref} from'vue';
import axios from 'axios';
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster();
const postTitle = ref();
const postContent = ref();

 function createPost(){
	const data = 
	axios.post('http://127.0.0.1:8000/api/posts/',
	{
			title: postTitle.value,
			content: postContent.value,
	})
	.then( () =>{
			toaster.success ('Post créé avec succès');
	})
	.catch ((error) => {
	toaster.error("Le post n'a pas été créé")
	console.log (error)
	});
}
</script>

<template>
	<div class="createPostContainer">
		<div class="form-floating">
			<input type="text" class="form-control" id="floatingInputValue" v-model="postTitle" placeholder="Titre de ton Post!">
			<label for="floatingInputValue">Titre de ton Post!</label>
		</div><br>
		<div class="spaceFloat"></div>
		<div class="form-floating">
			<textarea class="form-control" v-model="postContent" placeholder="Contenu de ton Post!" id="floatingTextarea"></textarea>
			<label for="floatingTextarea">Contenu de ton Post!</label>
		</div><br>
		<div class="buttonCreate">
			<button v-on:click="createPost()" type ="submit" class="formInputs">Crée ton Post!</button>
		</div>
	</div>
</template>

<style scoped>
.createPostContainer {
	width: 70%;
	background: #cbecda;
	padding: 3em;
	font-size: 15px;
	padding-left: 4rem;
	padding-right: 3rem;
	display:flex;
	flex-direction:column;
	margin-left:80px;
}

.spaceFloat {
	margin-bottom: 10px;
	margin-top:10px;
}

</style>