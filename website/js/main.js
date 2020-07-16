var app = new Vue({
  el: '#app',
  data: {},
  methods: {
    fetchAllCostumers(arrNames, arrPhones) {
      console.log(arrNames, arrPhones);
    }
  },
  data() {
    return {
      costumers: [],
      phones: [],
      inputValue: '',
    }
  },
  mounted() {
    axios
      .get('http://192.168.1.35/api/usuarios')
      .then(response => (this.costumers = response.data)),
      axios
      .get('http://192.168.1.35/api/telefones')
      .then(response => (this.phones = response.data))
  }
})