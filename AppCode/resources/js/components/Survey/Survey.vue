<template>
  <v-app app>
    <v-container>
      <v-card>
        <v-card-title class="text-center">
          <h2 class="pt-2" v-if="userInfo.type == 'Tutor'">
            Cuestionario de Estilos de Enseñanza | Test de Grasha
          </h2>
          <h2 class="pt-2" v-else>
            Cuestionarios de Estilos de Aprendizaje | Test de Grasha
          </h2>
        </v-card-title>
        <v-card-text>
          <v-row>
            <v-col cols="12" sm="6" md="2">
              <v-select
                v-model="userInfo.type"
                :items="[
                  { text: 'Estudiante', value: 'Student' },
                  { text: 'Tutor', value: 'Tutor' },
                ]"
                label="Estudiante/Tutor"
                required
                disabled
                @input="$v.userInfo.type.$touch()"
                :error-messages="userTypeErrors"
                @blur="$v.userInfo.type.$touch()"
              ></v-select>
            </v-col>
            <v-col cols="12" sm="6" md="2">
              <v-text-field
                v-model.u="userInfo.name"
                label="Nombre y Apellido"
                required
                :disabled="useInfoDisabled"
                hint="Ejemplo: Carlos Pérez"
                @input="$v.userInfo.name.$touch()"
                :error-messages="userNameErrors"
                @blur="$v.userInfo.name.$touch()"
              ></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="2">
              <v-text-field
                v-model="userInfo.age"
                type="number"
                min="1"
                label="Edad"
                hint="Ejemplo: 25"
                required
                :disabled="useInfoDisabled"
                @input="$v.userInfo.age.$touch()"
                :error-messages="userAgeErrors"
                @blur="$v.userInfo.age.$touch()"
              ></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="2">
              <!-- sex -->
              <v-select
                v-model="userInfo.sex"
                :items="[
                  { text: 'Masculino', value: 'Masculino' },
                  { text: 'Femenino', value: 'Femenino' },
                ]"
                label="Sexo"
                required
                @input="$v.userInfo.sex.$touch()"
                :error-messages="userSexErrors"
                @blur="$v.userInfo.sex.$touch()"
              ></v-select>
            </v-col>

            <v-col cols="12" sm="6" md="4">
              <v-text-field
                v-model="userInfo.email"
                label="Email"
                required
                :disabled="useInfoDisabled"
                @input="$v.userInfo.email.$touch()"
                :error-messages="userEmailErrors"
                @blur="$v.userInfo.email.$touch()"
              ></v-text-field>
            </v-col>
          </v-row>

          <v-row class="justify-content-end">
            <!-- sumbit -->

            <v-col cols="12" sm="6" md="4" class="text-end">
              <v-btn
                color="primary"
                v-if="!useInfoDisabled"
                :loading="submitUserInfoLoading"
                @click="submitUserInfo"
              >
                Enviar y Empezar
              </v-btn>
            </v-col>
          </v-row>

          <v-row>
            <v-col cols="12" sm="12" md="12" v-if="userInfo.type == 'Tutor'">
              <h6>Cuestionarios de Estilos de Enseñanza - Tutores</h6>
              <p>
                Este test te permite identificar tu enfoque y metodología al enseñar,
                ofreciéndote detalles para potenciar tus habilidades y adaptarte a las
                necesidades de tus estudiantes.
              </p>
            </v-col>
            <v-col cols="12" sm="12" md="12" v-else>
              <h6>Cuestionarios de Estilos de Aprendizaje - Estudiantes</h6>
              <p>
                Este test te guía hacia la comprensión de cómo procesas y asimilas
                información, brindándote herramientas para maximizar tu aprendizaje y
                disfrutar del proceso.
              </p>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>

      <v-divider></v-divider>

      <template>
        <v-row justify="center">
          <v-dialog v-model="userExistsDialog" persistent max-width="290">
            <v-card>
              <v-card-text class="text-center"
                >¿Quieres continuar con el Cuestionario</v-card-text
              >
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="red darken-1" text @click="continueUser(false)"> No </v-btn>
                <v-btn color="green darken-1" text @click="continueUser(true)">
                  Sí
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-row>
      </template>

      <Question :user="user" v-if="user"></Question>
    </v-container>
  </v-app>
</template>

<script>
import { required, requiredIf, email } from "vuelidate/lib/validators";
import alert from "../../shared/alert";

import Question from "./Question.vue";

export default {
  props: {
    type: {
      type: String,
      required: true,
    },
  },

  validations: {
    userInfo: {
      type: {
        required,
      },
      name: {
        required,
      },
      email: {
        required,
        email,
      },

      age: {
        required,
      },
      sex: {
        required,
      },
    },
  },

  computed: {
    userTypeErrors() {
      const errors = [];
      if (!this.$v.userInfo.type.$dirty) return errors;
      !this.$v.userInfo.type.required && errors.push("Type is required.");
      return errors;
    },
    userNameErrors() {
      // this.userInfo.name = this.userInfo.name.toUpperCase();
      const errors = [];
      if (!this.$v.userInfo.name.$dirty) return errors;
      !this.$v.userInfo.name.required &&
        errors.push("Se requiere el Nombre y Apellido. Ejemplo: Carlos Pérez");
      return errors;
    },
    userEmailErrors() {
      const errors = [];
      if (!this.$v.userInfo.email.$dirty) return errors;
      !this.$v.userInfo.email.required && errors.push("Correo electronico es requerido.");
      !this.$v.userInfo.email.email &&
        errors.push("Debe ser válido el correo electrónico");
      return errors;
    },
    userAgeErrors() {
      const errors = [];
      if (!this.$v.userInfo.age.$dirty) return errors;
      !this.$v.userInfo.age.required && errors.push("Se requiere edad. Ejemplo: 25");
      return errors;
    },
    userSexErrors() {
      const errors = [];
      if (!this.$v.userInfo.sex.$dirty) return errors;
      !this.$v.userInfo.sex.required && errors.push("Se requiere sexo.");
      return errors;
    },
  },

  created() {
    this.showStatus = alert.showStatus;

    this.userInfo.type = this.type;
    console.log("type", this.type);
  },
  data() {
    return {
      power: 26,
      userInfo: {
        type: "",
        name: "",
        email: "",
        age: "",
        sex: "",
        existingUser: false,
      },
      useInfoDisabled: false,
      submitUserInfoLoading: false,
      baseURL: "/survey",
      user: null,
      userExistsDialog: false,
      existingUser: null,
    };
  },

  methods: {
    uppercase() {
      this.userInfo.name = this.userInfo.name.toUpperCase();
    },

    continueUser(continueUser) {
      this.userExistsDialog = false;
      this.useInfoDisabled = true;


      if (continueUser) {
        this.user = this.existingUser;
        this.user.type = this.userInfo.type.toLowerCase();
        this.user.existingUser = true;

        return;
      }

      axios
        .post(this.baseURL + "/remove-user-responses", {
          user_id: this.existingUser.id,
        })
        .then((response) => {
          console.log(response);

          this.user = response.data.data.user;
          this.user.type = this.userInfo.type.toLowerCase();
        })
        .catch((error) => {
          console.log(error);
          this.showStatus(error.response.data.message, "error");
        });
    },

    submitUserInfo() {
      this.$v.$touch();
      if (this.$v.$invalid) {
        return;
      }

      this.submitUserInfoLoading = true;

      axios
        .post(this.baseURL + "/submit-user-info", {
          name: this.userInfo.name.toLowerCase(),
          email: this.userInfo.email.toLowerCase(),
          type: this.userInfo.type.toLowerCase(),
          age: this.userInfo.age,
          sex: this.userInfo.sex.toLowerCase(),
        })
        .then((response) => {
          console.log(response);

          let userExists = response.data.data.userExists;

          this.submitUserInfoLoading = false;

          if (userExists) {
            this.userExistsDialog = true;
            this.existingUser = response.data.data.user;
            return;
          }

          this.user = response.data.data.user;
          this.user.type = this.userInfo.type.toLowerCase();

          this.useInfoDisabled = true;

          console.log("user", this.user);

          this.showStatus(response.data.message, "success");
        })
        .catch((error) => {
          console.log(error);
          this.submitUserInfoLoading = false;
          this.showStatus(error.response.data.message, "error");
        });
    },
  },

  components: {
    Question,
  },
};
</script>

<style lang="scss" scoped>
.text-uppercase {
  text-transform: uppercase;
}
</style>
