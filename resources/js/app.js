


require('./bootstrap');
import BootstrapVue from 'bootstrap-vue'
import ex from "./components/Theatre"
window.Vue = require('vue');
Vue.use(BootstrapVue);


const app = new Vue({
	components:{
		ex
	},
    el: '#app'
});
