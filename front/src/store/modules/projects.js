import axios from 'axios';

const qs = require('qs');

const state = {
  all: []
}

const mutations = {
  updateAll(state, data) {
    state.all = data;
  }
}

const actions = {
  getAll(context) {
    return axios.get('/api/projects').then((res) => {
      context.commit('updateAll', res.data);
    });
  },
  create(context, data) {
    data = qs.stringify(data);
    return axios.post('/api/projects', data);
  }
}

export default {
  state,
  actions,
  mutations,
  namespaced: true,
}
