import axios from 'axios';
import './jquery-3.6.0.min.js';
import './jquery.counterup.min.js';
import './main.js';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
