<template>
  <v-layout id="sections-container" row>
    <v-flex xs3 v-for="n in 3">
      <v-card color="blue-grey lighten-5">
        <v-card-title primary-title class="blue-grey white--text">
          <div class="headline">Sessão {{n}}</div>
        </v-card-title>
        <v-card-text>
          adfadfsdf
        </v-card-text>
        <v-card-text>
          // lista tarefas
        </v-card-text>
        <v-card-text>
          // add tarefa
        </v-card-text>
      </v-card>
    </v-flex>
    <v-flex xs3>
      <create />
    </v-flex>
  </v-layout>
</template>


<script>

import create from './Create';

export default {
  components: {
    create
  }
}
</script>
