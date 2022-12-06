<script setup>
import { useForm, Link } from '@inertiajs/inertia-vue3';
import Card from '../../Components/Card.vue';
import FormError from '../../Components/FormError.vue';
import AuthLayout from '../../Layouts/AuthLayout.vue';

const submit = () => {
  form.post(route('login.store'));
}

const form = useForm({
  name: null,
  email: null,
  password: null,
  password_confirmation: null
});
</script>

<template>
  <AuthLayout>
    <div class="col-11 col-lg-7 p-0">
      <Card>
        <template #header>
          Login
        </template>
        <form @submit.prevent="submit">
          <div class="form-floating mb-2">
            <input type="email" class="form-control" v-model="form.email" placeholder="Email">
            <label for="email">Email</label>
            <FormError :message="form.errors.email" />
          </div>
          <div class="form-floating mb-2">
            <input type="password" class="form-control" id="password" v-model="form.password" placeholder="Password">
            <label for="password">Password</label>
            <FormError :message="form.errors.password" />
          </div>
          <button class="btn btn-dark mb-2">Login</button>
          <p>
            Não possui conta?
            <Link :href="route('register')" class="text-decoration-none">Cadastre-se</Link>
          </p>
        </form>
      </Card>
    </div>
  </AuthLayout>
</template>