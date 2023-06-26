<script setup>
// composant qui affiche un  post grâce à l'id
import axios from 'axios'
import { ref } from "vue";
import { createToaster } from "@meforma/vue-toaster";
import { useRoute } from 'vue-router';

const toaster = createToaster({});
const showpost = ref([])
let route = useRoute()
const postTitle = ref();
const postContent = ref();


axios.get ('http://127.0.0.1:8000/api/posts/'+route.params.id)
	.then (function (response) {
	showpost.value = response.data
	})

	function modifyPost(){
        const data = 
    axios.put('http://127.0.0.1:8000/api/posts/'+route.params.id, 
    {
        title: postTitle.value,
        content: postContent.value,
    })
    .then( () =>{
        toaster.success ('Post modifié');
    })
    .catch ((error) => {
		toaster.error("Le post n'a pas été modifié")
		console.log (error)
    });
}
  
  //    function reloadPage() { {
  //     window.location.reload();
  //   }
  // }

</script>

<template>

		<div class="elementId" v-for="notes in showpost">
      <!-- {{ notes.id  }}
      {{notes.title}}
      {{ notes.content }} -->
		</div>

    <div class="containerMajor2">
    </div>

<div class="modifyPostContainer">


      <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputValue" v-model="postTitle" placeholder="Titre de ton Post!">
            <label for="floatingInputValue">Titre de ton Post!</label>
        </div><br>

        <div class="spaceFloat">
        </div>

      <div class="form-floating">
            <textarea class="form-control"   v-model="postContent" placeholder="Contenu de ton Post!" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Contenu de ton Post!</label>
        </div>
        <br>
    </div>

      <RouterLink to='/' class="postsLinks">
	      <button v-on:click="modifyPost()" class="formInputs">Modifier</button>
<div class="test">
</div>
      </RouterLink>

</template>


<style scoped>
.containerMajor2{
height: 130px;
display: flex;
align-items: center;
justify-content: center;
  }

.modifyPostContainer{
width: 40%;
background: #cbecda;
padding: 3em;
font-size: 15px;
padding-left: 3rem;
display:flex;
flex-direction:column;
}

.spaceFloat{
margin-bottom: 10px;
margin-top:10px;
}

.postsLinks {
text-decoration: none !important;
color: black;
margin-top:70px;
}

button{
position : relative ;
z-index : 0 ;
width : 240px ;
height : 56px ;
text-decoration : none ;
font-size : 14px ; 
font-weight : bold ;
color : var(--line_color) ;
letter-spacing : 2px ;
transition : all .3s ease ;
}

</style>