let app = new Vue({
  el: "#app",
  data:{
    songs:[],
    //Imposto "All come genere di base per farli apparire tutti una volta aperti"
    selectedGenre:"All",
    genres: [
      { text: 'All', value: 'All' },
      { text: 'Rock', value: 'Rock' },
      { text: 'Pop', value: 'Pop' },
      { text: 'Metal', value: 'Metal' },
      { text: 'Jazz', value: 'Jazz' }
    ]
  },
  methods:{
    //riferimento per questa soluzione sulle option: https://stackoverflow.com/questions/50982408/vue-js-get-selected-option-on-change
    changeGenre(event){
      this.selectedGenre = event.target.value;
      console.log(this.selectedGenre);
    }
  },
  mounted(){
    axios.get('../database/db_api.php')
    .then(response => {
      this.songs = response.data;
      console.log(this.songs);
    });

  }
});
