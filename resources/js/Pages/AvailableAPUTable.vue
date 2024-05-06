<template>
  <div class="card py-4 px-1">
    <table id="tb_apus" class="table table-hover table-responsive table-sm fs-tablas pe-1">
      <!-- ... -->
      <tbody>
        <tr v-for="apu in availableAPUs" :key="apu.id" :data-id="apu.id">
          <td class="text-center va-c bt_copiar">
            <button class="btn btn-sm btn-outline-secondary" @click="addAPUToProject(apu)">
              <i class="bi bi-plus"></i>
            </button>
          </td>
          <td class="text-left pointer va-c">{{ apu.nombre }}</td>
          <td class="text-center pointer va-c">{{ apu.unidad_medida }}</td>
          <td class="text-end pointer va-c">{{ apu.precio }}</td>
          <td class="text-end pointer px-0 va-c">
            <a :href="apu.opciones.url" class="btn btn-sm btn-outline-primary">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    availableAPUs: {
      type: Array,
      required: true,
    },
  },
  methods: {
    addAPUToProject(apu) {
      // Emitir evento para agregar un APU al proyecto
      this.$emit('add-apu-to-project', apu);
    },
  },
}
</script>