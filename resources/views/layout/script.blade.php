<!--/.fluid-container-->
<script src="/vendors/jquery-1.9.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="/assets/scripts.js"></script>

<script src="/vendors/datatables/js/jquery.dataTables.min.js"></script>

<script src="/assets/DT_bootstrap.js"></script>
<script>
    $(function() {
        // Easy pie charts
        $('.chart').easyPieChart({animate: 1000});
    });
</script>
@yield('script')
