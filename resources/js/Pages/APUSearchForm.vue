<template>
  <form id="frm_buscador" class="pb-2" @submit.prevent="searchAPUs">
    <div class="row">
      <div class="col-md-2 my-auto pe-1 text-end">Buscador <span class="text-danger">*</span></div>
      <div class="col-md-10 my-auto">
        <input class="form-control form-control-sm w-100" required type="text" v-model="searchText" placeholder="Ingrese el texto para filtrar">
      </div>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      searchText: '',
    };
  },
  methods: {
    searchAPUs() {
      // Emitir evento de búsqueda con el texto ingresado
      this.$emit('search', this.searchText);
    },
  },
}
</script>