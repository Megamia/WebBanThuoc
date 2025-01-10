<template>
  <div>
    <p @click="Start">Start</p>
  </div>
</template>

<script setup>
import { useRouter } from "vue-router";
const router = useRouter();
const Start = () => {
  router.push("/dang-nhap");
};
</script>

<style scoped></style>
