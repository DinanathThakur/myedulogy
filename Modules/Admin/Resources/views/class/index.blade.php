@extends('admin::layouts.master')
@section('title','Manage Classes')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <h2>Manage Classes</h2>
        <table id="course-table" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Date</th>
                <th>Timing</th>
                <th>Course Type</th>
                <th>Price</th>
                <th>Offer</th>
                <th>Discounted Price</th>
                <th>Offer Expires On</th>
                <th>Created At</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Date</th>
                <th>Timing</th>
                <th>Course Type</th>
                <th>Price</th>
                <th>Offer</th>
                <th>Discounted Price</th>
                <th>Offer Expires On</th>
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

    <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" id="createForm">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Create new class</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="row" style="margin: 0px;">
                            <div class="form-group">
                                <label for="select-category">Category</label>
                                <select name="category" class="form-control" id="select-category">
                                    <option value="">Select Category...</option>
                                    @if(isset($categories) && !empty($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select-course">Course</label>
                                <select name="courseID" class="form-control" id="select-course">
                                    <option value="">Select Course...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="courseType">Class Type</label>
                                <select name="type" class="form-control" id="courseType">
                                    <option value="C">Classroom</option>
                                    <option value="O">Online</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="startDate">Start Date</label>
                                <input class="form-control" name="startDate" type="date" id="startDate"
                                       min="{{date('Y-m-d')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="endDate">End Date</label>
                                <input class="form-control" name="endDate" id="endDate" type="date"
                                       min="{{date('Y-m-d')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="startTime">Start Time</label>
                                <input class="form-control" name="startTime" type="time" id="startTime"
                                       min="{{date('Y-m-d')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="endTime">End Time</label>
                                <input class="form-control" name="endTime" type="time" id="endTime">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input class="form-control" id="price" name="price" type="number">
                            </div>
                            <div class="form-group">
                                <label for="discountType">Discount</label>
                                <select name="discountType" class="form-control" id="discountType">
                                    <option value="">No Discount</option>
                                    <option value="F">Flat</option>
                                    <option value="P">Percent</option>
                                </select>
                            </div>
                            <div id="offer-details" class="hide">
                                <div class="form-group col-md-6">
                                    <label for="discountValue">Discount Value</label>
                                    <input class="form-control" id="discountValue" name="discountValue" type="number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="offerExpireOn">Offer Expires On</label>
                                    <input class="form-control" name="offerExpireOn" type="date" id="offerExpireOn"
                                           min="{{date('Y-m-d')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                        <button type="submit" class="btn btn-primary"> Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                    "data": function (d) {
                        d.method = 'getAllClasses';
                        $.extend(d, generateField($('#course-table')));
                    }
                },
                "columns": [
                    {"data": "date"},
                    {"data": "time"},
                    {"data": "type"},
                    {"data": "price"},
                    {"data": "offer"},
                    {"data": "discountedPrice"},
                    {"data": "offerExpiresOn"},
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
                            $('#createModal').modal('show');
                        }
                    }
                ]
            });
            courseTable.buttons(0, null).container().prependTo(courseTable.table().container());


            // var editProductEditor = new JSONEditor(document.getElementById('edit-course-div'), {
            //     ajax: true,
            //     schema: {$ref: baseURL + "schema/editProduct.json"}
            // });


            $(document.body).on('change', '#select-category', function (e) {
                e.preventDefault();
                var obj = $(this);
                $('#select-course').empty();
                $.ajax({
                    url: "/admin/ajaxHandler",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        categoryID: obj.val(),
                        method: 'getCoursesByCategory'
                    },
                    beforeSend: function (request) {
                        blockUI();
                    },
                    success: function (result) {
                        var toAppendCourse = '<option value="">Select Course...</option>';
                        if (typeof (result.data) != 'undefined' && result.data.length) {
                            $.each(result.data, function (i, v) {
                                toAppendCourse += '<option value="' + v['id'] + '">' + v['courseName'] + '</option>';
                            });

                        }
                        $('#select-course').append(toAppendCourse);
                    },
                    complete: function () {
                        unblockUI();
                    }
                });
            });
            $(document.body).on('change', '#discountType', function (e) {
                e.preventDefault();
                var obj = $(this);
                if (obj.val() != '') {
                    $('#offer-details').removeClass('hide');
                } else {
                    $('#offer-details').addClass('hide');
                }

            });

            $('#createForm').submit(function (e) {
                e.preventDefault();

                var self = this;
                var formData = new FormData(this);
                formData.append('method', "createClass");
                $.ajax({
                    url: '/admin/ajaxHandler',
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    data: formData,
                    beforeSend: function () {
                        blockUI({msg: "Creating course, please wait..."});
                    },
                    complete: function () {
                        unblockUI();
                    },
                    success: function (result) {
                        if (typeof (result.status) != 'undefined' && result.status == 'success') {
                            if (typeof (result.data != 'undefined' && result.data.length)) {
                                toastr["success"]('Course creation done.');
                                self.reset();
                            } else {
                                toastr["error"]('Something went wrong, please try again...');
                            }
                            $('#createModal').modal('hide');
                        } else {
                            if (typeof (result.data) != 'undefined' && Object.keys(result.data).length) {
                                toastr["error"](Object.values(result.data)[0]);
                            }
                        }
                    },
                    error: function (error) {
                        var error = JSON.parse(error.responseText);
                        if (typeof (error.data) != 'undefined' && Object.keys(error.data).length) {
                            toastr["error"](Object.values(error.data)[0]);
                        } else if (typeof (result.msg) != 'undefined') {
                            toastr["error"](result.msg);
                        }
                    }
                });
            });
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
