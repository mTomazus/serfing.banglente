<div class="bg-white f-small mb-4">
    <form wire:submit.prevent="submitVarzybuForm" class="p-3">

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

        <div class="col-11 mx-auto row mb-3">
            <div class="col input-group w-auto">
                <div class="input-group-append">
                    <label class="input-group-text" for="gender" aria-describedby="gender">Sex</label>
                </div>
                <select class="form-control" name="gender" id="gender" wire:model="gender_id">
                    <option selected>choose one</option>
                    <option value="1">male</option>
                    <option value="2">female</option>
                </select>
                @error('gender_id') <span class="text-danger small error">{{ $message }}</span> @enderror
            </div>
            <div class="input-group w-auto">
                <div class="input-group-append">
                    <label class="input-group-text" for="pogrupis" aria-describedby="pogrupis">Division</label>
                </div>
                <select class="form-control" name="pogrupis" id="pogrupis" wire:model="division_id">
                    <option selected>choose one</option>
                    <option value="1">U-14</option>
                    <option value="2">U-16</option>
                    <option value="3">U-18</option>
                </select>
                @error('division_id') <span class="text-danger small error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-11 mx-auto row mb-3">
            <div class="input-group w-auto">
                <div class="input-group-append">
                    <label class="input-group-text" for="birthday" aria-describedby="birthday">Date of birth</label>
                </div>
                <input type="date" class="form-control" placeholder="Birth date" wire:model="date">
                @error('date') <span class="text-danger small error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group col-7 mb-3 mx-auto">                    
            <input class="form-control" type="email" name="email" aria-describedby="emailHelp" placeholder="E-mail" wire:model="email">
            @error('email') <span class="text-danger small error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col-5 mb-3 mx-auto">
            <input type="tel" class="form-control" name="phone" aria-describedby="phoneHelp" placeholder="phone number" maxlength="14" wire:model="phone">
            @error('phone') <span class="text-danger small error">{{ $message }}</span> @enderror
        </div>
        <div class="text-center pb-3">
            <button  type="submit" name="submit" class="btn btn-primary ml-2 col-5" >Register</button>
        </div>
    </form>
</div>

