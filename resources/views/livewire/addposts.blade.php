<div>
   <div class="container">
   <div class="row">
    <div class="col-sm-8 mx-auto ">


{{$test}}
<a href="/home"><i class="fas fa-arrow-circle-left m-2 fa-2x"></i></a>

@if(session()->has("done"))
<p class="text-center text-info">{{session()->get("done")}}</p>
@endif

 <form wire:submit.prevent="addposts" class="form-group">

<input type="text" wire:model="ptitle" class="form-control" placeholder="Enter the title">
@error("ptitle") <small class="text-danger">{{$message}}</small> @enderror<br>

<textarea wire:model="pdescription" rows="7" class="form-control" placeholder="posts description here !" ></textarea>
@error("pdescription") <small class="text-danger">{{$message}}</small> @enderror<br>

<br>

<div class="progress bg-transparent" style="height:4px;">
  <div  wire:loading  class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>


<div class=" cover d-flex justify-content-around">
<!-- ..........................................  -->
<div>
@if($pic1)
<img src="{{ $pic1->temporaryUrl() }}" height="50">
@endif

<label for="setprofile1" id="labeforsetprofile" class="mt-2">one</label>
<input type="file" wire:model="pic1" id="setprofile1" class="d-none">
@error("pic1") <small class="text-danger">{{$message}}</small> @enderror<br>

</div>
<!-- .............................................................  -->

<!-- ..........................................  -->
<div>
@if($pic2)
<img src="{{ $pic2->temporaryUrl() }}" height="50">
@endif
<label for="setprofile2" id="labeforsetprofile" class="mt-2">pic</label>
<input type="file" wire:model="pic2" id="setprofile2">
@error("pic1") <small class="text-danger">{{$message}}</small> @enderror<br>

</div>
<!-- .............................................................  -->

<!-- ..........................................  -->
<div>
@if($pic3)
<img src="{{ $pic3->temporaryUrl() }}" height="50">
@endif
<label for="setprofile3" id="labeforsetprofile" class="mt-2">pic</label>
<input type="file" wire:model="pic3" id="setprofile3">
@error("pic1") <small class="text-danger">{{$message}}</small> @enderror<br>

</div>
<!-- .............................................................  -->

<!-- ..........................................  -->
<div>
@if($pic4)
<img src="{{ $pic4->temporaryUrl() }}" height="50">
@endif
<label for="setprofile4" id="labeforsetprofile" class="mt-2">pic</label>
<input type="file" wire:model="pic4" id="setprofile4">
@error("pic1") <small class="text-danger">{{$message}}</small> @enderror<br>

</div>
<!-- .............................................................  -->

<!-- ..........................................  -->
<div>
@if($pic5)
<img src="{{ $pic5->temporaryUrl() }}" height="50">
@endif
<label for="setprofile5" id="labeforsetprofile" class="mt-2">pic</label>
<input type="file" wire:model="pic5" id="setprofile5">
@error("pic1") <small class="text-danger">{{$message}}</small> @enderror<br>

</div>
<!-- .............................................................  -->


               </div>











<!-- ............  -->






        
                    
                              
                         
                      
                        






                





<br><br>

 <input type="submit" class="btn btn-outline-info btn-block ">
 
 </form>



































   
    </div>
   </div>
   </div>
</div>
