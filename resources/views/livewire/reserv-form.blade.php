<div>

    <div class="container bg-def shadow py-2">

        <h2 class="">REZERVACIJOS</h2>

        <div class="mb-4">
            @foreach ($reservs as $reserv)
                <div class='btn-group w-100 mb-1 flex-column flex-sm-row'>
                    <span class="fw-bold btn btn-info">{{ $reserv->number }}</span>
                    <span class="btn btn-light" style='word-wrap:anywhere'>{{ $reserv->name }}</span>
                    <span class="fw-bold btn btn-success">{{ $reserv->service }}</span>
                    <span class="fw-bold btn btn-secondary">{{ $reserv->date }} {{ $reserv->time }}</span>
                </div>
            @endforeach
        </div>

        <form wire:submit.prevent="submitReserv" class="coupon-form"> 

            @csrf

            <div class="col-10 mx-auto">
                
                <select class="form-select" name="pamoka" wire:model="service">
                    <option value="-1">pamokos tipas...</option>
                    <option value="pamokų paketas">Pamokų paketas</option>
                    <option value="privati pamoka">Privati pamoka</option>
                    <option value="grupinė pamoka">Grupinė pamoka</option>
                    <option value="pamoka dviem">Pamoka dviem</option>
                    <option value="individuali plius">Individuali +</option>
                </select>                          
                
            </div>

            <div class="row my-3 mx-auto col-9">
                <input type="text" name="name" class="form-control" placeholder="Vardas Pavardė" aria-label="Full Name" wire:model="name">
                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="row my-3 mx-auto col-8">
                <input type="tel" name="number" class="form-control" placeholder="Telefonas" wire:model="number">
                @error('number') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>   

            <div class="row input-group w-90 mx-auto my-3">     

                    <input type="date" name="date" id="floatingInput4" class="form-control" placeholder="Data" wire:model="date">
                    @error('date') <span class="text-danger small">{{ $message }}</span> @enderror

                    <input type="time" name="time" id="floatingInput3" class="form-control" placeholder="Laikas" wire:model="time">
                    @error('time') <span class="text-danger small">{{ $message }}</span> @enderror
               
            </div>

            <div class="my-3 col-auto text-center mb-3">
                <button type="submit" class="btn btn-primary ">SUBMIT</button>
            </div>

        </form>

    </div>

</div>
