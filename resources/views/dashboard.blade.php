@extends('layouts.main')
@section('content')
<div class="container">
    <div class="my-2">
        <span class="h2">Dashboard</span>
        <form method="POST" action="{{ route('logout') }}" class="float-right">
            @csrf
            <button type='submit' class="btn bt-primary">LOGOUT</button>
        </form>
    </div>
    <hr>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Welcome</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="project-tab" data-toggle="tab" href="#project" role="tab" aria-controls="project"
                aria-selected="false">Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"
                aria-selected="false">Messages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings"
                aria-selected="false">Settings</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane" id="project" role="tabpanel" aria-labelledby="project-tab">
            @include('content.clients.timeline')
        </div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
    </div>
</div>
@endsection
