<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('template/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('template/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('template/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('template/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('template/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('template/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('template/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/pages/dashboard.js') }}"></script>
{{-- Select2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    new DataTable('.table');
    $('.table').DataTable({
        responsive: true
    });
</script>

<script type="text/javascript">
    //Date picker
    $(function() {
        $('#reservation').daterangepicker();
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        });
        $('[data-mask]').inputmask();
    });

    $('#cutiModal').on('shown.bs.modal', function() {
        $('#reservation').daterangepicker();
    });

    $('#pergiModal').on('shown.bs.modal', function() {
        $('#reservation2').daterangepicker();
    });

    //Datemask dd/mm/yyyy
    $('#kegiatanModal').on('shown.bs.modal', function() {
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        });
    });

    // Get value select option
    function change() {
        document.getElementById("id_act").value = document.getElementById("id_act").value;
    }

    $(document).ready(function() {
        $('#nis').select2({ dropdownParent: "#kegiatanModal" });
        $('#nis2').select2({ dropdownParent: "#pergiModal" });
        $('#nis3').select2({ dropdownParent: "#cutiModal" });
    });

    function getId(id,tabel){
        $('#id').val(id)
        $('#tabel').val(tabel)
    }

    function getIds(id){
        $('#id').val(id)
    }

</script>
