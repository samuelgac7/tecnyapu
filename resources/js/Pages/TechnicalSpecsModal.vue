<template>
  <div class="modal text-end fade" id="mdl-et">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- ... -->
        <div class="modal-body">
          <textarea id="tx_et" class="form-control" rows="14" v-model="technicalSpecs"></textarea>
        </div>
        <div class="modal-footer">
          <button id="bt_grabar_eett" type="button" class="btn btn-sm btn-outline-success px-4 me-3" @click="saveTechnicalSpecs">Grabar</button>
          <button type="button" class="btn btn-sm btn-outline-danger px-4 me-3" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    apu: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      technicalSpecs: '',
    };
  },
  mounted() {
    // Obtener las especificaciones técnicas del APU al cargar el modal
    this.technicalSpecs = this.apu.especificaciones_tecnicas;
  },
  methods: {
    saveTechnicalSpecs() {
      // Emitir evento para guardar las especificaciones técnicas actualizadas
      this.$emit('save-technical-specs', this.technicalSpecs);
    },
  },
}
</script>