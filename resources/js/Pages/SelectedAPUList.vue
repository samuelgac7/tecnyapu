<template>
  <div class="pt-2">
    <h6 class="mb-0">APUs seleccionados</h6>
    <div class="row my-3">
      <div class="col-md-5 text-start">
        <button id="bt_eliminar_itemizados" type="button" class="btn btn-sm btn-outline-danger shadow fs-1r" @click="deleteSelectedAPUs">
          Eliminar APU
        </button>
      </div>
      <div class="col-md-4 text-center">
        <a id="btn_excel_genera" class="btn btn-sm btn-outline-success shadow fs-1r" @click="generateExcelReport">
          <i class="bi bi-download me-1"></i> Excel
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a id="btn_pdf_genera" class="btn btn-sm btn-outline-secondary shadow fs-1r" @click="generatePDFReport">
          <i class="bi bi-download me-1"></i> PDF
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    selectedAPUs: {
      type: Array,
      required: true,
    },
  },
  methods: {
    deleteSelectedAPUs() {
      // Lógica para eliminar los APUs seleccionados
      const selectedAPUIds = this.selectedAPUs.map(apu => apu.id);
      this.$emit('delete-apus', selectedAPUIds);
    },
    generateExcelReport() {
      // Lógica para generar el informe en formato Excel de los APUs seleccionados
      const selectedAPUIds = this.selectedAPUs.map(apu => apu.id);
      this.$emit('generate-excel', selectedAPUIds);
    },
    generatePDFReport() {
      // Lógica para generar el informe en formato PDF de los APUs seleccionados
      const selectedAPUIds = this.selectedAPUs.map(apu => apu.id);
      this.$emit('generate-pdf', selectedAPUIds);
    },
  },
}
</script>