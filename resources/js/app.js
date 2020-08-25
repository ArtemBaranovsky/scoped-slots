/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// import './resources/tailwind.css';




Vue.component('menu-list', require('./components/MenuList.vue').default);
Vue.component('carousel', require('./components/Carousel.vue').default);
Vue.component('testimonials', require('./components/Testimonials.vue').default);
// Vue.component('reply-likes', require('./components/ReplyLikes.vue').default);
Vue.component('series-dropdown', require('./components/SeriesDropdown.vue').default);
Vue.component('support-button', require('./components/SupportButton.vue').default);
Vue.component('accordion', require('./components/Accordion.vue').default);
Vue.component('question', require('./components/Question.vue').default);
Vue.component('render-example', require('./components/RenderExample.vue').default);

Vue.component('pinned', require('./components/Pinned.vue').default);
Vue.component('scan-view', require('./components/ScanView.vue').default);
Vue.component('count', require('./components/Count.vue').default);
Vue.component('conditional-element', require('./components/ConditionalElement.vue').default);

import PortalVue from 'portal-vue'
Vue.use(PortalVue)

import VModal from 'vue-js-modal'
Vue.use(VModal)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// 1. Using data attributes
// import Tooltip from 'tooltip.js';
import PopperTooltip from 'tooltip.js';

// 2. Using dedicated vue directive
// import Tooltip from 'tooltip.js';
Vue.directive('tooltip', {
    bind(elem, bindings) {
        // console.log(bindings);
        // new Tooltip(elem, {
        new PopperTooltip(elem, {
            placement: bindings.arg,
            title: bindings.value,
        })
    }
});

// 3. Using dedicated Vue components
import Tooltip from './components/Tooltip';
Vue.component('tooltip', Tooltip);

const app = new Vue({
    el: '#app',
    mounted() {   // 1. First option -tooltip with data-attributes
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            console.log(elem.dataset);
            new PopperTooltip(elem, {
            // new PopperTooltip(elem, {
                // placement: 'top',
                placement: elem.dataset.tooltipPlacement || 'top',
                // title: 'Hardcode the tooltip',
                title: elem.dataset.tooltip,
            })
        })
    }
});
