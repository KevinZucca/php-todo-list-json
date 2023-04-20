
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
      this.list.push(this.newTodo);
      this.newTodo = "";
    }
  },

  mounted() {
    this.getAPI(); 
  },

  
}).mount('#app')