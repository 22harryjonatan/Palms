import "./bootstrap";

import "../sass/app.scss";

import * as bootstrap from "./bootstrap";

import { createApp } from "vue";

import App from "../App.vue";
import router from "../router";
import store from "../store";

createApp(App).use(router).use(store).mount("#app");
