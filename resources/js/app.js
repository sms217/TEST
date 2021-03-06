require('./bootstrap');
window.Vue = require('vue').default;

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start()

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

require('alpinejs');
