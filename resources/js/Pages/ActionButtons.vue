<template>
  <div class="row">
    <div class="col-md-7 col-12 mb-4 text-start">
      <button id="bt_ver_todo_apus" type="button" class="btn btn-sm btn-primary shadow mx-2" @click="viewAllAPUs">
        <i class="mb-1 bi bi-check-circle"></i> Ver todos los APUs
      </button>
      <button id="bt_ver_mis_apus" type="button" class="btn btn-sm btn-success shadow mx-2" @click="viewUserAPUs">
        <i class="mb-1 bi bi-check-circle"></i> Ver mis APUs
      </button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    viewAllAPUs() {
      // Emitir evento para ver todos los APUs
      this.$emit('view-all-apus');
    },
    viewUserAPUs() {
      // Emitir evento para ver los APUs del usuario actual
      this.$emit('view-user-apus');
    },
  },
}
</script>