<div class="data-table col mx-auto mt-4 mb-4">

    <div class="">
        
        <table class="text-dark w-100">
            @foreach ($lines as $line)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $line->name }} {{ $line->surname }}</td>
                    <td class="text-center">{{ $line->division->division }} {{ $line->gender->gender }}</td>   
                </tr>
            @endforeach
        </table>

        <div style="justify-content:center; display:flex; background-image: linear-gradient(to right, #2f78a8, #114161);">
            {!! $lines->links() !!}  
        </div>

    </div>
    
</div>
