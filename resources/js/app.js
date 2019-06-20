import router from './router'
import store from './store'
import Toasted from 'vue-toasted';
import BootstrapVue from 'bootstrap-vue'
import wysiwyg from "vue-wysiwyg";
import VueSweetalert2 from 'vue-sweetalert2';

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('layout', require('./components/layout/Index.vue'));
Vue.component('navbar', require('./components/layout/Navbar.vue'));
Vue.component('banner', require('./components/layout/Banner.vue'));
Vue.component('intro', require('./components/layout/Intro.vue'));
Vue.component('services', require('./components/layout/Services.vue'));
Vue.component('consulting', require('./components/layout/Consulting.vue'));
Vue.component('projects', require('./components/layout/Projects.vue'));
Vue.component('tools', require('./components/layout/Tools.vue'));
Vue.component('foot', require('./components/layout/Footer.vue'));
Vue.component('spinner', require('./components/helpers/Spinner.vue'));
Vue.component('comments', require('./components/blog/comment/Index.vue'));
Vue.component('create-comment', require('./components/blog/comment/Create.vue'));
Vue.component('upload-image', require('./components/helpers/UploadImage.vue'));
Vue.component('modal', require('./components/helpers/Modal.vue'));
Vue.component('register', require('./components/auth/Register.vue'));
Vue.component('login', require('./components/auth/Login.vue'));


//Vendor Components
Vue.use(require('vue-moment'))
Vue.use(Toasted,  {duration: 3000, iconPack : 'fontawesome', theme: 'bubble'})
Vue.use(BootstrapVue);
Vue.use(wysiwyg, {});
Vue.use(VueSweetalert2)

//Utilities
window.translate = function(model, key){
    if (!model) {
        return
    }
    let language_id = store.getters.getLanguageId
    let translation = model.row.translations.find(translate => translate.language_id === language_id && translate.key === key)

    if (!translation) {
        translation = model.row.translations.find(translate => translate.language_id === 1 && translate.key === key)
    }

    return translation.value
}

Vue.prototype.translate = function(model, key){
    return translate(model, key)
}

//filters
Vue.filter('money', function(value){
    var numeral = require('numeral')
    return numeral(value).format('0,0.00')
})

Vue.filter('percent', function(value){
    var numeral = require('numeral')
    return numeral(value * 100).format('0,0.00') + '%'
})

const app = new Vue({
    el: '#app',
    router,
    store
});
