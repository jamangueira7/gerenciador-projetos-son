<template>
  <v-form v-model="valid" ref="form">
    <v-text-field
      v-model="data.title"
      label="Nova Tarefa"
      :rules="validation.title"
      required
      @keyup.native.enter="submit()"
    ></v-text-field>
  </v-form>
</template>


<script>

export default {
  props: [
    'section'
  ],
  data() {
    return {
      data: {},
      valid: false,
      validation: {
        title: [
          v => !!v || 'Título é obrigatório.'
        ]
      }
    }
  },
  methods: {
    submit() {
      this.data.user_id = 1;
      this.data.assigned_to = 1;
      this.data.section_id = this.section;
      this.$store.dispatch('tasks/create', this.data).then((res) => {
        this.$refs.form.reset();
      });
    }
  }
}
</script>
