@extends('admin::layouts.master')
@section('title','Manage Courses')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <h2>Manage Courses</h2>
            <table id="course-table" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <!-- <tr class="filter-data">
                                    <th><input type="text" name="courseName" data-column="2" class="filter-column"></th>
                                    <th>
                                        <select name="category" class="filter-column">
                                            <option value="">All</option>
                                            <?php foreach ($categories as $id => $category) { ?>
                                                <option value="<?php echo $id; ?>"><?php echo $category->category; ?></option>
                                            <?php } ?>
                                        </select>
                                    </th>
                                    <th></th>
                                    <th>
                                        <select name="status" data-column="4" class="filter-column">
                                            <option value="">All</option>
                                            <option value="A">Active</option>
                                            <option value="D">In-Active</option>
                                        </select>
                                    </th>
                                    <th>
                                        <span class="btn btn-default btn-xs filter-action" data-action="apply" data-toggle="tooltip" data-placement="top" title="Apply Filter" ><i class="fa fa-search"></i></span>
                                        <span class="btn btn-default btn-xs filter-action" data-action="cancel" data-toggle="tooltip" data-placement="top" title="Reset Filter" ><i class="fa fa-close"></i></span>
                                    </th>
                                </tr> -->
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
    </div>


  <div class="modal fade" id="edit-course-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update course</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="edit-course-form">
            <div id="edit-course-div"></div>
            <button id="edit-course-button" type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
      </div>
      
    </div>
  </div>
    <!-- /page content -->
@stop


@section('page-script')

    <script type="text/javascript">

        $(document).ready(function (e) {
        JSONEditor.defaults.options.theme = 'bootstrap3';
        JSONEditor.defaults.options.disable_edit_json = true;
        JSONEditor.defaults.options.disable_properties = true;
        JSONEditor.defaults.options.disable_array_reorder = true;
        JSONEditor.defaults.options.iconlib = 'fontawesome4';
        JSONEditor.plugins.selectize.enable = true;

        var courseTable = $('#course-table').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": false,
            "ordering": false,
            "ajax": {
                "url": "/admin/ajaxHandler",
                "type": "POST",
                "data": function(d){
                    d.method='getAllCourse';
                    $.extend(d, generateField($('#course-table')));
                }
            },
            "columns": [
                // {"data": "id"},
                {"data": "courseName"},
                {"data": "category"},
                {"data": "createdAt"},
                {"data": "status"},
                {"data": "action"}
            ]
        });
        new $.fn.dataTable.Buttons(courseTable, {
            buttons: [
                {
                    text: 'Create',
                    action: function (e, dt, node, conf) {
                        window.open(APP_URL + "/admin/create-course", '_blank');
                    }
                }
            ]
        });
        courseTable.buttons(0, null).container().prependTo(courseTable.table().container());



        // var editProductEditor = new JSONEditor(document.getElementById('edit-course-div'), {
        //     ajax: true,
        //     schema: {$ref: baseURL + "schema/editProduct.json"}
        // });

        $(document.body).on('click', '.active-status', function () {

            var obj = $(this);
            var orgID = obj.attr('data-orgID');
            var status = obj.attr('data-status');
            $.ajax({
                url: baseURL + "User/ajaxHandler",
                type: 'POST',
                dataType: 'html',
                data: {
                    orgID: orgID,
                    status: status,
                    method: 'manageStatus'
                },
                beforeSend: function (request) {
                    request.setRequestHeader('Auth', 'EISecret');
                },
                success: function (data) {

                }
            });
            console.log(orgID);

        });
        });
    </script>

@stop