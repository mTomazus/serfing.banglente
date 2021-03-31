<div class="data-table vh-92">
    
    <div class="col-11 mx-auto mt-4">

        <h2 class="mb-4">PAMOKŲ FORMA</h2>
        
        <table>
        
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Paslauga</th>
                <th class="px-4 py-2">Data</th>
                <th class="px-4 py-2">Vardas</th>
                <th class="px-4 py-2">Adresas</th>
                <th class="px-4 py-2">Telefonas</th>
                <th class="px-4 py-2">El.paštas</th>
                <th class="px-4 py-2">Sukurta</th>
            </tr>
    
            @foreach ($lines as $line)
                <tr>
                    <td class="border px-4 py-2">{{ $line->id }}</td>
                    <td class="border px-4 py-2">{{ $line->paslauga }}</td>
                    <td class="border px-4 py-2">{{ $line->date }}</td>
                    <td class="border px-4 py-2">{{ $line->name }}</td>
                    <td class="border px-4 py-2">{{ $line->address }}</td>
                    <td class="border px-4 py-2">{{ $line->phone }}</td>
                    <td class="border px-4 py-2">{{ $line->email }}</td>
                    <td class="border px-4 py-2">{{ $line->created_at }}</td>
                    
                </tr>
            @endforeach
        
        </table>

        {!! $lines2->links() !!}
        
    </div>
    
</div>
