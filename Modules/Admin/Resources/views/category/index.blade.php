@extends('admin::layouts.master')
@section('title','Manage Categories')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <h2>Manage Categories</h2>
    <table id="category-table" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
</div>

<div class="modal fade" id="createModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" id="createForm">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create new category</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                  <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name ="category" placeholder="Enter category" required="" />
                  </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
                <button type="submit" class="btn btn-primary"> Create </button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- /page content -->
@stop

@section('page-script')

<script type="text/javascript">
  
  $(document).ready(function(e){


var categoryTable = $('#category-table').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": false,
            "ordering": false,
            "ajax": {
                "url": "/admin/ajaxHandler",
                "type": "POST",
                "data": function(d){
                    d.method='getAllCategory';
                    $.extend(d, generateField($('#category-table')));
                }
            },
            "columns": [
                {"data": "category"},
                {"data": "createdAt"},
                {"data": "status"},
                {"data": "action"}
            ]
        });
        new $.fn.dataTable.Buttons(categoryTable, {
            buttons: [
                {
                    text: 'Create',
                    action: function (e, dt, node, conf) {
                        $('#createModal').modal('show');
                    }
                }
            ]
        });
        categoryTable.buttons(0, null).container().prependTo(categoryTable.table().container());



        // var editProductEditor = new JSONEditor(document.getElementById('edit-category-div'), {
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

      $('#createForm').submit(function (e) {
            e.preventDefault();

            var self = this;
            var formData = new FormData(this);
            formData.append('method',"createCategory");
            $.ajax({
                url: '/admin/ajaxHandler',
                type: 'POST',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                beforeSend: function () {
                    blockUI({msg: "Creating category, please wait..."});
                },
                complete: function () {
                    unblockUI();
                },
                success: function (result) {
                        $('#createModal').modal('hide');
                        categoryTable.draw();
                        self.reset();
                },
                error: function (result) {
                    console.log("error");
                    console.log(result);
                }
            });
        });
  })
</script>

@stop