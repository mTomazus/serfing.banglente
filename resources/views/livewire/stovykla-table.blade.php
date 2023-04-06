<div class="data-table col-10 mx-auto mt-4">

    <div class="">
        
        <table>
            <tr>
                <th class="px-4 py-2 d-none d-md-block">Pamaina</th>
                <th class="px-4 py-2">Stovyklautojas</th>
                <th class="px-4 py-2 d-none d-md-block">Amžius</th>
                <th class="px-4 py-2">Telefonas</th>
            </tr>
    
            @foreach ($lines as $line)
                <tr>
                    <td class="border px-4 py-2 d-none d-md-block">{{ $line->pamaina }}</td>
                    <td class="border px-4 py-2">{{ $line->name }} {{ $line->surname }}</td>
                    <td class="border px-4 py-2 d-none d-md-block">{{ $line->age }} metai</td>
                    <td class="border px-4 py-2">{{ $line->phone }}</td>             
                </tr>
            @endforeach
        </table>

        <div>
            {!! $lines->links() !!}  
        </div>

    </div>
    
</div>
