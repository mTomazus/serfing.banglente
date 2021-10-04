<div class="data-table vh-92">

    <div class="col-11 mx-auto mt-4">

        <h2 class="mb-4">STOVYKLOS FORMA</h2>
        
        <table>
        
            <tr>
                <th class="px-4 py-2">Pamaina</th>
                <th class="px-4 py-2">Stovyklautojas</th>
                <th class="px-4 py-2">Amžius</th>
                <th class="px-4 py-2">Telefonas</th>
            </tr>
    
            @foreach ($lines as $line)
                <tr>
                    <td class="border px-4 py-2">{{ $line->pamaina }}</td>
                    <td class="border px-4 py-2">{{ $line->name }} {{ $line->surname }}</td>
                    <td class="border px-4 py-2">{{ $line->age }} metai</td>
                    <td class="border px-4 py-2">{{ $line->phone }}</td>             
                </tr>
            @endforeach
        
        </table>

        {!! $lines->links() !!}

    </div>
    
</div>
