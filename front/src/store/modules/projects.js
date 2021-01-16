import axios from 'axios';

const qs = require('qs');

const state = {
  all: []
}

const actions = {
  create(context, data) {
    data = qs.stringify(data);
    return axios.post('/api/projects', data);
  }
}

export default {
  state,
  actions,
  namespaced: true,
}
