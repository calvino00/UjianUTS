@extends('base')

@section('body')
<form action = "{{ route('utsSearch') }}" method = "get">
    <label>Search Name: </label> <input type="text" name = "keyword">
    <button type ="submit"> Search</button>
</form>
<button > <a href="{{ route('utsNewForm') }}">Add New</a> </button>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    @foreach ($uts as $uts)
    <tr>
        <td>{{$uts->id}}</td>
        <td>{{$uts->nama}}</td>
        <td>{{$uts->telepon}}</td>
        <td>{{$uts->email}}</td>
        <td>{{$uts->alamat}}</td>
        <td><a href="{{ route('utsDelete',['id' => $uts->id]) }}"onclick="return confirm('Are you sure?')">Delete</a> 
            <a href="{{ route('utsUpdate',['id' => $uts->id]) }}">Edit</a></td>
    
    </tr>
    @endforeach
</table>
@endsection