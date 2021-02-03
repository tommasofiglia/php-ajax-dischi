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
    axios.get('https://flynn.boolean.careers/exercises/api/array/music')
    .then(response => {
      this.songs = response.data.response;
      console.log(this.songs);
    });

  }
});
