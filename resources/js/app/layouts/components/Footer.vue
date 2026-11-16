<template>
  <div class="h-100 d-flex align-center justify-md-space-between justify-center">
    <span class="d-flex align-center">
      &copy;
      {{ new Date().getFullYear() }}
      Made With
      <VIcon
        class="mx-1"
        color="error"
        icon="tabler-heart"
        size="1.25rem"
      />
      By
      <span class="ms-1">
        Restaurant Menu
      </span>
    </span>
  </div>
</template>
