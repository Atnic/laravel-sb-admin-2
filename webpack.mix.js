let mix = require('laravel-mix');

mix.js('resources/assets/js/auth.js', 'public/js')
   .sass('resources/assets/sass/auth.scss', 'public/css');
mix.js('resources/assets/js/sb-admin-2.js', 'public/js')
   .sass('resources/assets/sass/sb-admin-2.scss', 'public/css');
mix.extract([
   'jquery', 'raphael',
//    'datatables.net', 'datatables.net-bs', 'datatables.net-responsive', 'datatables.net-responsive-bs',
   'vue', 'axios'
], 'public/js/vendor.js');
mix.version();
mix.setPublicPath('public');
