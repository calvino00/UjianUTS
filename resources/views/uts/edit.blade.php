@extends('base')

@section('body')
    <form action="{{ route('utsUpdate',['id'=>$uts->id]) }}" method="post">
        @csrf
        <div>
            <label>Nama : </label>
            <input type="char" name="nama" value="{{$uts->nama}}">
        </div>
        <div>
            <label>Telepon : </label>
            <input type="char" name="telepon" value="{{$uts->telepon}}">
        </div>
        <div>
            <label>Email : </label>
            <input type="char" name="email" value="{{$uts->email}}">
        </div>
        <div>
            <label>Alamat : </label>
            <input type="text" name="alamat" value="{{$uts->alamat}}">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
@endsection