import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'
import Layout from './Pages/Layout.vue'
import AppHead from './Components/AppHead.vue'
import VueSnip from 'vue-snip'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

createInertiaApp({
  title: function(title) {
    return `${title} - My Inertia App`
  },
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]

    page.default.layout = page.default.layout || Layout

    if(!page.default.layout) {
      page.default.layout = Layout
    }

    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(VueSnip)
      .use(ZiggyVue)
      .component('AppHead', AppHead)
      .component('Link', Link)
      .mount(el)
  },
  progress: {
    // The delay after which the progress bar will appear, in milliseconds...
    delay: 250,

    // The color of the progress bar...
    color: '#29d',

    // Whether to include the default NProgress styles...
    includeCSS: true,

    // Whether the NProgress spinner will be shown...
    showSpinner: false,
  },
})