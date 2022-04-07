<div class="bg-white f-small mb-4">
    <form wire:submit.prevent="submitStovyklaForm" class="p-3">

        @csrf

        <div>
            @if (session()->has('message'))
                <div class="alert h4 alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="input-group p-3">
            <div class="input-group-append">
                <label class="input-group-text" for="pamaina">Stovyklos pamaina</label>
            </div>
            <select class="form-control" name="pamaina" id="pamaina" wire:model="pamaina">
                <option value="-1">Pasirinktite pamainą</option>
                <option value="1. Birželio 20d.">1. Birželio 20d. - 23d.</option>
                <option value="2. Birželio 27d.">2. Birželio 27d. - Liepos 1d.</option>
                <option value="3. Liepos 4d.">3. Liepos 4d. - 8d.</option>
                <option value="4. Liepos 11d.">4. Liepos 11d. - 15d.</option>
                <option value="5. Liepos 18d.">5. Liepos 18d. - 22d.</option>
                <option value="6. Liepos 25d.">6. Liepos 25d. - 29d.</option>
                <option value="7. Rugpjūčio 1d.">7. Rugpjūčio 1d. - 5d.</option>
                <option value="8. Rugpjūčio 8d.">8. Rugpjūčio 8d. - 12d.</option>
                <option value="9. Rugpjūčio 16d.">9. Rugpjūčio 16d. - 19d.</option>
                <option value="10.	Rugpjūčio 22d.">10. Rugpjūčio 22d. - 26d.</option>
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
                <select class="form-control" name="metai" id="metai" wire:model="age">
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
                <select class="form-control" name="plaukti" id="plaukti" wire:model="swim">
                    <option value="gerai" selected>Gerai</option>
                    <option value="silpnai">Silpnai</option>
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