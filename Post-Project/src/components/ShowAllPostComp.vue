<script setup>
import axios from 'axios'
import { ref } from 'vue'
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster()
let posts = ref()

axios.get('http://127.0.0.1:8000/api/posts')
	.then ((response) => {
    console.log (response)
	toaster.success(' affiché avec succès');
	console.log (response);
	posts.value = response.data;
	console.log(posts);
	})
	.catch ((error) =>{
		toaster.error("Cela n'a pas pu être affiché");
		console.log (error);
	})
</script>

<template>
  <div class="container">
		<div v-for="element in posts" class="major">
			<RouterLink :to="{name:'onePost', params: {id: element.id}}" class="postsLinks">
				<div class="elementTitleContent">
					<h2>{{ element.title}}</h2>
					<p>{{ element.content }}</p>
					<!-- <a :href="'/posts/'+posts._id">cliquez ici</a> -->
				</div>
			</RouterLink>
		</div>
  </div>
</template>

<style scoped>
.container {
  display:flex;
  flex-direction: column;
	gap: 30px;
  margin-left: 130px;
  margin-top:20%;
  margin-right:70px;
}

.elementTitleContent {
width: 70%;
background: #cbecda;
padding: 3em;
font-size: 15px;
padding-left: 3rem;
padding-right: 3rem;
display: flex;
flex-direction: column;
}
.postsLinks {
  text-decoration: none;
  color: black;
}
</style>