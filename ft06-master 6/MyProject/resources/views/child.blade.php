@extends('app')

@section('title', 'Page Title')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">New To Do</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label>To Do</label>
        <input type="text" class="form-control">
      </div>
      <button class="btn btn-default" ><b>+</b> Add To Do</button>
    </div>
 </div>

<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">To Do List</h3>
</div>
<div class="panel-body">
    <table class="table table-striped table-bordered">
    <tr>
        <th>To Do</th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td> To Do 1</td>
        <td>
            <input type="checkbox" value="">
        </td>
        <td>
            <button type="button" class="btn btn-danger">
            <span class="glyphicon glyphicon-trash"></span> Delete
            </button>
        </td>
    </tr>
    </table>
</div>
</div>

@endsection