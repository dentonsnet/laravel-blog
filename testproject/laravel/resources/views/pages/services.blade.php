@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
        <p>this is an application from george about it all</p>
        <ul class="list-group">
        	@if (count($services) > 0)
        		@foreach($services as $service)
        			<li class="list-group-item">{{$service}}</li>
        		@endforeach
        	@endif
        </ul>
@endsection				