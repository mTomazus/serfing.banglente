<div class="data-table vh-92">

    <div class="col-11 mx-auto mt-4">

        <h2 class="mb-4">STOVYKLOS FORMA</h2>
        
        <table>
        
            <tr>
                <th class="px-4 py-2">Pamaina</th>
                <th class="px-4 py-2">Vardas</th>
                <th class="px-4 py-2">Pavardė</th>
                <th class="px-4 py-2">Amžius</th>
                <th class="px-4 py-2">Adresas</th>
                <th class="px-4 py-2">Telefonas</th>
                <th class="px-4 py-2">El.paštas</th>
                <th class="px-4 py-2">Sukurta</th>
            </tr>
    
            @foreach ($lines3 as $line3)
                <tr>
                    <td class="border px-4 py-2">{{ $line3->pamaina }}</td>
                    <td class="border px-4 py-2">{{ $line3->name }}</td>
                    <td class="border px-4 py-2">{{ $line3->surname }}</td>
                    <td class="border px-4 py-2">{{ $line3->age }}</td>
                    <td class="border px-4 py-2">{{ $line3->address }}</td>
                    <td class="border px-4 py-2">{{ $line3->phone }}</td>
                    <td class="border px-4 py-2">{{ $line3->email }}</td>
                    <td class="border px-4 py-2">{{ $line3->created_at }}</td>
                    
                </tr>
            @endforeach
        
        </table>

        {!! $lines2->links() !!}

    </div>
    
</div>
