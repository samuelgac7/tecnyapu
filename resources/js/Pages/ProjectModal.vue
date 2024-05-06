<template>
  <div class="modal text-end fade" id="creaProyecto">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="frm_proyecto" @submit.prevent="saveProject">
          <!-- ... -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row my-1">
                <div class="col-md-3 my-auto">Nombre del Proyecto <span class="text-danger">*</span></div>
                <div class="col-md-9 ms-auto my-1">
                  <input class="form-control form-control-sm" required type="text" v-model="project.nombre" placeholder="Ingresar el Nombre del proyecto">
                </div>
              </div>
              <!-- Otros campos del formulario -->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-outline-danger px-4 me-3" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-sm btn-outline-success px-4">Grabar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    project: {
      type: Object,
      required: true,
    },
  },
  methods: {
    saveProject() {
      // Emitir evento para guardar el proyecto con los datos actualizados
      this.$emit('save-project', this.project);
    },
  },
}
</script>