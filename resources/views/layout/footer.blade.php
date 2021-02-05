

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Base Project &copy; My App <?= date("Y") ?></div>
                <!--
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
                -->
            </div>
        </div>
    </footer>
</div>
<!-- close div class layoutSidenav_content -->
<script src="{{ asset('') }}assets/plugins/jquery/jquery.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('') }}js/scripts.js"></script>
<script src="/main.js"></script>
<script src="{{ asset('') }}assets/plugins/chart.js/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('') }}assets/demo/chart-area-demo.js"></script>
<script src="{{ asset('') }}assets/demo/chart-bar-demo.js"></script>
<script src="{{ asset('') }}assets/jquery/datatables.min.js" crossorigin="anonymous"></script>

@yield('pagespecificscripts')
<script>
    window.onload = () => {
        'use strict';
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                    .register('./sw.js');
        }
    }
</script>
</body>
</html>
