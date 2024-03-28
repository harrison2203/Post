<script setup>
import ShowOnePostComp from '../components/ShowOnePostComp.vue'
import DeletePostComp from '../components/DeletePostComp.vue';
import HeaderComp from '../components/HeaderComp.vue';
</script>

<template>
	<header>
		<HeaderComp/>
	</header>
	<body class="bodyOnePost">
		<div class="rowOne">
			<div class="bigContainer">
				<div>
					<div class="ShowOnePost"><ShowOnePostComp/></div>
				</div>
				<div>>
					<div class="DeletePostComp"><DeletePostComp/></div>
				</div>
			</div>
		</div>
	</body>
</template>

<style scoped>
.bodyOnePost{
	display:flex;
	flex-direction: column;
}
</style>