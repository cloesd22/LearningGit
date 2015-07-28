@extends('baseframe')

@section('content')

 @foreach($Egle as $Egle)
     <a href="{{action('EgleController@starter',[$Egle->id])}}"> <h1>Egle's Sayings</h1></a>

     <p>{{$Egle->leaf}}</p>
    <p>{{$Egle->branch}}</p>
    <p>{{$Egle->sayings}}</p>


 @endforeach


@stop