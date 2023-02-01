 <!-- jQuery -->
    <script src={{ URL::asset('Assets/plugins/jquery/jquery.min.js') }}></script>
    <!-- jQuery UI 1.11.4 -->
    <script src={{ URL::asset('Assets/plugins/jquery-ui/jquery-ui.min.js') }}></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->

    <script src={{ URL::asset('Assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- ChartJS -->
    <script src={{ URL::asset('Assets/plugins/chart.js/Chart.min.js') }}></script>
    <!-- Sparkline -->
    <script src={{ URL::asset('Assets/plugins/sparklines/sparkline.js') }}></script>
    <!-- JQVMap -->
    <script src={{ URL::asset('Assets/plugins/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ URL::asset('Assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
    <!-- jQuery Knob Chart -->
    <script src={{ URL::asset('Assets/plugins/jquery-knob/jquery.knob.min.js') }}></script>
    <!-- daterangepicker -->
    <script src={{ URL::asset('Assets/plugins/moment/moment.min.js') }}></script>
    <script src={{ URL::asset('Assets/plugins/daterangepicker/daterangepicker.js') }}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{ URL::asset('Assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
    <!-- Summernote -->
    <script src={{ URL::asset('Assets/plugins/summernote/summernote-bs4.min.js') }}></script>
    <!-- overlayScrollbars -->
    <script src={{ URL::asset('Assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ URL::asset('Assets/dist/js/adminlte.js') }}></script>
    <!-- AdminLTE for demo purposes -->
    <script src={{ URL::asset('Assets/dist/js/demo.js') }}></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src={{ URL::asset('Assets/dist/js/pages/dashboard.js') }}></script>
    {{-- retina --}}
    <script src="{{ URL::asset('Assets/plugins/retina/retina.min.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="Assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="Assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="Assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="Assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="Assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="Assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="Assets/plugins/jszip/jszip.min.js"></script>
    <script src="Assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="Assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="Assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="Assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="Assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <!-- bs-custom-file-input -->
    <script src="Assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
