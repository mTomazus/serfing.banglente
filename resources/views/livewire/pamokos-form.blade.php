<div>
    <form wire:submit.prevent="submitPamokosForm" class="pamokos-form"> 

        @csrf

        <div class="mt-0">
            @if (session()->has('message'))
                <div class="alert h4 alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="row align-items-center wi-80">
            <div>
                <select class="form-select" name="pamoka" wire:model="paslauga">
                    <option value="-1">pasirinkite jūs dominančią paslaugą...</option>
                    <option value="pamokų paketas">Pamokų paketas</option>
                    <option value="privati pamoka">Privati pamoka</option>
                    <option value="grupinė pamoka">Grupinė pamoka</option>
                    <option value="pamoka dviem">Pamoka dviem</option>
                    <option value="individuali plius">Individuali +</option>
                </select>                          
            </div>
        </div>
        <div class="input-group wi-80">
            <span class="input-group-text" id="basic-date">pageidaujama data nuo...</span>
            <input type="date" class="form-control" id="basic-date" aria-describedby="basic-date" placeholder="2021-06-22" wire:model="date">
        </div>
        @error('date') <span class="text-danger small error">{{ $message }}</span> @enderror
        <div class="row col-7">
            <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Vardas Pavardė" aria-label="Full Name" wire:model="name">
            @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" name="address" class="form-control" id="zip" placeholder="Adresas" wire:model="address">
                @error('address') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
        </div>   
        <div class="row">
            <div class="col-5">
                <input type="tel" name="phone" class="form-control" id="floatingInput" placeholder="Telefono numeris" wire:model="phone">
                @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
            <div class="col-7">
                <input type="text" name="el. paštas" id="floatingInput" class="form-control" placeholder="Elektroninis paštas" wire:model="email">
                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-auto mb-3">
            <button type="submit" class="btn btn-primary ">REGISTRUOTI</button>
        </div>
    </form>
</div>