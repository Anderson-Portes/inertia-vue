<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<template>
  <nav class="navbar navbar-expand-lg border-bottom shadow-sm">
    <div class="container">
      <Link class="navbar-brand" :href="route('home')">Inertia Vue</Link>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-gear me-2"></i>Perfil
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <Link :href="route('logout')" method="post" class="dropdown-item text-danger">
                  <i class="bi bi-escape me-2"></i>Sair
                </Link>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>