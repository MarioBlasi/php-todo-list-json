const { createApp } = Vue;
createApp({
  data() {
    return {
      tasks: null,
      api_url: "tasks/index.php",
      new_task: "",
    };
  },
  methods: {
    add_task() {
      console.log("add new task to the list");

      const data = {
        new_task: this.new_task,
      };
      axios
        .post("storeTasks.php", data, {
          headers: { "Contant-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log(response);
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },
  },
  mounted() {
    axios
      .get(this.api_url)
      .then((response) => {
        console.log(response);
        this.tasks = response.data;
      })
      .catch((error) => {
        console.error(error.message);
      });
  },
}).mount("#app");
