<div class="d-flex justify-content-center">
   

ppp
<br>
<br><br>
<br>
<hr>
@if ($pic1)
        Photo Preview:
        <img src="{{ $pic1->temporaryUrl() }}" height="100" width="100">
    @endif

<form wire:submit.prevent="imgstore" class="form-group">

<input type="file" wire:model="pic1" class=" d-block">
<input type="submit" class="btn btn-info">

</form>

</div>

