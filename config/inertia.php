<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Inertia Rendering
    |--------------------------------------------------------------------------
    |
    | This option controls how Inertia renders your pages. By default, all
    | pages are rendered using the Blade templating engine. However, you
    | may choose to use the Vue.js rendering engine for your pages.
    |
    | Supported: 'blade', 'vue'
    |
    */

    'rendering' => 'vue',

    /*
    |--------------------------------------------------------------------------
    | Root View
    |--------------------------------------------------------------------------
    |
    | This is the view that will be used as the root view for all Inertia
    | rendered pages. This should be a view that includes your application
    | layout and any necessary JavaScript and CSS imports.
    |
    */

    'root_view' => 'app',

    /*
    |--------------------------------------------------------------------------
    | Assets Version
    |--------------------------------------------------------------------------
    |
    | This option determines the version of your asset URLs. This is useful
    | for cache busting when you update your assets. You should set this
    | to a value that changes whenever you update your assets.
    |
    */

    'version' => null,

    /*
    |--------------------------------------------------------------------------
    | Shared Data
    |--------------------------------------------------------------------------
    |
    | This option allows you to share data with all Inertia rendered pages.
    | This data will be available on the client-side as well as the server-side.
    |
    */

    'share' => [
        // Add any shared data here
    ],
];