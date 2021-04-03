<div class="data-table vh-92">

    <div class="col-10 mx-auto mt-4">

        <h2 class="col-12">KONTAKTAI</h2>
        <div class="d-flex flex-wrap justify-content-between my-3">
            @foreach ($lines as $line)
                <div class='col-lg-3 mx-1 mb-3 container bg-white border border-dark'>
                    <div class="row p-2">
                        <div class="col-3 d-flex"><h2>{{ $line->id }}</h2></div>
                        <div class="col-9">
                            <div>{{ $line->name }}</div>
                            <div>{{ $line->email }}</div>
                            <div>{{ $line->created_at }}</div>
                        </div>
                    </div>
                    <div class="h5 p-2">{{ $line->message }}</div>
                </div>
            @endforeach
        </div>
        
        {!! $lines->links() !!}
    </div>
    
</div>
