

 </div>
</div>
</body>


    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
   <script src="assets/js/light-bootstrap-dashboard.js"></script>



<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to  Admin Panel."

        }, {
            type: 'info',
            timer: 4000
        });

    });
</script>



<!-- Include jQuery - see http://jquery.com -->
<script>
    $('.confirmation').on('click', function () {
        return confirm('Are you sure?');
    });
</script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>


</body>

</html>

