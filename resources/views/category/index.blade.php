@extends('layouts.utama')
 
@section('title', 'Selamat Datang')
 
@section('sidebar')
    @parent
    <br>
    Back to Home
@endsection


@section('content')


@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert">&times;</button>
    <p>{{ $message }}</p>
</div>
@endif
<div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('category.create') }}"> Tambahkan Kategori Baru</a>
</div>

<table class="table table-hover">
        <tr>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($category as $ct)
        <tr>
            <td>{{$ct->category_name}}</td>
            <td>
            <form action="{{ route('category.delete',$ct->id) }}" method="POST">
                <a href="{{route('category.show',['id'=>$ct->id])}}" class="btn btn-sm btn-info">Detail</a>
                <a href="{{route('category.edit',['id'=>$ct->id])}}" class="btn btn-sm btn-warning">Ubah</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
            </form>
        </td>

        </tr>
        @endforeach
    </table>
    
    <!-- <div class="form-group">
        <a href="category-update"><button class="btn btn-primary">Tambah Category</button></a>
    </div> -->

@endsection
