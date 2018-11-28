@extends('front.index')
@section('content')
    <layout :user="{{ json_encode(auth()->user()) }}"></layout>
@endsection