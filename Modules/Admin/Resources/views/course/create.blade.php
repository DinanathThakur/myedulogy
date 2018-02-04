@section('head-content')
    <link rel="stylesheet" href="/admin-assets/plugins/sceditor/minified/themes/default.min.css"/>
    <style type="text/css">
        div[data-schemapath="root.otherDescription"] table {
            width: 100% !important;
        }

        div[data-schemapath="root.otherDescription"] table td:nth-child(1) {
            width: 25% !important;
        }

        div[data-schemapath="root.otherDescription"] table td:nth-child(2),
        div[data-schemapath="root.otherDescription"] table td:nth-child(4) {
            width: 5% !important;
            text-align: center !important;
        }
    </style>
@stop
@extends('admin::layouts.master')
@section('title','Manage Courses')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <h2>Create new course</h2>
        <form method="post" id="createForm">
            <div id="create-course-div"></div>
            <button type="submit" class="btn btn-primary"> Create</button>
        </form>
    </div>

@stop


@section('page-script')

    <script type="text/javascript">

        blockUI({msg: "Loading form, please wait..."});
        $(document).ready(function (e) {


            // Set default options
            JSONEditor.defaults.options.theme = 'bootstrap3';
            JSONEditor.defaults.options.disable_edit_json = true;
            JSONEditor.defaults.options.disable_properties = true;
            JSONEditor.defaults.options.disable_array_reorder = true;
            JSONEditor.plugins.selectize.enable = true;
//            JSONEditor.plugins.sceditor.enable = true;

// Initialize the editor
            var editor = new JSONEditor(document.getElementById('create-course-div'), {
                ajax: true,
                schema: {$ref: "/schemaHandler?schema=createCourse"}
            });

            editor.on('ready', function () {
                unblockUI();
                // Validate
                var errors = editor.validate();
                if (errors.length) {
                    // Not valid
                }

            });

            $('#createForm').submit(function (e) {
                e.preventDefault();

                var self = this;
                var formData = new FormData(this);
                formData.append('method', "createCourse");
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
                        console.log(result);
                        if (typeof (result.status) != 'undefined' && result.status == 'success') {
                            toastr["success"]('Course creation done.');
                        } else {
                            if (typeof (result.data) != 'undefined' && Object.keys(result.data).length) {
                                toastr["error"](Object.values(result.data)[0]);
                            }
                        }
                    },
                    error: function (error) {
                        console.log("error");
                        console.log(error);
                        var error = JSON.parse(error.responseText);
                        if (typeof (error.data) != 'undefined' && Object.keys(error.data).length) {
                            toastr["error"](Object.values(error.data)[0]);
                        }

                    }
                });
            });
        })
    </script>

   


@stop