<template>
  <v-layout row wrap>
    <v-flex xs12>
      <h2 class="mb-2">Nome do projeto</h2>

      <p>adfadfsd</p>
    </v-flex>

    <sections />

    <v-flex xs12>
      <v-btn to="/projects">Voltar</v-btn>
    </v-flex>
  </v-layout>
</template>

<script>

import sections from '../sections/List';

export default {
  components: {
    sections
  }
}
</script>
