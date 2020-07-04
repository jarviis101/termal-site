@php
    $page = \App\Http\Controllers\PageController::get_meta_tags(Request::path());
@endphp
@extends('layouts.layout', [
    'title' => $page->title,
    'meta_title' => $page->meta_title,
    'meta_description' => $page->meta_description
])
@section('content')
    <h1>Home</h1>
@endsection
