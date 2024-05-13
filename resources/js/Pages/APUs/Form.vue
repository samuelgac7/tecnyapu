<!-- resources/js/Pages/APUs/Form.vue -->
<template>
    <div>
      <h1>{{ isEdit ? 'Editar APU' : 'Nuevo APU' }}</h1>
      <form @submit.prevent="submitForm">
        <div>
          <label>Proyecto:</label>
          <select v-model="form.proyecto_id" required>
            <option v-for="proyecto in proyectos" :key="proyecto.id" :value="proyecto.id">
              {{ proyecto.nombre }}
            </option>
          </select>
        </div>
        <div>
          <label>Descripción:</label>
          <textarea v-model="form.descripcion" required></textarea>
        </div>
        <div>
          <label>Unidad:</label>
          <input type="text" v-model="form.unidad" required>
        </div>
        <div>
          <label>Precio Unitario:</label>
          <input type="number" v-model="form.precio_unitario" required>
        </div>
        <button type="submit">{{ isEdit ? 'Actualizar' : 'Crear' }}</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    props: ['apu', 'proyectos'],
    data() {
      return {
        form: {
          proyecto_id: this.apu?.proyecto_id || '',
          descripcion: this.apu?.descripcion || '',
          unidad: this.apu?.unidad || '',
          precio_unitario: this.apu?.precio_unitario || '',
        },
      };
    },
    computed: {
      isEdit() {
        return !!this.apu;
      },
    },
    methods: {
      submitForm() {
        if (this.isEdit) {
          this.$inertia.put(`/apus/${this.apu.id}`, this.form);
        } else {
          this.$inertia.post('/apus', this.form);
        }
      },
    },
  };
  </script>