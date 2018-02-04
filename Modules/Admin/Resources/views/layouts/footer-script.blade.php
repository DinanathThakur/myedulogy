<!-- jQuery -->

<!-- Bootstrap -->
<script src="/admin-assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/admin-assets/plugins/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/admin-assets/plugins/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="/admin-assets/plugins/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/admin-assets/plugins/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/admin-assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/admin-assets/plugins/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="/admin-assets/plugins/skycons/skycons.js"></script>
<!-- Flot -->
<script src="/admin-assets/plugins/Flot/jquery.flot.js"></script>
<script src="/admin-assets/plugins/Flot/jquery.flot.pie.js"></script>
<script src="/admin-assets/plugins/Flot/jquery.flot.time.js"></script>
<script src="/admin-assets/plugins/Flot/jquery.flot.stack.js"></script>
<script src="/admin-assets/plugins/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/admin-assets/plugins/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/admin-assets/plugins/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/admin-assets/plugins/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="/admin-assets/plugins/DateJS/build/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/admin-assets/plugins/moment/min/moment.min.js"></script>
<script src="/admin-assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="/admin-assets/plugins/dataTable/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>


<!-- Custom Theme Scripts -->
<script src="/admin-assets/js/custom.min.js"></script>
<script src="/assets/plugins/toastr/toastr.min.js"></script>
<script src="/admin-assets/js/jsoneditor/jsoneditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/js/standalone/selectize.js"></script>
<!-- Include the editors JS -->
<script src="/admin-assets/plugins/sceditor/minified/sceditor.min.js"></script>

<!-- Include the BBCode or XHTML formats -->
<script src="/admin-assets/plugins/sceditor/minified/formats/bbcode.js"></script>
<script src="/admin-assets/plugins/sceditor/minified/formats/xhtml.js"></script>

<script>
	
	console.log(APP_URL);
    function generateField(tableID) {
        var inputContainer = tableID.find('.filter-data input, .filter-data select');
        var formData = {};
        $.each(inputContainer, function (i, v) {
            formData[$(this).attr('name')] = $(this).val();
        });
        return formData;
    }
    function resetField(tableID) {
    $.each(tableID.find('.filter-data input, .filter-data select'), function(i, v) {
        $(this).val('');
    });
}
$(document.body).on('click', '.filter-action', function() {
    var obj = $(this);
    var action = obj.data('action');
    var tableID = obj.parents('table').attr('id');
    if (action == 'cancel') {
        resetField($('#' + tableID));
    }
    $('#' + tableID).DataTable().draw();
});
</script>
