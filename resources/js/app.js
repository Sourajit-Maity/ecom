require('./bootstrap');

require('alpinejs');
window.Vue = require("vue").default;

// importing compoment
import DesignTool from './components/DesignToolComponent.vue'
import VueHtml2Canvas from 'vue-html2canvas';
import drr from '@minogin/vue-drag-resize-rotate'

Vue.component('design-tool',DesignTool)
Vue.component('drr', drr)
Vue.use(VueHtml2Canvas);

const app = new Vue({
    el: '#app',
});