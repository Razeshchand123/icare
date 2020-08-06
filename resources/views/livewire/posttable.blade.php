<div>
  





<div class="d-flex justify-content-between align-items-center">
       <h1>Manage your posts</h1>
        <a href="/addpost">add posts <i class="fas fa-plus-circle "></i></a>
       </div>
     <div class="d-flex justify-content-between">
     <p> total: 1</p> 
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
<button type="button" class="btn ">
<i class="fas fa-edit"></i>
</button>  </td>

<!-- <td><i class="fas fa-trash-alt text-danger"></i></td> -->

<!-- modelcode -->
<!-- Button trigger modal -->
<td>

<button type="button" class="btn " data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-trash-alt text-danger"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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














</div>
