var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        .sass('app.scss')

        .scripts([
                'jquery/dist/jquery.js',
                'bootstrap/dist/js/bootstrap.js',
                'toastr/toastr.js',
                'sweetalert/dist/sweetalert.min.js',
                'bootbox.js/bootbox.js'
            ],
            'public/js/dependencies.min.js',
            'bower_components'
        )
        .scripts([
                'vue/dist/vue.js',
                'vue-dnd/index.js',
                'vue-panel/index.js',
                'vue-resource/dist/vue-resource.js'
            ],
            'public/js/vue.min.js',
            'bower_components'
        )
        .scripts([
            'assets/js/home-carousel.js'
        ], 'public/js/effects.min.js',
           'resources'
        )

        .scripts([
            'assets/js/cms/jquery.js',
            'assets/js/cms/jquery-1.8.3.min.js',
            'assets/js/cms/jquery-ui-1.9.2.custom.min.js',
            'assets/js/cms/bootstrap.min.js',
            'assets/js/cms/jquery.scrollTo.min.js',
            'assets/js/cms/jquery.nicescroll.js',
            'assets/js/cms/jquery.knob.js',
            'assets/js/cms/sparklines.js',
            'assets/js/cms/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js',
            'assets/js/cms/scripts.js'
        ],
        'public/js/cms-ui.min.js',
        'resources')

        .styles([
                'dropzone/dist/basic.css',
                'sweetalert/dist/sweetalert.css',
                'toastr/toastr.css',
                'animate.css/animate.css',
                'font-awesome/css/font-awesome.css',
                'font-awesome-animation/dist/font-awesome-animation.css'
            ],
            'public/css/effects.min.css',
            'bower_components')

        .styles([
            'assets/css/cms/jquery-ui-1.10.4.min.css',
            'assets/css/cms/bootstrap-theme.css',
            'assets/css/cms/elegant-icons-style.css',
            'assets/css/cms/fullcalendar.css',
            'assets/css/cms/jquery-jvectormap-1.2.2.css',
            'assets/css/cms/line-icons.css',
            'assets/css/cms/owl.carousel.css',
            'assets/css/cms/style.css',
            'assets/css/cms/style-responsive.css',
            'assets/css/cms/widgets.css',
            'assets/css/cms/xcharts.min.css',
            'assets/css/cms/devices.css',
        ],
        'public/css/cms-ui.min.css',
        'resources')

       .version([               // Relative to public directory
           'css/app.css',
           'css/effects.min.css',
           'css/cms-ui.min.css',
           'js/cms-ui.min.js',
           'js/effects.min.js',
           'js/dependencies.min.js',
           'js/vue.min.js'
       ])
});
