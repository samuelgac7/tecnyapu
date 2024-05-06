<template>
    <header>
      <!-- Código HTML del encabezado -->
      <div class="px-1 pb-2 pt-1 border-bottom">
        <div class="container-fluid">
          <div class="row bg-user py-1 shadow">
            <div class="col-12 col-md-2 pe-2 my-auto">
              <a href=""><img src="/imagenes/logo.png" class="img-fluid" style="max-height: 60px;"></a>
            </div>
            <div class="col-12 col-md-8 col-lg-8 text-center my-auto text-white">
              <h6 class="text-usuario my-0">
                <i class="fs-13 v-0 bi bi-person-bounding-box me-1 px-1 link6 text-center" data-bs-toggle="modal" data-bs-target="#perfil"></i> 
                {{ username }}
              </h6>
              <p class="ps-2 my-0 py-1 fs-095">{{ userRole }}</p>
            </div>
            <div class="col-12 col-md-2 col-lg-2 text-center ps-0 my-auto">
              <!-- Menú de navegación -->
              <nav class="navbar navbar-expand-lg navbar-dark py-0">
                <!-- ... -->
              </nav>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modales -->
      <div class="modal fade" id="perfil">
        <!-- Contenido del modal de perfil de usuario -->
      </div>
      
      <div class="modal fade" id="mdl-mensaje_soporte">
        <!-- Contenido del modal de mensaje de soporte -->
      </div>
    </header>
  </template>
  
  <script>
  export default {
    props: ['username', 'userRole'],
    // Lógica del componente
  }
  </script>
  
  <style scoped>
  /* Estilos CSS específicos del encabezado */
  </style>