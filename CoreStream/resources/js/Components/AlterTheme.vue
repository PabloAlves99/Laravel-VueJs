<template>
  <div>
    <button
      class="btn btn-icon btn-light dark:hidden"
      data-theme-toggle="true"
      data-tooltip="#theme_mode_dark"
    >
      <i class="ki-outline ki-sun"> </i>
    </button>
    <button
      class="btn btn-icon btn-light hidden dark:flex"
      data-theme-toggle="true"
      data-tooltip="#theme_mode_light"
    >
      <i class="ki-outline ki-moon"> </i>
    </button>
    <div class="tooltip" id="theme_mode_light">Switch to Light mode</div>
    <div class="tooltip" id="theme_mode_dark">Switch to Dark mode</div>
  </div>
</template>
