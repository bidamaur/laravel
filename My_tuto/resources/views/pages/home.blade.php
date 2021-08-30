@extends('app')
@section('title','WELCOME | GREEN')
@section('content')
 <center>
    <label class="text-4xl" >HALLO WORD I'M HAPY TO BE THERE  </label>
<p><small>this is a time <a href={{route('ab')}}>About</a> </small></p>    

{{config('project.slogan')}}

<img src= {{asset("./img/livre.jpg")}} class="rounded shadow-md">
</center>
@endsection

