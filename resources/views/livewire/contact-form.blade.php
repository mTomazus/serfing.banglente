<div>
    
    <form wire:submit.prevent="submitForm">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter name" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="form-group">
            <label for="exampleInputMessage">Message</label>
            <textarea class="form-control" id="exampleInputbody" placeholder="Enter Message" wire:model="message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
