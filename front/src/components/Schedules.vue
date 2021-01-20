<template>
  <v-layout row wrap>
    <v-flex xs12>
      <h2 class="display-1 mb-2">Agenda</h2>
    </v-flex>
  </v-layout>
</template>

<script>
export default {
  data() {

  },
  mounted() {
    this.$store.dispatch('projects/getAll');
  }
}
</script>
