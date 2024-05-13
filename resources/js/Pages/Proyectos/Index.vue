<!-- resources/js/Pages/Proyectos/Index.vue -->
<template>
    <div>
      <h1>Listado de Proyectos</h1>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Propietario</th>
            <th>Dirección</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="proyecto in proyectos" :key="proyecto.id">
            <td>{{ proyecto.nombre }}</td>
            <td>{{ proyecto.propietario }}</td>
            <td>{{ proyecto.direccion }}</td>
            <td>
              <button @click="editProyecto(proyecto)">Editar</button>
              <button @click="deleteProyecto(proyecto)">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
      <button @click="createProyecto">Nuevo Proyecto</button>
    </div>
  </template>
  
  <script>
  export default {
    props: ['proyectos'],
    methods: {
      createProyecto() {
        this.$inertia.visit('/proyectos/create');
      },
      editProyecto(proyecto) {
        this.$inertia.visit(`/proyectos/${proyecto.id}/edit`);
      },
      deleteProyecto(proyecto) {
        if (confirm('¿Estás seguro de eliminar este proyecto?')) {
          this.$inertia.delete(`/proyectos/${proyecto.id}`);
        }
      },
    },
  };
  </script>