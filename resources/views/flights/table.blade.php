<table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Airline</th>
                <th>Number of Seat</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flights as $flight)
                <tr>
                    <td>{{ $flight->id }}</td>
                    <td>{{ $flight->name }}</td>
                    <td>{{ $flight->airline }}</td>
                    <td>{{ $flight->number_of_seat }}</td>
                    <td>{{ $flight->price }}</td>
                    {{-- เพิ่มปุ่ม Edit/Delete ไว้เผื่ออนาคต --}}
                    <td>
                        <a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                    <form action="{{ route('flights.destroy', $flight->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
