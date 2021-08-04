const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Customer style sheet
mix.styles([
    'public/customer/content/css/header.css',
    'public/customer/content/vendor/bootstrap/css/bootstrap.css',
    'public/customer/content/vendor/cubeportfolio/css/cubeportfolio.min.css',
    'public/customer/content/vendor/telerik/css/telerik.common.css',
    'public/customer/content/vendor/editors/summernote/summernote-bs4.css',
    'public/customer/content/css/utilities.css',
    'public/customer/content/css/skin/default.css',
    'public/customer/content/vendor/editors/CodeMirror/codemirror.min.css',
    'public/customer/content/vendor/editors/CodeMirror/theme/eclipse.min.css',
    'public/customer/content/vendor/editors/CodeMirror/mode/liquid/liquid.css',
    'public/customer/content/css/custom.css',
], 'public/customer/content/style.css');

mix.scripts([
    'public/customer/content/vendor/jquery/jquery.min.js',
    'public/customer/content/vendor/modernizr/modernizr.js',
    'public/customer/content/vendor/jquery/jquery-migrate.min.js',
    'public/customer/content/vendor/jquery/jquery.visible.min.js',
    'public/customer/content/vendor/bootstrap/js/popper.js',
    'public/customer/content/vendor/bootstrap/js/bootstrap.min.js',
    'public/customer/content/vendor/slick-slider/slick.js',
    'public/customer/content/vendor/svg-injector/svg-injector.min.js',
    'public/customer/content/js/page.js',
    'public/customer/content/vendor/cubeportfolio/js/jquery.cubeportfolio.js',
    'public/customer/content/js/cubeportfolio.init.js',
    'public/customer/content/js/other.js',
    'public/customer/content/js/script.js',
    'public/customer/content/js/sticky-kit.min.js',
    'public/customer/content/js/jquery.validate.js',
    'public/customer/content/js/jquery.unobtrusive-ajax.js',
    'public/customer/content/js/jquery-shims.js',
    'public/customer/content/vendor/underscore/underscore.js',
    'public/customer/content/vendor/underscore/underscore.string.js',
    'public/customer/content/vendor/underscore/underscore.mixins.js',
    'public/customer/content/vendor/moment/moment.js',
    'public/customer/content/vendor/datetimepicker/js/tempusdominus-bootstrap-4.js',
    'public/customer/content/vendor/editors/CodeMirror/codemirror.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/fold/xml-fold.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/hint/show-hint.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/hint/xml-hint.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/hint/html-hint.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/hint/css-hint.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/hint/javascript-hint.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/edit/closetag.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/edit/closebrackets.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/edit/matchtags.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/edit/matchbrackets.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/mode/multiplex.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/mode/overlay.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/display/fullscreen.min.js',
    'public/customer/content/vendor/editors/CodeMirror/addon/selection/active-line.min.js',
    'public/customer/content/vendor/editors/CodeMirror/mode/xml/xml.min.js',
    'public/customer/content/vendor/editors/CodeMirror/mode/javascript/javascript.min.js',
    'public/customer/content/vendor/editors/CodeMirror/mode/css/css.min.js',
    'public/customer/content/vendor/editors/CodeMirror/mode/htmlmixed/htmlmixed.min.js',
    'public/customer/content/vendor/editors/CodeMirror/mode/liquid/liquid.js',
    'public/customer/content/vendor/editors/summernote/summernote-bs4.min.js',
    'public/customer/content/vendor/editors/summernote/plugins/smartstore.image.js',
    'public/customer/content/vendor/editors/summernote/plugins/smartstore.link.js',
    'public/customer/content/vendor/editors/summernote/plugins/smartstore.tablestyles.js',
    'public/customer/content/vendor/editors/summernote/plugins/smartstore.cssclass.js',
    'public/customer/content/vendor/editors/summernote/globalinit.js',
    'public/customer/content/vendor/select2/js/select2.js',
    'public/customer/content/js/theme.selectwrapper.js',
    'public/customer/content/js/theme.common.js',
    'public/customer/content/js/theme.system.js',
    'public/customer/content/vendor/jquery-ui/widget.js',
    'public/customer/content/vendor/fileuploader/jquery.iframe-transport.js',
    'public/customer/content/vendor/fileuploader/jquery.fileupload.js',
    'public/customer/content/vendor/fileuploader/jquery.fileupload-single-ui.js',

], 'public/customer/content/script.js');
