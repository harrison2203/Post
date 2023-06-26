<script setup>


const props = defineProps({
  essaie: String,
  required: false,

})

</script>

<template>
  <div class="test">
	<h1>{{ essaie }}</h1>
  </div>
</template>

<style scoped>
</style>