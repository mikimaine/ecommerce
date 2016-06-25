var elixir = require('laravel-elixir');

elixir(function(mix) {
    var active_theme_name =  'default';
    var theme_path = 'public/themes/'+active_theme_name;

    mix
        //.phpUnit()

        // Copy needed files from /node directories to /public directory.
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts/font-awesome')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap')
        .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/vendor')

        .sass([ // Process front-end stylesheets
                'frontend/main.scss'
            ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
                'frontend/main.css'
            ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
            'plugins.js',
            'frontend/main.js'
        ], 'public/js/frontend.js')
        /**
         * Combine Themes files
         * */
        .styles([
            'frontend/themes/'+active_theme_name+'/animate.css',
            'frontend/themes/'+active_theme_name+'/font-awesome.css',
            'frontend/themes/'+active_theme_name+'/owl.carousel.css',
            'frontend/themes/'+active_theme_name+'/jquery.fancybox.css',
            'frontend/themes/'+active_theme_name+'/layerslider/css/layerslider.css',
            'frontend/themes/'+active_theme_name+'/styles.css',
            'frontend/themes/'+active_theme_name+'/tuner/css/styles.css',
            'frontend/themes/'+active_theme_name+'/tuner/css/colorpicker.css',

        ],theme_path+'/assets/css/frontend.css')

        .scripts([ // Combine front-end theme scripts
            'frontend/themes/'+active_theme_name+'/jquery.min.js',
            'frontend/themes/'+active_theme_name+'/jquery-ui.min.js',
            'frontend/themes/'+active_theme_name+'/jquery.migrate.min.js',
            'frontend/themes/'+active_theme_name+'/jquery.isotope.min.js',
            'frontend/themes/'+active_theme_name+'/jquery.form.min.js',
            'frontend/themes/'+active_theme_name+'/jquery.validate.min.js',
            'frontend/themes/'+active_theme_name+'/jquery.countdown.min.js',
            'frontend/themes/'+active_theme_name+'/jquery.fancybox.pack.js',
            'frontend/themes/'+active_theme_name+'/jquery.fancybox-media.js',
            'frontend/themes/'+active_theme_name+'/retina.min.js',
            'frontend/themes/'+active_theme_name+'/SmoothScroll.js',
            'frontend/themes/'+active_theme_name+'/owl.carousel.min.js',
            'frontend/themes/'+active_theme_name+'/jquery.tweet.js',
            'frontend/themes/'+active_theme_name+'/wow.min.js',
            'frontend/themes/'+active_theme_name+'/flot/jquery.flot.js',
            'frontend/themes/'+active_theme_name+'/flot/jquery.flot.pie.js',
            'frontend/themes/'+active_theme_name+'/flot/jquery.flot.categories.js',
            'frontend/themes/'+active_theme_name+'/layerslider/js/greensock.js',
            'frontend/themes/'+active_theme_name+'/layerslider/js/layerslider.transitions.js',
            'frontend/themes/'+active_theme_name+'/layerslider/js/layerslider.kreaturamedia.jquery.js',
            'frontend/themes/'+active_theme_name+'/scripts.js',

        ], theme_path+'/assets/js/frontend.js')

        .sass([ // Process back-end stylesheets
            'backend/main.scss',
            'backend/skin.scss',
            'backend/plugin/toastr/toastr.scss'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
                'backend/main.css'
            ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
                'plugins.js',
                'backend/main.js',
                'backend/plugin/toastr/toastr.min.js',
                'backend/custom.js'
            ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});

/**
 * Uncomment for LESS version
 */
/*elixir(function(mix) {
    mix
      //  .phpUnit()

        // Copy webfont files from /vendor directories to /public directory.
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts/font-awesome')
        .copy('node_modules/bootstrap-less/fonts', 'public/build/fonts/bootstrap')
        .copy('node_modules/bootstrap-less/js/bootstrap.min.js', 'public/js/vendor')

        .less([ // Process front-end stylesheets
            'frontend/main.less'
        ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
            'frontend/main.css'
        ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
            'plugins.js',
            'frontend/main.js'
        ], 'public/js/frontend.js')

        .less([ // Process back-end stylesheets
            'backend/AdminLTE.less',
            'backend/plugin/toastr/toastr.less'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
            'backend/main.css'
        ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
            'plugins.js',
            'backend/main.js',
            'backend/plugin/toastr/toastr.min.js',
            'backend/custom.js'
        ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});*/
