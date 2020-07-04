@extends('layouts.layout', [
    'title' => $data->title,
    'meta_title' => $data->extras['meta_title'],
    'meta_description' => $data->extras['meta_description'],
    'meta_keywords' => $data->extras['meta_keywords'],
])
@section('content')
    <h1>Home</h1>
@endsection
