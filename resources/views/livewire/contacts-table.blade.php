<div>
    <h2 class="col-12">KONTAKTAI</h2>
    <div class="d-flex flex-wrap justify-content-between my-3">
        @foreach ($lines as $line)
            <div class='bg-white border d-flex col-4 p-1 m-1'>
                <div class="col-6">
                    <div>{{ $line->name }}</div>
                    <div>{{ $line->email }}</div>
                    <div class="small">{{ $line->created_at }}</div>
                </div>
                <div class="col-6 h5 p-1 m-1">{{ $line->message }}</div>
            </div>
        @endforeach
    </div>    
    {!! $lines->links() !!}   
</div>
