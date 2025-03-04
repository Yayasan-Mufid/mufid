import "@protonemedia/laravel-splade/dist/style.css";
import 'flowbite';
import "../css/app.css";
import "./bootstrap";

import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import { createApp } from "vue/dist/vue.esm-bundler.js";

import BuktiTransferUpload from "./components/BuktiTransferUpload.vue";
import CarouselSlider from "./components/CarouselSlider.vue";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": false,
        "progress_bar": true,
        "components": {
            CarouselSlider,
            BuktiTransferUpload
        },
    })
    .mount(el);
