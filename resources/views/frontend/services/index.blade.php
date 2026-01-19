@extends('layouts.frontend')





@section('content')
    @include('frontend.services.hero')
    @include('frontend.services.service')
    @include('frontend.services.price')
    @include('frontend.services.faq')
@endsection
