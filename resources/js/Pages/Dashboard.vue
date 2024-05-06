<template>
  <div>
    <Header :username="$page.props.auth.user.name" :userRole="$page.props.auth.user.role" />
    
    <MainSection :project="project" :selectedAPUs="selectedAPUs" :availableAPUs="availableAPUs"
                 @delete-apus="deleteAPUs"
                 @generate-excel="generateExcelReport"
                 @generate-pdf="generatePDFReport"
                 @search="searchAPUs"
                 @view-apu-details="viewAPUDetails"
                 @view-all-apus="viewAllAPUs"
                 @view-user-apus="viewUserAPUs"
                 @add-apu-to-project="addAPUToProject" />
    
    <ProjectModal v-if="showProjectModal" :project="project" @save-project="saveProject" @close="showProjectModal = false" />
    
    <TechnicalSpecsModal v-if="showTechnicalSpecsModal" :apu="selectedAPU" @save-technical-specs="saveTechnicalSpecs" @close="showTechnicalSpecsModal = false" />
    
    <Footer />
  </div>
</template>

<script>
import axios from 'axios';
import Header from './Header.vue';
import MainSection from './MainSection.vue';
import ProjectModal from './ProjectModal.vue';
import TechnicalSpecsModal from './TechnicalSpecsModal.vue';
import Footer from './Footer.vue';

export default {
  components: {
    Header,
    MainSection,
    ProjectModal,
    TechnicalSpecsModal,
    Footer,
  },
  data() {
    return {
      project: {},
      selectedAPUs: [],
      availableAPUs: [],
      showProjectModal: false,
      showTechnicalSpecsModal: false,
      selectedAPU: null,
    };
  },
  mounted() {
    this.fetchProject();
    this.fetchSelectedAPUs();
    this.fetchAvailableAPUs();
  },
  methods: {
    fetchProject() {
      axios.get('/api/project')
        .then(response => {
          this.project = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    fetchSelectedAPUs() {
      axios.get('/api/selected-apus')
        .then(response => {
          this.selectedAPUs = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    fetchAvailableAPUs() {
      axios.get('/api/available-apus')
        .then(response => {
          this.availableAPUs = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    deleteAPUs(apuIds) {
      axios.delete('/api/apus', { data: { apuIds } })
        .then(() => {
          this.selectedAPUs = this.selectedAPUs.filter(apu => !apuIds.includes(apu.id));
        })
        .catch(error => {
          console.error(error);
        });
    },
    generateExcelReport(apuIds) {
      axios.post('/api/excel-report', { apuIds })
        .then(response => {
          // Descargar o abrir el informe en Excel
          window.open(response.data.url, '_blank');
        })
        .catch(error => {
          console.error(error);
        });
    },
    generatePDFReport(apuIds) {
      axios.post('/api/pdf-report', { apuIds })
        .then(response => {
          // Descargar o abrir el informe en PDF
          window.open(response.data.url, '_blank');
        })
        .catch(error => {
          console.error(error);
        });
    },
    searchAPUs(searchText) {
      axios.get('/api/search-apus', { params: { searchText } })
        .then(response => {
          this.availableAPUs = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    viewAPUDetails(apuId) {
      axios.get(`/api/apus/${apuId}`)
        .then(response => {
          this.selectedAPU = response.data;
          this.showTechnicalSpecsModal = true;
        })
        .catch(error => {
          console.error(error);
        });
    },
    viewAllAPUs() {
      axios.get('/api/all-apus')
        .then(response => {
          this.availableAPUs = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    viewUserAPUs() {
      axios.get('/api/user-apus')
        .then(response => {
          this.availableAPUs = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    addAPUToProject(apu) {
      axios.post('/api/add-apu-to-project', { apuId: apu.id })
        .then(response => {
          this.selectedAPUs.push(response.data);
          this.availableAPUs = this.availableAPUs.filter(a => a.id !== apu.id);
        })
        .catch(error => {
          console.error(error);
        });
    },
    saveProject(project) {
      axios.put('/api/project', project)
        .then(() => {
          this.showProjectModal = false;
          this.fetchProject();
        })
        .catch(error => {
          console.error(error);
        });
    },
    saveTechnicalSpecs(technicalSpecs) {
      axios.put(`/api/apus/${this.selectedAPU.id}/technical-specs`, { technicalSpecs })
        .then(() => {
          this.showTechnicalSpecsModal = false;
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>