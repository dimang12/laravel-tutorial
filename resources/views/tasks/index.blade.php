@extends('layouts.layout')
@section('title', 'Tasks Page')

@section('content')
    <div class="container-fluid h-100 p-3 d-flex flex-column">
        @component('partials.page_title')
            @slot('title')
                <span> Tasks </span>
                <span class="fw-lighter">Management</span>
            @endslot
        @endcomponent
        <div class="row m-0 mt-4 flex-grow-1">
            <div class="col-12 h-100">
                <div class="card sr-shadow h-100">
                    <div class="card-body wg-h-400 pb-3 d-flex flex-column">
                        <h3 class="card-title pb-3">Tasks</h3>
                        <div id="grid" class="w-100 flex-grow-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/views/tasks/tasks.js')
@endsection
