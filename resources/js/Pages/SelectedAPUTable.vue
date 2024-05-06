<template>
  <div class="table-responsive card py-2 px-1 mb-3" style="height: 570px;">
    <table id="tb_lista_itemizados" class="table table-sm fs-08">
      <!-- ... -->
      <tbody>
        <tr v-for="(apu, index) in selectedAPUs" :key="apu.id" :data-id="apu.id">
          <td style="width: 5%; vertical-align: middle;" class="text-center">{{ index + 1 }}</td>
          <td style="width: 10%; vertical-align: middle; text-align: center;"></td>
          <td style="width: 70%; vertical-align: middle;">
            <a class="bt_ver_itemizado link4" href="#" @click="viewAPUDetails(apu)">{{ apu.descripcion }} ({{ apu.unidad }})</a>
          </td>
          <td style="width: 12%; vertical-align: middle;" class="text-center mx-0 px-0">
            <a :href="getExcelReportURL(apu)" target="_blank" class="btn btn-sm btn-outline-success" style="padding: 2px 7px 2px 7px;">
              <i class="bi bi-file-earmark-excel"></i>
            </a>
            <a :href="getPDFReportURL(apu)" target="_blank" class="btn btn-sm btn-outline-primary" style="padding: 2px 7px 2px 7px;">
              <i class="bi bi-file-earmark-pdf"></i>
            </a>
          </td>
          <td style="width: 3%; text-align: right; vertical-align: middle;">
            <input class="form-check-input my-2" type="checkbox" v-model="apu.selected">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    selectedAPUs: {
      type: Array,
      required: true,
    },
  },
  methods: {
    viewAPUDetails(apu) {
      // Lógica para ver los detalles de un APU
      this.$emit('view-apu-details', apu.id);
    },
    getExcelReportURL(apu) {
      // Lógica para obtener la URL del informe en formato Excel de un APU
      return `./informes/excel.php?id=${apu.proyecto_id}&id_itemizado=${apu.id}`;
    },
    getPDFReportURL(apu) {
      // Lógica para obtener la URL del informe en formato PDF de un APU
      return `./informes/pdf.php?id=${apu.proyecto_id}&id_itemizado=${apu.id}`;
    },
  },
}
</script>