
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import axios from 'axios';
Vue.prototype.$axios = axios;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import RecommendBook from './components/home/RecommendBook'
import ContentList from './components/home/ContentList'
import Login from './components/auth/Login'
import Register from './components/auth/Register'
import ShowFind from './components/article/ShowFind'

const app = new Vue({
    el: '#app',
    components: {
        RecommendBook,
        ContentList,
        Login,
        Register,
        ShowFind
    }
});