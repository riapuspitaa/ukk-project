<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
</head>
<body>

<div>
    <a href="{{ route('data.create') }}"> Add Data</a>
</div>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>No. Telp</th>
        <th>Instansi</th>
    </tr>
    @foreach ($data as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->no_telp }}</td>
        <td>{{ $data->instansi }}</td>
        <td>
            <form action="{{ route('data.destroy',$data->id) }}" method="POST">
                <a href="{{ route('data.edit',$data->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>