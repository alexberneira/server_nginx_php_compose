@extends('layouts.main')

@section('title',"Usuario")
<!-- <link rel="stylesheet" type="text/css" href="resources\css\app.css" /> -->


@section('content')
<?php
//phpinfo();
?>
<main>
    @if(session('msg'))
    {{session('msg')}}
    @endif
</main>
<div class="flex-container">
    <!-- <div class="flex-item">1</div> -->
    <div class="flex-item item-color1">

       
    </div>
    <!-- <div class="flex-item">2</div> -->

</div>

@endsection