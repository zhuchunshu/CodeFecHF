@extends("app")
@section('title', $title)
@section('headerBtn')
    @foreach($headerBtn as $value)
        @include($value)
    @endforeach
@endsection
@section('content')
    {!! $body !!}
@endsection
