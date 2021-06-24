require('./bootstrap');

require('alpinejs');
window.Vue = require("vue").default;

// importing compoment
import DesignTool from './components/DesignToolComponent.vue'
import VueHtml2Canvas from 'vue-html2canvas';
import VModal from 'vue-js-modal'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.component('design-tool',DesignTool)
Vue.use(VueHtml2Canvas)
Vue.use(VModal)


library.add(faUserSecret)

Vue.component('font-awesome-icon', FontAwesomeIcon)

// const app = new Vue({
//     el: '#app',
// });


import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()

createInertiaApp({
  resolve: name => import(`./Pages/${name}`),
  setup({ el, app, props }) {
    new Vue({
      render: h => h(app, props),
    }).$mount(el)
  },
})