const { createApp } = Vue;

createApp({
  data() {
    return {
      tasks: [],
      api_url: "getTask.php",
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
          headers: { "Content-Type": "application/json" },
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
