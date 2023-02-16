import { createApp } from "vue";
import App from "./App.vue";
import router from "./components/router";

// Bootstrap
import "./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css";
import "./assets/bootstrap-5.0.2-dist/js/bootstrap.min.js";

// Font-Awesome
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { faUserSecret } from "@fortawesome/free-solid-svg-icons";
library.add(faUserSecret);

// import './assets/main.css'

const app = createApp(App);
app.component("font-awesome-icon", FontAwesomeIcon);
app.use(router);
app.mount("#app");