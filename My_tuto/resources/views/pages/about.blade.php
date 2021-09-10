@extends('app',["pageTitle"=> 'About US'])
@section('title','About us')

@section('content')
 <center>
    <h1 >TO KNOW MORE ABOUT US  &middot; <span class="text-pnk-500">&hearts;</span> </h1>
<p><small>this is a time <a href='/' class="text-green-500 hover:text-yellow-200 underline">Home {{config('project.logan')}}</a></small></p>    

<img src={{asset('./img/ankh.webp')}} class="rounded shadow-md"></center>
@endsection
