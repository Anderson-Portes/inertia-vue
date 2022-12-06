<script setup>
defineProps({
  message: String
});
</script>

<template>
  <div v-show="message">
    <span class="text-danger">{{ message }}</span>
  </div>
</template>
