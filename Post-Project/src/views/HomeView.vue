<script setup>
import HeaderComp from '../components/HeaderComp.vue';
import ShowAllPostComp from '../components/ShowAllPostComp.vue'
import CreatePostComp from '../components/CreatePostComp.vue';
import { RouterView } from 'vue-router';
</script>

<template>
<header>
  <HeaderComp/>
</header>
	<body class="principal">
		<div class="row">
			<div class="col">
				<div class="leftSide"><ShowAllPostComp/></div>
			</div>
			<div class="col">
				<div class="rightSide"><CreatePostComp  /></div>
			</div>
		</div>
	<RouterView/>
	</body>
</template>

<style scoped>	
.principal {
  display:flex;
  justify-content: space-around;
}

.row {
  display:flex;
  align-items: baseline;
}

.rightSide {
  margin-right:0px;
}
.leftSide {
margin-right:0px;
}
</style>
