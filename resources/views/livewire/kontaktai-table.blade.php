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
    
            @foreach ($lines2 as $line2)
                <tr>
                    <td class="border px-4 py-2">{{ $line2->id }}</td>
                    <td class="border px-4 py-2">{{ $line2->name }}</td>
                    <td class="border px-4 py-2">{{ $line2->email }}</td>
                    <td class="border px-4 py-2">{{ $line2->message }}</td>
                    <td class="border px-4 py-2">{{ $line2->created_at }}</td>
                    
                </tr>
            @endforeach
    
        </table>
        {!! $lines2->links() !!}
    </div>
    
</div>
