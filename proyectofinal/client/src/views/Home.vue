<template>
  <div class="home text-center">
    <div class="jumbotron">
      <h1 class="display-3">Bienvenidos al cms creado por Dany Pianchiche</h1>
      <p class="lead">
       🔐 🎉
      </p>
      <hr class="my-4">
      
      <p class="lead">
        <router-link
          class="btn btn-primary btn-lg"
          :to="{ name: 'signup' }"
          role="button">Registrarse</router-link>
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'home',
};
</script>
