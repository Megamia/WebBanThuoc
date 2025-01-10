import "./assets/main.css";
import "./style.css";
import { createApp } from "vue";
import { createPinia } from "pinia";
import {Flex} from "ant-design-vue";

import App from "./App.vue";
import router from "./router/router";

const app = createApp(App);

app.use(createPinia());
app.use(Flex)
app.use(router);

app.mount("#app");
