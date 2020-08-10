<div  style="position:relative;">
   <span  wire:click="heartdata(1)" class="number">{{$number}}</span>
<button  wire:click="heartdata(1)" class="btn btn-sm">  <i class="text-danger fas fa-heart fa-4x animate__animated animate__heartBeat animate__delay-2s animate__slower animate__infinite	infinite"></i></button>
  


<style>
.number{
   cursor: pointer;
    top: 33%;
    z-index: 99;
    color: white;
    position: absolute;
    right: 34%;
    font-size: 72%;
}
</style>
</div>


<!-- USER GUIDE -->


<!--1.  heart ko table id baata start hune vaye kale first ma chaln anasak6 --> 