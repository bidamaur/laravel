@extends('app',["pageTitle"=>"WELKOME TO GREEN"]);
@section('content')
 <center>
    <label  >HALLO WORD I'M HAPY TO BE THERE </label>
<p><small>this is a time <a href={{route('ab')}}>About</a> </small></p>    

{{config('project.slogan')}}

<img src="{{asset("img/livre.jpg")}}" >
</center>
@endsection

