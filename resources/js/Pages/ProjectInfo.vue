<template>
  <div class="bg-white pb-2 ps-3">
    <h6 class="ps-0 mt-2 pt-3">Proyecto</h6>
    <ul id="list_ul" class="fs-95" :data-id="project.id">
      <li id="li_nombre_proyecto" class="fw-700">{{ project.nombre }}</li>
      <li id="li_mandante">{{ project.mandante }}</li>
      <li id="li_direccion">{{ project.direccion }}, {{ project.comuna }}</li>
      <li id="li_porc_leyessociales">% de Leyes Sociales: {{ project.leyes_sociales_porc }}</li>
      <li id="li_fecha">Fecha: {{ project.fecha_entrega }}</li>
    </ul>
    <p></p>
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
}
</script>