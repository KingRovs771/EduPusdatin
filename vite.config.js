import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/adminlte.min.css",
                "resources/plugins/fontawesome-free/css/all.min.css",
                "resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
                "resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
                "resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
                "resources/plugins/jqvmap/jqvmap.min.css",
                "resources/plugins/daterangepicker/daterangepicker.css",
                "resources/plugins/summernote/summernote-bs4.min.css",

                "resources/js/adminlte.js",
                "resources/js/pages/dashboard.js",
                "resources/plugins/jquery/jquery.min.js",
                "resources/plugins/jquery-ui/jquery-ui.min.js",
                "resources/plugins/bootstrap/js/bootstrap.bundle.min.js",
                "resources/plugins/chart.js/Chart.min.js",
                "resources/plugins/sparklines/sparkline.js",
                "resources/plugins/jqvmap/jquery.vmap.min.js",
                "resources/plugins/jqvmap/maps/jquery.vmap.usa.js",
                "resources/plugins/jquery-knob/jquery.knob.min.js",
                "resources/plugins/moment/moment.min.js",
                "resources/plugins/daterangepicker/daterangepicker.js",
                "resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
                "resources/plugins/summernote/summernote-bs4.min.js",
                "resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
                "resources/js/demo.js",
            ],
            refresh: true,
        }),
    ],
    server: {
        host: "127.0.0.1",
        port: 5173,
        hmr: {
            host: "127.0.0.1",
        },
    },
});
