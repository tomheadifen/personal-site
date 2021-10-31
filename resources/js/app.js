require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
import Layout from './Layouts/AppLayout'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
	title: (title) => `${title} - ${appName}`,
	resolve: name => {
		const page = require(`./Pages/${name}`).default
		page.layout = page.layout || Layout
		return page
	},
	setup({ el, App, props, plugin }) {
	createApp({ render: () => h(App, props) })
		.use(plugin)
		.use(Toast)
		.mount(el)
	},
})

InertiaProgress.init()