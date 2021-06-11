require('./bootstrap');

require('alpinejs');
window.Vue = require("vue").default;

// importing compoment
import DesignTool from './components/DesignToolComponent.vue'


Vue.component('design-tool',DesignTool)


const app = new Vue({
    el: '#app',
});