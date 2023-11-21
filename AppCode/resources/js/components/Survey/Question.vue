<template>
  <v-app app>
    <v-card>
      <v-card-text>
        <v-row>
          <v-col cols="12" sm="12" md="12">
            <v-progress-linear
              disabled
              striped
              :value="progress"
              color="primary"
              height="25"
            >
              <template v-slot:default="{ value }">
                <strong>{{ Math.ceil(value) }}%</strong>
              </template>
            </v-progress-linear>
          </v-col>
        </v-row>

        <v-divider></v-divider>

        <v-row v-if="!userLearningStyle">
          <v-col cols="12" sm="12" md="12">
            <v-card
              v-for="(question, questionIndex) in questions"
              :key="question.id"
              class="mb-3"
              :set="(v = $v.questions.$each[questionIndex])"
            >
              <v-card-title>
                {{ question.question }}
              </v-card-title>
              <v-card-text>
                <v-radio-group v-model="question.selectedAnswer" row>
                  <v-radio
                    v-for="(answer, answerIndex) in possibleAnswers"
                    :key="answerIndex"
                    :label="answer.answer"
                    :value="answer.id"
                  ></v-radio>
                </v-radio-group>

                <div v-if="v.selectedAnswer.$dirty">
                  <p class="text-danger" v-if="!v.selectedAnswer.required">
                    Seleccione una respuesta.
                  </p>
                </div>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>

        <v-row class="justify-content-end" v-if="!userLearningStyle">
          <!-- sumbit -->

          <v-col cols="12" sm="6" md="4" class="text-end">
            <v-btn color="primary" :loading="loading" @click="submitAnswers"
              >Siguiente</v-btn
            >
          </v-col>
        </v-row>

        <v-row v-if="userLearningStyle">
          <v-col cols="12" sm="12" md="12">
            <v-card>
              <v-card-title>
                <div v-if="user.type == 'student'">
                  Tu Estilo de Aprendizaje: {{ userLearningStyle.style }}
                </div>

                <div v-if="user.type == 'tutor'">
                  Tu Estilo de Enseñanza: {{ userLearningStyle.style }}
                </div>
              </v-card-title>
              <v-card-text>
                <v-row>
                  <v-col cols="12" sm="12" md="8">
                    <!-- <p>
                      <strong>{{ userLearningStyle.info }}</strong>
                    </p> -->

                    <!-- description -->
                    <div>
                      <h4>Descripción:</h4>
                      <p>{{ userLearningStyle.description_es }}</p>
                    </div>

                    <!-- charateristics List-->

                    <div>
                      <h4>Características:</h4>
                      <ul>
                        <li v-for="characteristic in userLearningStyle.characteristics">
                          {{ characteristic.characteristic_es }}
                        </li>
                      </ul>
                    </div>

                    <!-- techniques -->
                    <div>
                      <h4>Técnicas de Estudio:</h4>
                      <ul>
                        <li v-for="technique in userLearningStyle.recommendedTechniques">
                          {{ technique.technique_es }}
                        </li>
                      </ul>
                    </div>
                  </v-col>
                  <v-col cols="12" sm="12" md="4">
                    <v-img :src="userLearningStyle.image"></v-img>
                  </v-col>
                </v-row>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card-text>
    </v-card>
  </v-app>
</template>

<script>
import alert from "../../shared/alert";
import { required } from "vuelidate/lib/validators";
export default {
  props: {
    user: {
      type: Object,
      required: true,
    },
  },

  validations: {
    questions: {
      $each: {
        selectedAnswer: {
          required,
        },
      },
    },
  },

  data() {
    return {
      loading: false,
      progress: 0,
      offset: 0,
      limit: 10,
      baseURL: "/survey",
      questions: [],
      possibleAnswers: [],
      userLearningStyle: null,
    };
  },

  methods: {
    getQuestions() {
      axios
        .get(this.baseURL + "/questions", {
          params: {
            offset: this.offset,
            limit: this.limit,
            user_id: this.user.id,
            type: this.user.type,
            existing_user: this.user.existingUser,
          },
        })
        .then((response) => {
          this.questions = response.data.data.questions;
          this.progress = response.data.data.progress;
          this.offset = response.data.data.offset;
            this.limit = response.data.data.limit;


          console.log("Questions", this.questions);
        })
        .catch((error) => {
          console.log(error);
        });
    },

    getPossibleAnswers() {
      axios
        .get(this.baseURL + "/possible-answers")
        .then((response) => {
          this.possibleAnswers = response.data.data.answers;

          console.log("PossibleAnswers", this.possibleAnswers);
        })
        .catch((error) => {
          console.log(error);
        });
    },

    submitAnswers() {
      // validate
      this.$v.$touch();

      if (this.$v.$invalid) {
        this.showStatus("Por favor responda todas las preguntas", "error");
        return;
      }

      this.loading = true;

      this.offset += this.limit;
      this.limit = 10;

      console.log("offset", this.offset);

      axios
        .post(this.baseURL + "/submit-answers", {
          user_id: this.user.id,
          type: this.user.type,
          questions: this.questions,
          offset: this.offset,
          limit: this.limit,
        })
        .then((response) => {
          console.log(response);
          this.questions = response.data.data.questions;
          this.progress = response.data.data.progress;

          this.loading = false;

          // scroll to top
          window.scrollTo(0, 0);

          this.userLearningStyle = response.data.data.userLearningStyle;

          console.log("userLearningStyle", this.userLearningStyle);

          //   reset validation
          this.$v.$reset();
        })
        .catch((error) => {
          console.log(error);
          this.loading = false;
          this.showStatus(error.response.data.message, "error");
        });
    },
  },

  created() {
    console.log(this.user);
    this.getQuestions();
    this.getPossibleAnswers();

    this.showStatus = alert.showStatus;
  },
};
</script>
