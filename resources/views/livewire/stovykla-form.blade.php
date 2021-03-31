<div class="bg-white f-small mb-4">
    <form wire:submit.prevent="submitStovyklaForm" class="p-3">

        @csrf

        <div>
            @if (session()->has('message'))
                <div class="alert h4 alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="input-group p-3">
            <div class="input-group-append">
                <label class="input-group-text" for="pamaina">Stovyklos pamaina</label>
            </div>
            <select class="custom-select" name="pamaina" id="pamaina" wire:model="pamaina">
                <option value="-1">Pasirinktite</option>
                <option value="1. Birželio 14d.">1. Birželio 14d. - Birželio 18d.</option>
                <option value="2. Birželio 21d.">2. Birželio 21d. - Birželio 25d.</option>
                <option value="3. Birželio 28d.">3. Birželio 28d. -	Liepos 2d.</option>
                <option value="4. Liepos 5d.">4. Liepos 5d. - Liepos 9d.</option>
                <option value="5. Liepos 12d.">5. Liepos 12d. - Liepos 16d.</option>
                <option value="6. Liepos 19d.">6. Liepos 19d. - Liepos 23d.</option>
                <option value="7. Rugpjūčio 2d.">7. Rugpjūčio 2d. -	Rugpjūčio 6d.</option>
                <option value="8. Rugpjūčio 9d.">8. Rugpjūčio 9d. -	Rugpjūčio 13d.</option>
                <option value="9. Rugpjūčio 16d.">9. Rugpjūčio 16d. -	Rugpjūčio 20d.</option>
                <option value="10.	Rugpjūčio 23d.">10.	Rugpjūčio 23d. - Rugpjūčio 27d.</option>
            </select>
            @error('pamaina') <span class="text-danger small error">{{ $message }}</span> @enderror
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
        <div class="col-10 mx-auto mb-3">
            <input class="form-control" type="text" placeholder="Gyvenamoji vieta" aria-label="default input example" wire:model="address">
            @error('address') <span class="text-danger small error">{{ $message }}</span> @enderror
        </div>
        <div class="row mb-3 justify-content-around">
            <div class="input-group w-auto">
                <div class="input-group-append">
                    <label class="input-group-text" for="metai" aria-describedby="metai">Metai</label>
                </div>
                <select class="custom-select" name="metai" id="metai" wire:model="age">
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13" selected>13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="9">9</option>
                </select>
            </div>
            <div class="input-group w-auto">
                <div class="input-group-append">
                    <label class="input-group-text" for="plaukti" aria-describedby="plaukti">Plaukia:</label>
                </div>
                <select class="custom-select" name="plaukti" id="plaukti" wire:model="swim">
                    <option value="gerai" selected>Gerai</option>
                    <option value="silpnai">Silpnai</option>
                </select>
            </div>
        </div>
        <div class="col-9 mx-auto form-group mb-3">
            <input class="form-control" type="text" name="alergija" aria-describedby="alergija" placeholder="Ar alergiškas ir kam ?" wire:model="alergy">
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