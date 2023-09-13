import './bootstrap';

import { createInertiaApp} from "@inertiajs/vue3";

import { createApp,h } from "vue";
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue} from "ziggy";

createInertiaApp({
        title: title => title ? `${title} - CodeCourseBD` : 'CodeCourseBD',
        resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el,App,props,plugin}){
        return createApp({
            render : () => h(App,props) })
            .use(plugin)
            .use(ZiggyVue,Ziggy)
            .mount(el)
    },

    progress: false
})
