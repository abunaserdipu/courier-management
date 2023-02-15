import { createApp } from "vue";
import App from "./App.vue";

// Bootstrap
import "./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css";
import "./assets/bootstrap-5.0.2-dist/js/bootstrap.min.js";

// Font-Awesome
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { faUserSecret } from "@fortawesome/free-solid-svg-icons";
library.add(faUserSecret);

// import './assets/main.css'

createApp(App).component("font-awesome-icon", FontAwesomeIcon).mount("#app");
