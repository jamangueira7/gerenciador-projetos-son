<template>
  <v-layout row wrap>
    <v-flex xs12>
      <h2 class="display-1 mb-2">Agenda</h2>
    </v-flex>
    <v-flex xs6>
      <v-date-picker
        v-model="date"
        locale="pt-br"
        landscape
        full-width
        :events="events"
        event-color="green lighten-1"
        color="green lighten-1"
      ></v-date-picker>

      <v-btn dark @click="goToToday()">Ir para hoje</v-btn>
    </v-flex>
    <v-flex xs6>
      <h2 class="display-1 mb-2">Agenda</h2>
    </v-flex>
  </v-layout>
</template>

<script>
export default {
  data() {
    return {
      date: null
    }
  },
  computed: {
    events() {
      return [...Array(15)].map(() => {
        const day = Math.floor(Math.random() * 30);
        const date = new Date();
        date.setDate(day);
        return date.toISOString().substr(0,10);
      });
    }
  },
  methods: {
    goToToday() {
      this.date = null;

      setTimeout(() => {
        const date = new Date();
        this.date = date.toISOString().substr(0,10);
      }, 500);
    }
  },
  mounted() {
    this.$store.dispatch('projects/getAll');
  }
}
</script>
