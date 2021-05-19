<div>
    <h2 class="col-12">KONTAKTAI</h2>
    <div class="d-flex flex-wrap justify-content-between my-3">
        @foreach ($lines as $line)
            <div class='bg-white border w-100 p-1 mb-1'>
                <div class="row">
                    <div class="col-6">{{ $line->name }}</div>
                    <div class="col-6">{{ $line->email }}</div>
                    <div class="col-12 small">{{ $line->created_at }}</div>
                </div>
                <div class="h5 p-2">{{ $line->message }}</div>
            </div>
        @endforeach
    </div>    
    {!! $lines->links() !!}   
</div>
