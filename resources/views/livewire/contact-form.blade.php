<div class="mx-auto">    

    <div>
        @if (session()->has('message'))
            <div class="alert h4 text-center alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    
    <form wire:submit.prevent="submitForm" class="col-12 mx-auto p-3">

        @csrf

        <div class="row">
            <div class="col form-group">
                <label class="text-white" for="exampleInputName">Tel. numeris</label>
                <input type="tel" class="form-control" id="exampleInputName" placeholder="Įveskite savo tel. numerį" wire:model="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col form-group">
                <label class="text-white" for="exampleInputEmail">El. paštas</label>
                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Įveskite el. paštą" wire:model="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group">
            <label class="text-white" for="exampleInputMessage">Žinutė</label>
            <textarea class="form-control" id="exampleInputbody" placeholder="Rašykite savo žinutę" wire:model="message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="mt-3 btn btn-primary">Siųsti</button>

    </form>
    
</div>