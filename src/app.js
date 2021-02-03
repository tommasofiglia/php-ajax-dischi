let app = new Vue({
  el: "#app",
  data:{
    songs:[]
  },
  methods:{

  },
  mounted(){
    axios.get('https://flynn.boolean.careers/exercises/api/array/music')
    .then(response => {
      this.songs = response.data.response;
      console.log(this.songs);
    });
  }
});
