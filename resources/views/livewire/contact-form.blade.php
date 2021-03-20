<div class="bg-white mx-auto">    
    <form wire:submit.prevent="submitForm" class="col-8 mx-auto p-3">

        @csrf

        <div>
            @if (session()->has('message'))
                <div class="alert h4 alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="exampleInputName">Vardas</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Įveskite savo vardą" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">El. paštas</label>
            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Įveskite el. paštą" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
       
        <div class="form-group">
            <label for="exampleInputMessage">Žinutė</label>
            <textarea class="form-control" id="exampleInputbody" placeholder="Rašykite savo žinutę" wire:model="message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="mt-3 btn btn-primary">Siųsti</button>
    </form>
</div>