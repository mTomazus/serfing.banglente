<div>

    <div class="container bg-def shadow py-2">

        <h2 class="">KUPONAI</h2>

        <div class="mb-4">
            @foreach ($coups as $coup)
                <div class="btn-group w-100 flex-column mb-1 flex-sm-row">
                    <span class="fw-bold btn btn-info">{{ $coup->number }}</span>
                    <span class="btn btn-light" style='word-wrap:anywhere'>{{ $coup->name }}</span>
                    <span class="fw-bold btn btn-success">{{ $coup->price }}€</span>
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                    </div>
                </div>
            @endforeach
        </div> 

        <form wire:submit.prevent="submitCoupon" class="coupon-form"> 

            @csrf

            <div class="col-10 mx-auto">
                
                <select class="form-select" name="pamoka" wire:model="service">
                    <option value="-1">pasirinkite kuponą...</option>
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
                <input type="email" name="email" class="form-control" placeholder="Elektroninis paštas" wire:model="email">
                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>   

            <div class="row col-10 mx-auto my-3">
                <div class="col-5">
                    <input type="text" name="price" class="form-control" id="floatingInput" placeholder="Kaina" wire:model="price">
                    @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
                <div class="col-7">
                    <input type="text" name="number" id="floatingInput2" class="form-control" placeholder="Kupono nr." wire:model="number">
                    @error('number') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="my-3 col-auto text-center mb-3">
                <button type="submit" class="btn btn-primary ">SUBMIT</button>
            </div>

        </form>

    </div>

</div>