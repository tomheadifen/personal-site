<template>
  <div class="grid grid-">
    <video
      class="opacity-50 w-full h-auto"
      role="application"
      preload="metadata"
      autoplay="autoplay"
      muted="muted"
      loop
      :src="usePage().props.value.profilePicture"
    ></video>
  </div>
</template>

<script setup>
import { usePage } from "@inertiajs/inertia-vue3";
</script>
