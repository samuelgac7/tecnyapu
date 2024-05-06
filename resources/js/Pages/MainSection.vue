<template>
    <section>
      <div class="container-fluid mb-4 bg-container">
        <!-- Título del proyecto y biblioteca de APUs -->
        <div class="row ps-2 mx-0">
          <!-- ... -->
        </div>
        
        <div class="row mt-2 ps-2 pe-0 mx-0">
          <!-- Columna izquierda -->
          <div class="col-12 col-md-6 shadow">
            <!-- Información del proyecto -->
            <project-info :project="project" />
            
            <!-- Botones de edición y eliminación del proyecto -->
            <div class="row my-2">
              <!-- ... -->
            </div>
            
            <hr>
            
            <!-- Lista de APUs seleccionados -->
            <selected-apu-list :apus="selectedApus" />
            
            <!-- Formulario de búsqueda de APUs -->
            <apu-search-form />
            
            <!-- Tabla de APUs seleccionados -->
            <selected-apu-table :apus="selectedApus" />
          </div>
          
          <!-- Columna derecha -->
          <div class="col-12 col-md-6 pe-0">
            <!-- Botones para ver todos los APUs y ver los APUs del usuario -->
            <action-buttons />
            
            <!-- Botón para crear un nuevo APU -->
            <div class="col-md-5 col-12 mb-4 text-end">
              <a href="./nuevo_apu.php" class="btn btn-sm btn-secondary shadow">
                <i class="mb-1 bi bi-plus-lg"></i> Crear nuevo APU
              </a>
            </div>
            
            <!-- Tabla de APUs disponibles -->
            <available-apu-table :apus="availableApus" />
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import ProjectInfo from './ProjectInfo.vue';
  import SelectedAPUList from './SelectedAPUList.vue';
  import APUSearchForm from './APUSearchForm.vue';
  import SelectedAPUTable from './SelectedAPUTable.vue';
  import ActionButtons from './ActionButtons.vue';
  import AvailableAPUTable from './AvailableAPUTable.vue';
  
  export default {
    components: {
      ProjectInfo,
      SelectedAPUList,
      APUSearchForm,
      SelectedAPUTable,
      ActionButtons,
      AvailableAPUTable,
    },
    props: ['project', 'selectedApus', 'availableApus'],
    // Lógica del componente
  }
  </script>
  
  <style scoped>
  /* Estilos CSS específicos de la sección principal */
  </style>