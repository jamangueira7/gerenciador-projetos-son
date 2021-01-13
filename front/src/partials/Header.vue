<template>
    <v-navigation-drawer app v-model="drawer" clipped>
      <v-list>
        <v-list-tile to="/">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            Home
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile to="/projects">
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            Projects
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
</template>

<script>
  export default {
    data() {
      return {
        drawer: true,
      }
    },
  }
</script>
