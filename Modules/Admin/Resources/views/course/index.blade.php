@extends('admin::layouts.master')
@section('title','Manage Courses')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <h2>Manage Courses</h2>
    <button class="btn btn-default pull-right" data-toggle="modal" data-target="#createModal">Create</button>
</div>

<!-- Modal -->
<div id="createModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
@stop