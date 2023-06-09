const { createApp } = Vue

  createApp({
    data() {
      return {
        arrDisk: [],
      }
    },
    methods: {
      requestDisk(){
        axios.get('http://localhost/php-dischi-json/myApi.php')
        .then(response => this.arrDisk = response.data)
      }
    },
    created() {
       this.requestDisk(); 
    },
  }).mount('#app')