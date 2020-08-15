<div class="container">
<div class="row">
<div class="d-flex justify-content-between align-items-center w-100">
       <h1>Manage your posts</h1>
        <a href="/addpost">add posts <i class="fas fa-plus-circle "></i></a>
       </div>
     <div class="d-flex justify-content-between w-100">
     <p> total: {{$postdata->count()}}</p> 
      @if(session()->has("done"))
     <p class="text-success">{{session()->get("done")}} <i class="fas fa-check-circle text-success"></i></p>
     @endif
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
      <th>Author</th>
      <th colspan="2" class="text-center">Action</th>
    </thead>
<tbody>
 @forelse($postdata as $value)

<tr>
<td>1</td>
<td>{{$value->title}}</td>
<td>{{substr($value->description,0,100)}} <a href="">...</a> </td>
<td><img class="d-block" src="{{Storage::url($value->pic1)}}" alt="Third slide" height="25"></td>
<td><img class="d-block" src="{{Storage::url($value->pic2)}}" alt="Third slide" height="25"></td>
<td><img class="d-block" src="{{Storage::url($value->pic3)}}" alt="Third slide" height="25"></td>
<td><img class="d-block" src="{{Storage::url($value->pic4)}}" alt="Third slide" height="25"></td>
<td><img class="d-block" src="{{Storage::url($value->pic5)}}" alt="Third slide" height="25"></td>
<td>{{$value->author}}</td>
<td>
<a href="/message" type="button" class="btn ">
<i class="fas fa-edit"></i>
</a>  </td>

<!-- <td><i class="fas fa-trash-alt text-danger"></i></td> -->

<!-- modelcode -->
<!-- Button trigger modal -->
<td>

<button type="button" class="btn " data-toggle="modal" data-target="#exampleModal{{$value->id}}">
<i class="fas fa-trash-alt text-danger"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">I CARE </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>You want delete this post</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">no</button>
        <button wire:click="deletepost({{$value->id}})" type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">yes</button>
      </div>
    </div> 
  </div>
</div>
</td>
<!-- modelcode  -->


</tr>
 @empty
 <tr >
   <style>
    .socailcover{top:23%;}
   </style>
 <td colspan="10"><h1 class="text-center text-danger">No Posts Found</h1></td>
 </tr>
 @endforelse
 </tbody>
   </table>



         <!-- tablecodeend -->
        </div>



<br><hr><br>

<!-- user table code satrt here  -->
<div class="row">
<div class="d-flex justify-content-between align-items-center w-100">
       <h1>Manage your admins</h1>
        <a href="">add admin <i class="fas fa-plus-circle "></i></a>
       </div>
      
     <div class="d-flex justify-content-between w-100">
     <p> total: {{$userlist->count()}}</p> 
      @if(session()->has("done1"))
     <p class="text-success text-center">{{session()->get("done1")}} <i class="fas fa-check-circle text-success"></i></p>
     @endif
     </div>

         <!-- tablecode  -->
   <table class="table table-striped table-hover table-borded text-center">
    <thead>
      <th>No.</th>
      <th>name</th>
      <th class="text-left">pic</th>
      <th>posts</th>
      <th>facebook</th>
      <th colspan="2" class="text-center ">Action</th>
    </thead>
<tbody>
 @forelse($userlist as $value)

<tr>
<td>1</td>
<td>{{$value->name}}</td>
<td><img class="d-block" src="storage/{{$value->profile}}" alt="Third slide" height="75" width="75"></td>
<td>245</td>
<td><a href="{{$value->facebooklink}}"><i class="fab fa-facebook fa-2x"></i></a></td>
<td>
<a href="/message" type="button" class="btn ">
<i class="fas fa-edit"></i>
</a>  </td>

<!-- <td><i class="fas fa-trash-alt text-danger"></i></td> -->

<!-- modelcode -->
<!-- Button trigger modal -->
<td>

<button type="button" class="btn " data-toggle="modal" data-target="#exampleModal{{$value->id}}">
<i class="fas fa-trash-alt text-danger"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">I CARE </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>You want delete this post</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">no</button>
        <button wire:click="deleteuser({{$value->id}})" type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">yes</button>
      </div>
    </div> 
  </div>
</div>
</td>
<!-- modelcode  -->


</tr>
 @empty
 <tr >
   <style>
    .socailcover{top:23%;}
   </style>
 <td colspan="10"><h1 class="text-center text-danger">No user Found</h1></td>
 </tr>
 @endforelse
 </tbody>
   </table>



         <!-- tablecodeend -->
        </div>
        
</div>

<!-- user table code end here  -->




</div>
</div>

