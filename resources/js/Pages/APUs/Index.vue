<!-- resources/js/Pages/APUs/Index.vue -->
<template>
    <div>
      <h1>Listado de APUs</h1>
      <table>
        <thead>
          <tr>
            <th>Descripción</th>
            <th>Unidad</th>
            <th>Precio Unitario</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="apu in apus" :key="apu.id">
            <td>{{ apu.descripcion }}</td>
            <td>{{ apu.unidad }}</td>
            <td>{{ apu.precio_unitario }}</td>
            <td>
              <button @click="editAPU(apu)">Editar</button>
              <button @click="deleteAPU(apu)">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
      <button @click="createAPU">Nuevo APU</button>
    </div>
  </template>
  
  <script>
  export default {
    props: ['apus'],
    methods: {
      createAPU() {
        this.$inertia.visit('/apus/create');
      },
      editAPU(apu) {
        this.$inertia.visit(`/apus/${apu.id}/edit`);
      },
      deleteAPU(apu) {
        if (confirm('¿Estás seguro de eliminar este APU?')) {
          this.$inertia.delete(`/apus/${apu.id}`);
        }
      },
    },
  };
  </script>