<div>
    @if ($images)
        Photo Preview:
        <div class="d-flex row">
        @foreach ($images as $image)
            <img class="col-3" src="{{ $image->temporaryUrl() }}">
        @endforeach
    @endif    

    @error('images.*') <span class="error">{{ $message }}</span> @enderror
    
    <div class="bg-light p-3">
        <div class="mb-3">Gallery images</div>
        <form class="input-group" wire:submit.prevent="uploadImages">
            <input type="file" class="form-control" id="inputGroupFiles" aria-describedby="inputGroupFileAddon" aria-label="Upload" wire:model="images" multiple>
            <button type="submit" class="btn btn-outline-secondary"  id="inputGroupFileAddon">Upload</button>
        </form>
    </div>
</div>
