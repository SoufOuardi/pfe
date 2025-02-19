<div class="d-none mt-2" id="addressInput">    
   <label class="" for="">Edit Address</label>
    <input class="form-control" type="text" wire:model.defer value="{{$profile->address}}" >
</div>

<a href="#" id="saveBtn" class="btn-small d-none" onclick="event.preventDefault(); this.classList.add('d-none'); document.getElementById('editBtn').classList.remove('d-none');
                                                        document.getElementById('addressInput').classList.add('d-none');">Save</a>