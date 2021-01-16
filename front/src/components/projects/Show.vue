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

    <show-task />
  </v-layout>
</template>

<script>

import sections from '../sections/List';
import showTask from '../tasks/Show';

export default {
  components: {
    sections,
    'show-task' : showTask
  }
}
</script>
