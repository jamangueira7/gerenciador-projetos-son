<template>
  <v-app>
    <v-content>
      <v-container grid-list-xs>
        <v-layout row wrap>
          <v-flex xs4 offset-xs4>
            <v-card>
              <v-card-title>
                <div class="headline">Login</div>
              </v-card-title>
              <v-card-text>

                <v-form v-model="valid" ref="from">
                  <v-text-field
                    v-model="data.email"
                    label="Email"
                    :rules="validation.email"
                    required
                  ></v-text-field>

                  <v-text-field
                    v-model="data.password"
                    label="Senha"
                    :rules="validation.password"
                    type="password"
                    required
                  ></v-text-field>

                  <v-btn
                    :disabled="!valid"
                    @click="submit()"
                  >Entrar</v-btn>
                </v-form>

              </v-card-text>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
export default {
  data() {
    return {
      valid: false,
      data: {},
      validation: {
        email: [
          v => !!v || 'Email é obrigatório'
        ],
        password: [
          v => !!v || 'Senha é obrigatório'
        ]
      }
    }
  },
  methods: {
    submit() {
      this.$store.dispatch('auth/login', this.data).catch(() => {
        this.$refs.form.reset();
      });
    }
  }
}
</script>
