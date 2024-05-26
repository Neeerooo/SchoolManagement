@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('courses/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$courses->Name}}" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" name="Syllabus" id="Syllabus" value="{{$courses->Syllabus}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="Duration" id="Duration" value="{{$courses->Duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
<script>
  crs.classList.add('active')
 </script>
@stop