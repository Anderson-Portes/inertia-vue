<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';
import BaseLayout from '../Layouts/BaseLayout.vue';

const user = computed(() => usePage().props.value.auth.user);
</script>

<template>
  <BaseLayout>
    <h1>Bem Vindo {{ user.name }}</h1>
  </BaseLayout>
</template>