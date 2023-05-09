const { createApp } = Vue;

createApp({
  data() {
    return {
      tasks: [],
      newTask: "",
      apiUrl: "api.php",
    };
  },
  methods: {
    addTask() {
      if (this.newTask.trim() !== "") {
        const data = { title: this.newTask };
        axios.post(this.apiUrl, data).then(() => {
          this.tasks.push(data);
          this.newTask = "";
        });
      }
    },
    removeTask(index) {
      axios.delete(`${this.apiUrl}?id=${this.tasks[index].id}`).then(() => {
        this.tasks.splice(index, 1);
      });
    },
    fetchTasks() {
      axios.get(this.apiUrl).then((response) => {
        this.tasks = response.data;
      });
    },
  },
  mounted() {
    this.fetchTasks();
  },
}).mount("#app");
