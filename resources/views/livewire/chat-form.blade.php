<div>
    <div class="mx-auto">
        <form wire:submit.prevent="submitChat" class="col-12 mx-auto p-3">
    
            @csrf
            @auth
                <div class="form-group d-flex">
                    <textarea class="form-control" id="exampleInputbody" placeholder="Rašykite savo žinutę" rows="1" wire:model="message"></textarea>
                    <input type="hidden" wire:model="name">
                    <input type="hidden" wire:model="user_id">    
                    <button type="submit" class="btn btn-info">Siųsti</button>
                </div>
                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
            @endauth
            <div class="">
                @foreach ($lines as $line)
                    <div class='bg-white'>
                        <div><span class="ms-2 fw-bold text-info float-start">{{ $line->name }}: </span><span style='word-wrap:anywhere'>{{ $line->message }}</span></div>
                    </div>
                @endforeach
                </div>
        </form>
        
    </div>