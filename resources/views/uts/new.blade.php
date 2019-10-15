@extends('base')

@section('body')
    <form action="{{ route('utsCreate') }}" method="post">
        @csrf
        <div>
            <label>Nama : </label>
            <input type="char" name="nama">
        </div>
        <div>
            <label>Telepon : </label>
            <input type="char" name="telepon">
        </div>
        <div>
            <label>Email : </label>
            <input type="char" name="email">
        </div>
        <div>
            <label>Alamat : </label>
            <input type="char" name="alamat">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
@endsection