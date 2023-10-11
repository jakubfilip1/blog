/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import "tinymce/tinymce";
import "tinymce/skins/ui/oxide/skin.min.css";
import "tinymce/skins/content/default/content.min.css";
import "tinymce/icons/default/icons";
import "tinymce/themes/silver/theme";
import "tinymce/models/dom/model";
import "tinymce/plugins/link/plugin";
import "tinymce/plugins/advlist/plugin";
import "tinymce/plugins/autolink/plugin";
import "tinymce/plugins/preview/plugin";
import "tinymce/plugins/lists/plugin";
import "tinymce/plugins/image/plugin";
import "tinymce/plugins/charmap/plugin";
import "tinymce/plugins/anchor/plugin";
import "tinymce/plugins/pagebreak/plugin";
import "tinymce/plugins/wordcount/plugin";
import "tinymce/plugins/searchreplace/plugin";
import "tinymce/plugins/visualchars/plugin";
import "tinymce/plugins/visualblocks/plugin";
import "tinymce/plugins/code/plugin";
import "tinymce/plugins/fullscreen/plugin";
import "tinymce/plugins/media/plugin";
import "tinymce/plugins/insertdatetime/plugin";
import "tinymce/plugins/table/plugin";
import "tinymce/plugins/emoticons/plugin";
import "tinymce/plugins/emoticons/js/emojis";
import "tinymce/plugins/help/plugin";
import "tinymce/plugins/help/js/i18n/keynav/en";






/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
