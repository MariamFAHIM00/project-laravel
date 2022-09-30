@if(session()->has("success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get("success")}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif

@if(session()->has("warning"))
        <div class="alert alert-warning alert-dismissible fade show">
            <strong>{{session()->get("warning")}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif

@if(session()->has("errorLink"))
        <div class="alert alert-danger">
            <strong>{!!session()->get("errorLink")!!}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif

@if(Session::has('successRegister'))
<div class="alert alert-success">
   <strong>{{Session::get('successRegister')}}</strong>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(session()->has("info"))
        <div class="alert alert-info alert-dismissible fade show">
            <strong>{{session()->get("info")}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif

