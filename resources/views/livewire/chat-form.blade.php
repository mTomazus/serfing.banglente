<div>
    <div class="mx-auto">
        <form wire:submit.prevent="submitChat" class="col-12 mx-auto p-3">
    
            @csrf
            @auth
                <div class="input-group mb-2">
                    <input class="form-control" type="text" placeholder="Rašykite savo žinutę" wire:model="message">
                    <input type="hidden" wire:model="name">
                    <input type="hidden" wire:model="user_id">    
                    <button type="submit" class="btn btn-primary">Siųsti</button>
                </div>
                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
            @endauth
            <div class="chat-box" style="max-height: 550px; overflow-y: clip;">
                @foreach ($lines as $line)
                    @if ($loop->even)
                        <div class='btn-group w-100 mb-1'>
                            <span class="fw-bold btn btn-info">{{ $line->user_id }}</span>
                            <span class="btn btn-light w-100" style='word-wrap:anywhere'>{{ $line->message }}</span>
                        </div>
                    @elseif ($loop->odd)
                        <div class='btn-group w-100 mb-1'>
                            <span class="btn btn-light w-100" style='word-wrap:anywhere'>{{ $line->message }}</span>
                            <span class="fw-bold btn btn-success">{{ $line->user_id }}</span>
                        </div>
                    @endif
                @endforeach
                </div>
        </form>
        
    </div>