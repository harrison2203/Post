<script setup>
import ModifyOnePostComp from '../components/ModifyOnePostComp.vue';
import HeaderComp from '../components/HeaderComp.vue';
</script>

<template>
	<header>
  	<HeaderComp/>
	</header>
	<div class="Modification">
		<ModifyOnePostComp />
	</div>
</template>

<style scoped>
.Modification{
display:flex;
flex-direction:column;
align-items:center;
margin-top:40px;
}
</style>
