@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code')
    <img src="{{ asset('plugins/images/Global/SeekPng.com_404-png_8254341.png') }}" width="500" alt="not-found">
@endsection
@section('message', __('Not Found'))
