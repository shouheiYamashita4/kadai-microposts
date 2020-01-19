@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to Microposts</h1>
            {!! link_to_route('signup.get', 'Sing Up Now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection