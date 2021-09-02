<template>
  <div>
      <v-card>
        <v-toolbar
          dark
          color="gray"
        >
          <v-btn
            icon
            dark
            @click="dialogAssunto = false"
          >
            <v-icon>close</v-icon>
          </v-btn>
          <v-toolbar-title class="font-weight-normal">
            Assunto
          </v-toolbar-title>
        </v-toolbar>
        <v-card-text>
          <v-form
            ref="form"
            v-model="valid"
            lazy-validation
            autocomplete="off"
          >
            <v-row
              row
              wrap
            >
              <v-col
                xs4
                md="6"
                cols="12"
              >
                <v-select
                  v-model="assunto.banca"
                  :items="bancas"
                  label="Banca"
                  item-text="descricao"
                  return-object
                  :rules="[rules.required]"
                />
              </v-col>
              <v-col
                xs4
                md="6"
                cols="12"
              >
                <v-select
                  v-model="assunto.orgao"
                  :items="orgaos"
                  label="Orgão"
                  item-text="descricao"
                  return-object
                  :rules="[rules.required]"
                />
              </v-col>
            </v-row>
          </v-form>
        </v-card-text>
        <v-card-actions>
          <v-spacer />
          <v-btn
            color="gray"
            class="mr-2"
            @click="cadastrarAssunto()"
          >
            <v-icon
              dark
              left
            >
              send
            </v-icon>
            Cadastrar
          </v-btn>
        </v-card-actions>
      </v-card>

    <v-card>
      <v-card-text>
        <v-row justify="center">
          <v-expansion-panels
            inset
            focusable
          >
            <v-expansion-panel
              v-for="(item,i) in assuntos"
              :key="i"
            >
              <v-expansion-panel-header
                class="font-weight-bold"
              >
                {{ item.banca.descricao }} - {{ item.orgao.descricao }} ({{item.orgao.sigla}})
              </v-expansion-panel-header>
              <v-expansion-panel-content>
                <template>
                  <v-treeview
                    :items="item.assuntos"
                    item-key="id"
                    item-text="descricao"
                    item-children="filhos"
                    open-on-click
                    activatable
                    rounded
                    selected-color="success"
                  >
                    <template v-slot:label="{item}">
                      <span class="font-weight-bold">{{ item.descricao }}</span>
                      <v-chip
                        class="ma-2"
                        label
                      >
                        {{ item.quantidade_questoes }} questões
                      </v-chip>
                    </template>
                  </v-treeview>
                </template>
              </v-expansion-panel-content>
            </v-expansion-panel>
          </v-expansion-panels>
        </v-row>
      </v-card-text>

    </v-card>


  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';


export default {
  name: 'Lista',
  components: {},
  data() {
    return {
      dialogAssunto: false,
      valid: false,
      assunto: {},
      rules: {
        required: value => !!value || 'Este campo é obrigatório',
      },
    };
  },
  computed: {
    ...mapGetters({
      assuntos: 'assunto/assuntos',
      bancas: 'assunto/bancas',
      orgaos: 'assunto/orgaos',
    }),
  },
  mounted() {
    this.buscarBancasAction();
    this.buscarOrgaosAction();
  },
  methods: {
    ...mapActions({
      mensagemSucessoAction: 'app/setMensagemSucesso',
      buscarBancasAction: 'assunto/buscarBancasAction',
      buscarOrgaosAction: 'assunto/buscarOrgaosAction',
      cadastrarAssuntoAction: 'assunto/cadastrarAssuntoAction',
    }),
    cadastrarAssunto() {
      if (!this.$refs.form.validate()) {
        return;
      }
      this.mensagemSucessoAction('Cadastrado com sucesso');
      this.cadastrarAssuntoAction(this.assunto);
      this.dialogAssunto = false;
      this.assunto = {};
      this.$refs.form.reset();
    },
  },
};
</script>
