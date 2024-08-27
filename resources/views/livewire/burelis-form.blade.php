<div class="bg-white f-small mb-4">
    <form wire:submit.prevent="submitBurelisForm" class="p-3">

        @csrf

        <div>
            @if (session()->has('message'))
                <div class="alert h4 alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        
        <div class="col-11 mx-auto row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Vardas" wire:model="name">
                @error('name') <span class="text-danger small error">{{ $message }}</span> @enderror
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Pavardė" wire:model="surname">
                @error('surname') <span class="text-danger small error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-3 justify-content-around">
            <div class="input-group w-auto">
                <div class="input-group-append">
                    <label class="input-group-text" for="metai" aria-describedby="metai">Pogrupis</label>
                </div>
                <select class="form-control" name="metai" id="metai" wire:model="age">
                    <option selected>choose</option>
                    <option value="U-14">U-14</option>
                    <option value="U-16">U-16</option>
                    <option value="U-18">U-18</option>
                </select>
            </div>

        </div>
        <div class="form-group col-7 mb-3 mx-auto">                    
            <input class="form-control" type="email" name="email" aria-describedby="emailHelp" placeholder="Elektroninis paštas" wire:model="email">
            @error('email') <span class="text-danger small error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col-5 mb-3 mx-auto">
            <input type="tel" class="form-control" name="phone" aria-describedby="phoneHelp" placeholder="Telefono numeris" maxlength="14" wire:model="phone">
            @error('phone') <span class="text-danger small error">{{ $message }}</span> @enderror
        </div>
        <div class="text-center pb-3">
            <button  type="submit" name="submit" class="btn btn-primary ml-2 col-5" >Registruoti</button>
        </div>
    </form>
</div>
