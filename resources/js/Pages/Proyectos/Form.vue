<!-- resources/js/Pages/Proyectos/Form.vue -->
<template>
    <div>
      <h1>{{ isEdit ? 'Editar Proyecto' : 'Nuevo Proyecto' }}</h1>
      <form @submit.prevent="submitForm">
        <div>
          <label>Nombre:</label>
          <input type="text" v-model="form.nombre" required>
        </div>
        <div>
          <label>Propietario:</label>
          <input type="text" v-model="form.propietario" required>
        </div>
        <div>
          <label>Dirección:</label>
          <input type="text" v-model="form.direccion" required>
        </div>
        <!-- Agrega más campos del formulario según sea necesario -->
        <button type="submit">{{ isEdit ? 'Actualizar' : 'Crear' }}</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    props: ['proyecto'],
    data() {
      return {
        form: {
          nombre: this.proyecto?.nombre || '',
          propietario: this.proyecto?.propietario || '',
          direccion: this.proyecto?.direccion || '',
          // Agrega más campos del formulario según sea necesario
        },
      };
    },
    computed: {
      isEdit() {
        return !!this.proyecto;
      },
    },
    methods: {
      submitForm() {
        if (this.isEdit) {
          this.$inertia.put(`/proyectos/${this.proyecto.id}`, this.form);
        } else {
          this.$inertia.post('/proyectos', this.form);
        }
      },
    },
  };
  </script>