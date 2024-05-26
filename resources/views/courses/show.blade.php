@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">courses Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $courses->Name }}</h5>
        <p class="card-text">Syllabus : {{ $courses->Syllabus }}</p>
        <p class="card-text">Duration : {{ $courses->Duration }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
<script>
  crs.classList.add('active')
 </script>
@endsection