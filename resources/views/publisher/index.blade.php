@extends('layouts.utama')
 
@section('title', 'Selamat Datang')
 
@section('sidebar')
    @parent
    <br>
    Back to Home
@endsection


@section('content')


    <ul>
        <?php foreach ($publisher as $pb) { ?>
            <li><?php echo $pb->publisher_name ?></li>
        <?php } ?>
    </ul>
@endsection
