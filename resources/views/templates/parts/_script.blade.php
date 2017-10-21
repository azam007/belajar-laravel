</body>
<!--   Core JS Files   -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/material.min.js') }}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{ asset('assets/js/arrive.min.js') }}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('assets/js/material-dashboard.js?v=1.2.0') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</html>