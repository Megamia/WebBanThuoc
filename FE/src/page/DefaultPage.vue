<template>
  <a-flex vertical>
    <div>
      <NavBar />
    </div>
    <div>
      <HomePage />
    </div>
    
  </a-flex>
</template>

<script setup>
import NavBar from "@/components/NavBar.vue";
import HomePage from "./HomePage.vue";

</script>

<style scoped></style>
