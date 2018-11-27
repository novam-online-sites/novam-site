@extends('layouts.main')
@section('content')
<div class="my-3">
    <div class="container">
        <h1 class="h2">
            Dashboard
            <form method="POST" action="{{ route('logout') }}" class="float-right">
                @csrf
                <button type='submit' class="btn bt-primary">LOGOUT</button>
            </form>
        </h1>
    </div>
</div>
<hr>
<div class="container">
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
    <div class="tab-content border border-top-0 p-3">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h2 class="project-name text-uppercase">
                Welcome {{ auth()->user()->name }}
            </h2>
            <div class="row">
                <div class="col">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae doloribus sunt, nam
                        aspernatur similique molestias a officia deserunt animi nemo, totam, qui expedita maxime cum
                        eaque illum non consequuntur possimus!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae doloribus sunt, nam
                        aspernatur similique molestias a officia deserunt animi nemo, totam, qui expedita maxime cum
                        eaque illum non consequuntur possimus!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae doloribus sunt, nam
                        aspernatur similique molestias a officia deserunt animi nemo, totam, qui expedita maxime cum
                        eaque illum non consequuntur possimus!
                    </p>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="project" role="tabpanel" aria-labelledby="project-tab">
            <h2 class="project-name">PROJECT STATUS</h2>
            @include('content.clients.timeline')
        </div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                            aria-controls="v-pills-home" aria-selected="true">Write New</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                            aria-controls="v-pills-profile" aria-selected="false">Inbox</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                            aria-controls="v-pills-messages" aria-selected="false">Alerts</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Trash</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @include('forms.messages.create')
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Account Info
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3>Account Infornamtion</h3>
                                    @include('auth.forms.accnt', auth()->user())
                                </div>
                                <div class="col">
                                    <h3>Login Credentials</h3>
                                    @include('auth.forms.reset', auth()->user())
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Project Info
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">


                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Billing Info
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
