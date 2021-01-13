<template>
  <v-card color="blue-grey lighten-4">
    <v-card-title>
      <div class="headline">Adicionar projeto</div>
    </v-card-title>
    <v-container>
      <v-form ref="form" v-model="valid" sx12>
        <v-text-field
          id="project-title"
          v-model="data.title"
          :rules="validation.title"
          label="Título"
          required
        >
        </v-text-field>

        <div v-show="data.title">
          <v-text-field
            v-model="data.description"
            label="Descrição"
            textarea
          >
          </v-text-field>

          <v-date-picker
            v-model="data.due_date"
            no-title
            scrollable
          >
          </v-date-picker>
          <v-time-picker
            v-model="due_time_time"
          >
          </v-time-picker>
          <v-btn flat>Salvar</v-btn>
        </div>
      </v-form>
    </v-container>
  </v-card>
</template>

<script>
export default {
  data() {
    return {
      valid: false,
      data: {},
      due_time_time: null,
      validation: {
        title: [
          v => !!v || 'Título é obrigatório.'
        ],
      }
    }
  }
}
</script>
