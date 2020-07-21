var app = new Vue({
  el: '#app',
  computed: {
    filtredNames: function(){
      return this.users.filter((users) => {
        return users.name.toUpperCase().normalize("NFD").replace(/[\u0300-\u036f]/g, '').match(this.search);
      });
    },
    showUsers: function(){
      let aux = [];

      this.users.indexOf(this.filtredNames()) > -1 ? console.log(this.filtredNames()) : false
    }
  },
  methods: {
    padronizeSearch(word){
      this.search = word.toUpperCase().normalize("NFD").trim().replace(/[\u0300-\u036f]/g, '');
    }
  },
  data() {
    return {
      users: [],
      phones:[],
      searchInput: '',
      search:null,
      img: 'https://i.pravatar.cc/150'
    }
  },
  created() {
    axios
      .get('http://192.168.1.35/api/usuarios')
      .then(response => (this.users = response.data))
    axios
      .get('http://192.168.1.35/api/usuarios/telefones')
      .then(response => (this.phones = response.data))
  }
})