<div class="data-table vh-92">

    <div class="col-10 mx-auto mt-4">

        <h2>KONTAKTAI</h2>

        <table>
        
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Vardas</th>
                <th class="px-4 py-2">El.paštas</th>
                <th class="px-4 py-2">Žinutė</th>
                <th class="px-4 py-2">Sukurta</th>
            </tr>
    
            @foreach ($lines as $line)
                <tr>
                    <td class="border px-4 py-2">{{ $line->id }}</td>
                    <td class="border px-4 py-2">{{ $line->name }}</td>
                    <td class="border px-4 py-2">{{ $line->email }}</td>
                    <td class="border px-4 py-2">{{ $line->message }}</td>
                    <td class="border px-4 py-2">{{ $line->created_at }}</td>
                    
                </tr>
            @endforeach
    
        </table>
        {!! $lines->links() !!}
    </div>
    
</div>
