
const { createApp } = Vue;

createApp({
  data() {
    return {
      list: [],

      newTodo: "",
    }
  },

  methods: {
    getAPI() {
      axios.get("./server.php").then((res) => {
          this.list = res.data;
      })
    },

    addTodo() {

      let data = {
          newTodo: "",
        };
        
        data.newTodo = this.newTodo;


      axios.post("./server.php", data, {
        headers: {"Content-Type": "multipart/form-data"}
      }).then((res) => {
        this.getAPI();
        this.newTodo = "";
      });
    }
  },

  mounted() {
    this.getAPI(); 
  },

  
}).mount('#app')