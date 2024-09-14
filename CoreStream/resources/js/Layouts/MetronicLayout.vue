<script setup>
import { onMounted } from "vue";
import Footer from "./Footer.vue";
import Header from "./Header.vue";
import Sidebar from "./Sidebar.vue";

onMounted(() => {
  const loadScript = (src) => {
    const script = document.createElement("script");
    script.src = src;
    script.async = true;
    document.body.appendChild(script);
  };

  loadScript("/assets/js/core.bundle.js");
  loadScript("/assets/vendors/apexcharts/apexcharts.min.js");
  loadScript("/assets/js/widgets/general.js");
  loadScript("/assets/js/layouts/demo1.js");

  const toggleButton = document.getElementById("sidebar_toggle");
  if (toggleButton) {
    toggleButton.addEventListener("click", () => {
      document.body.classList.toggle("sidebar-collapse");
    });
  }
});
</script>

<template>
  <div class="flex h-full">
    <div class="flex grow" style="min-height: 100vh;">
      <Sidebar></Sidebar>
      <div class="wrapper flex grow flex-col">
        <Header></Header>
        <main class="grow content pt-5" id="content" role="content">
          <div class="container-fixed" id="content_container"></div>
          <slot></slot>
        </main>
        <Footer></Footer>
    </div>
    </div>
  </div>
</template>

<style>
</style>
