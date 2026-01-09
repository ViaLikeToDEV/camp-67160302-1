<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Species</th>
                <th>Height</th>
                <th>Weight</th>
                <th>HP</th>
                <th>ATK</th>
                <th>DEF</th>
                <th>Img_url</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokedexs as $pokedex)
                <tr>
                    <td>{{ $pokedex->id }}</td>
                    <td>{{ $pokedex->name}}</td>
                    <td>{{ $pokedex->species }}</td>
                    <td>{{ $pokedex->height}}</td>
                    <td>{{ $pokedex->weight}}</td>
                    <td>{{ $pokedex->hp}}</td>
                    <td>{{ $pokedex->attack}}</td>
                    <td>{{ $pokedex->defense }}</td>
                    <td>{{ $pokedex->image_url }}</td>
                    {{-- <td>
                        <img src="{{ $pokedex->image_url }}" alt="{{ $pokedex->name }}" style="width: 100px; height: auto;">
                    </td> --}}
                    {{-- <form action="">
                    <button class="btn btn-primary"></button>
                    </form> --}}
x                    {{-- เพิ่มปุ่ม Edit/Delete ไว้เผื่ออนาคต --}}
                    <td>
                        <a href="{{ route('pokedexs.edit', $pokedex->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                    <form action="{{ route('pokedexs.destroy', $pokedex->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
