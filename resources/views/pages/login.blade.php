@extends('baseframe')

@section('content')

    <div ng-app="">
        <p>Name : <input type="text" ng-model="name"></p>
        <div class="fancylaratext">Hello @{{name}}</div>
    </div>

@stop

