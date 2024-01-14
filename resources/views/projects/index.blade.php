@extends('layouts.layout')

@section('title', $page)

@section('content')
    <div class="container-fluid h-100 p-3 d-flex flex-column">
        @component('partials.page_title')
            @slot('title')
                <span> {{ $page }} </span>
                <span class="fw-lighter">Management</span>
            @endslot
        @endcomponent
    </div>
@endsection
