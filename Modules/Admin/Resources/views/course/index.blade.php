@extends('admin::layouts.master')
@section('title','Manage Courses')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <h2>Manage Courses</h2>
    <button class="btn btn-default pull-right" data-toggle="modal" data-target="#createModal">Create</button>
</div>

<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" id="createForm">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create new course</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                  <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" required="" name="category">
                    <option value="">Select a category...</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label for="courseName">Name</label>
                    <input type="text" class="form-control" id="courseName" name ="courseName" placeholder="Enter courseName" required="" />
                </div>
                <div class="form-group">
                    <label for="category">Description</label>
                    <textarea class="form-control" placeholder="Enter description" name="mainDescription" required=""></textarea>
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


      $('#createForm').submit(function (e) {
            e.preventDefault();

            var self = this;
            var formData = new FormData(this);
            formData.append('method',"createCourse");
            $.ajax({
                url: '/admin/ajaxHandler',
                type: 'POST',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                beforeSend: function () {
                    blockUI({msg: "Creating course, please wait..."});
                },
                complete: function () {
                    unblockUI();
                },
                success: function (result) {
                        $('#createModal').modal('hide');
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