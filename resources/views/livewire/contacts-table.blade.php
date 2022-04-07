<div class="container-md">
    <h2 class="col-12 my-2">KONTAKTAI</h2>
    <div class="d-flex flex-wrap justify-content-between my-3">
        @foreach ($lines as $line)
            <div class='col-6 p-3'>
                <div class="m-2 p-2 d-flex">
                    <div class="col-6 fw-bold m-0 p-2 bg-white">
                        <div>{{ $line->name }}</div>
                        <div>{{ $line->email }}</div>
                        <div class="small">{{ $line->created_at }}</div>
                    </div>
                    <div class="col-6 m-0 p-2 h5 bg-light">{{ $line->message }}</div>
                </div>
            </div>
        @endforeach
    </div>    
    {!! $lines->links() !!}   
</div>
