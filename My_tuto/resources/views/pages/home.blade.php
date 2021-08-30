@extends('app')
@section('title','WELCOME | GREEN')
@section('content')
 <center>
    <h1 >HALLO WORD I'M HAPY TO BE THERE  </h1>
<p><small>this is a time <a href={{route('ab')}}>About</a> </small></p>    
</center>
{{config('project.slogan')}}


@endsection

