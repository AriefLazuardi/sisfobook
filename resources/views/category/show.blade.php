@extends('layouts.utama')


@section('title', 'Detail Kategori')


@section('sidebar')
@parent


@endsection


@section('content')
<div class="row">


    <div class="col-md-6">
        <div class="pull-right mb-2">
            <a class="btn btn-success" href="{{ route('category.index') }}"> Kembali</a>
        </div>
        <ul>
            <li>Nama Kategori: {{$category->category_name}}</li>
            <li>Deskripsi: {{$category->description}}</li>
            <img src="{{asset('cover/'.$category->file_cover)}}" alt="image" width="200">
        </ul>
    </div>
</div>
@endsection

