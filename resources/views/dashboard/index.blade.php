@extends('layouts.layout')

@section('title', $page)

@section('content')
    <div class="container-fluid p-3">
        @component('partials.page_title')
            @slot('title')
                <span> {{ $page }} </span>
                <span class="fw-lighter">Management</span>
            @endslot
        @endcomponent
        <div class="row m-0 mt-4">
            <div class="col-2">
                <div class="card bg-secondary-subtle">
                    <div class="card-body sr-shadow wg-h-400 d-flex flex-column">
                        <h5 class="card-title border-bottom pb-3">Working Hours</h5>
                        <div class="text-secondary">
                            started time: 8:00 AM
                        </div>
                        <div style="font-size: 100px " class="flex-grow-1">
                            6.5 <span style="" class="text-secondary fs-4">HR</span>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-danger rounded-pill">
                               <i class="fa fa-clock"></i> Clock Out
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body sr-shadow wg-h-400 d-flex flex-column">
                        <h5 class="card-title border-bottom pb-3">Upcoming Meeting</h5>
                        <ol class="list-group list-group-numbered border-0 flex-grow-1">
                            <li class="list-group-item d-flex justify-content-between align-items-start border-0 border-bottom">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Daily Scrum Meeting</div>
                                    JP Morgan, Rockfeller, Ford Henry
                                </div>
                                <span class="badge bg-purple-extra-light rounded-pill text-purple">10:30 AM</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start border-0 border-bottom">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Pagination Update Status</div>
                                    Sok Chanrithy, Sok Sophea, Sok Sopheap
                                </div>
                                <span class="badge bg-purple-extra-light text-purple rounded-pill">1:00 PM</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start border-0">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Monthly Product Demo</div>
                                    All Team Members
                                </div>
                                <span class="badge bg-purple-extra-light text-purple rounded-pill">4:00 PM</span>
                            </li>
                        </ol>
                        <div class="text-end mt-2">
                            <a href="#" class="btn btn-outline-secondary rounded-pill">
                                <i class="fa fa-calendar me-1"></i>
                                More Meeting
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-warning-subtle">
                    <div class="card-body sr-shadow wg-h-400 overflow-y-scroll d-flex flex-column ">
                        <h5 class="card-title border-bottom pb-3 ">Recent Activities</h5>
                        <p class="card-text flex-grow-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="text-end mt-2">
                            <a href="#" class="btn btn-outline-secondary rounded-pill">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0 mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body sr-shadow wg-h-400 d-flex flex-column">
                        <h5 class="card-title pb-3 ">Recent Tasks</h5>
                        <div class="h-100 w-100" id="grid"></div>
                        <div class="text-end mt-3">
                            <a href="{{route("tasks.index")}}" class="btn btn-outline-secondary rounded-pill">
                                <i class="fa fa-tasks me-1"></i>
                                More Tasks
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    @vite('resources/views/dashboard/dashboard.js')
@endsection

