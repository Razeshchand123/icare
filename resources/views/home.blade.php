@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
       <div class="d-flex justify-content-between align-items-center">
       <h1>Manage your posts</h1>
        <a href="/addpost">add posts <i class="fas fa-plus-circle "></i></a>
       </div>
         <!-- tablecode  -->
   <table class="table table-striped table-hover table-borded">
    <thead>
      <th>No.</th>
      <th>title</th>
      <th>description</th>
      <th>img1</th>
      <th>img2</th>
      <th>img3</th>
      <th>img4</th>
      <th>img5</th>
      <th colspan="2">Action</th>
    </thead>

 

   </table>



         <!-- tablecodeend -->
        </div>
    </div>
</div>
@endsection
