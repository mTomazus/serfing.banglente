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

    </div>
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

    </div>
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
