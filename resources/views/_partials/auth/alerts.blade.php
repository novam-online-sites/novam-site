@if (session('status') || session('success'))
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <strong class="float-left"><i class="fa fa-check-circle fa-lg"></i></strong>
    {{ session('status') ?? session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@elseif(session('warning') || session('error'))
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong class="float-left"><i class="fa fa-exclamation-triangle fa-lg"></i></strong>
    {{ session('warning') ?? session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
