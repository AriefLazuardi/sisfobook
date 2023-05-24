@extends('layouts.utama')


@section('title', 'Ubah Kategori')


@section('sidebar')
@parent


@endsection


@section('content')
<div class="row">


    <div class="col-md-6">


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


           <form action="{{route('category.update',['id'=>$category->id])}}" method="POST">
            @csrf
            @method('PUT')




            <div class="form-group">
                <label for="category_name">Nama Kategori</label>
                <input class="form-control" type="text" name="category_name" value="{{$category->category_name}}">
                @error('category_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input class="form-control" type="text" name="description" value="{{$category->description}}">
                @error('description')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-md btn-primary">Ubah</button>
            <a class="btn btn-md btn-danger" href="{{ route('category.index') }}">Batal</a>
        </form>
    </div>
</div>
@endsection
