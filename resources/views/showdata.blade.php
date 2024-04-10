@extends('layouts.main')
@section('contain')
    <ul>
        <li>Nama : {{ $data['name'] }}</li>
        <li>Title : {{ $data['title'] }}</li>
        <li>Email : {{ $data['email'] }}</li>
    </ul>
@endsection
