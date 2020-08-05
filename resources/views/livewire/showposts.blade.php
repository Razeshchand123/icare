<div class="mt-5">
  



@forelse($postdata as $value)

<div class="row ">
    <div class="col-lg-6">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{Storage::url($value->pic1)}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Storage::url($value->pic2)}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Storage::url($value->pic3)}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Storage::url($value->pic4)}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Storage::url($value->pic5)}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
    <div class="col-lg-6 ">
    <h3 class="text-center text-capitalize text-justify">{{$value->title}}</h3>
     <p class="p-2 text-capitalize text-justify">{{$value->description}}   <span><a href="">see_more</a></span></p>
    

     <p class="d-flex justify-content-between"> <small><i class="fas fa-pen-fancy"></i>: {{$value->author}}</small><small><i class="fas fa-clock mr-1"></i>{{$value->created_at->diffForHumans()}}</small></p>
     
 </div>
</div>
<hr><br>
@empty
<h1 class="text-center text-danger">No posts data found added yet</h1>
@endforelse
















</div>
