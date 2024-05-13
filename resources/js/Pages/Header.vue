<template>
  <header>
    <div class="px-1 pb-2 pt-1 border-bottom">
      <div class="container-fluid">
        <div class="row bg-user py-1 shadow">
          <div class="col-12 col-md-2 pe-2 my-auto">
            <a href=""><img :src="logo" class="img-fluid" style="max-height: 60px;"></a>
          </div>
          <div class="col-12 col-md-8 col-lg-8 text-center my-auto text-white">
            <h6 class="text-usuario my-0">
              <i class="fs-13 v-0 bi bi-person-bounding-box me-1 px-1 link6 text-center" data-bs-toggle="modal" data-bs-target="#perfil"></i>
              {{ username }}
            </h6>
            <p class="ps-2 my-0 py-1 fs-095">{{ userRole }}</p>
          </div>
          <div class="col-12 col-md-2 col-lg-2 text-center ps-0 my-auto">
            <nav class="navbar navbar-expand-lg navbar-dark py-0">
              <div class="container-fluid ps-0">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav fs-1r">
                    <li class="nav-item ps-0 pe-1">
                      <a id="bt_soporte" class="nav-link link6" href="#"><i class="bi bi-info-circle fs-13"></i><br>Soporte</a>
                    </li>
                    <li class="nav-item pe-1">
                      <a class="nav-link link6" href="cuenta.php"><i class="bi bi-journal-medical fs-13"></i><br>Cuenta</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link link6" href="/"><i class="bi bi-arrow-bar-right px-3 fs-13"></i><br>Salir</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="perfil" data-bs-perfil="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="perfilLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="frm_usuario_logueado" action="">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="perfilLabel">Perfil de Usuario</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          <table style="width: 100%;">
            <tr>
              <td style="width: 30%;">Nombre</td>
              <td style="width: 70%;">{{ username }}</td>
            </tr>
            <tr>
              <td>Cargo</td>
              <td>{{ userRole }}</td>
            </tr>
            <tr>
              <td>Usuario</td>
              <td>{{ userEmail }}</td>
            </tr>
            <tr>
              <td>Clave</td>
              <td>
                <input type="text" :value="userPassword" disabled name="clave" class="form-control form-control-sm w-50 d-inline-block">
                <a id="bt_cambiar" class="pointer btn btn-sm btn-secondary link6"><i class="bi bi-pencil-square"></i> Cambiar Clave</a>
              </td>
            </tr>
            <tr>
              <td>Reingrese su Clave</td>
              <td><input type="text" :value="userPassword" disabled name="reclave" class="form-control form-control-sm w-50 d-inline-block"></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-primary me-auto" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-sm btn-outline-success ms-auto">Grabar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mdl-mensaje_soporte" data-bs-perfil="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="perfilLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="frm_mensaje_soporte" action="">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="perfilLabel">Soporte</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          <table style="width: 100%;">
            <tr>
              <td style="width: 100%;">
                <p class="mb-0">Asunto</p>
                <input type="text" name="asunto" class="form-control">
              </td>
            </tr>
            <tr>
              <td>
                <p class="mb-0">Mensaje</p>
                <textarea name="mensaje" id="" class="form-control" rows="5"> </textarea>
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-outline-primary me-auto" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-sm btn-outline-success ms-auto">Enviar Mensaje</button>
        </div>
      </div>
    </form>
  </div>
</div>
</header>
</template>
<script>
import logo from '../../imagenes/logo.png';

export default {
  data() {
    return {
      logo: logo,
    };
  },
  props: {
    username: String,
    userRole: String,
    userEmail: String,
    userPassword: String,
  },
  methods: {
    enviarMensajeSoporte() {
      // Lógica para enviar el mensaje de soporte
    },
    cambiarClave() {
      // Lógica para cambiar la clave del usuario
    },
    grabarPerfil() {
      // Lógica para grabar los cambios en el perfil del usuario
    },
  },
};
</script>
<style scoped>
/* Estilos CSS específicos del encabezado */
</style>