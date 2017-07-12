@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('success'))
  <div class="alert alert-success" role="alert">
    <div class="container">
        <div class="alert-icon">
          <span class="nc-like-2"></span>
            <i class="now-ui-icons ui-2_like"></i>
        </div>
        <strong>Well done!</strong> You successfully read this important alert message.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
        </button>
    </div>
    </div>
@endif

@if(session('error'))
  <div class="alert alert-danger" role="alert">
    <div class="container">
        <div class="alert-icon">
            <i class="now-ui-icons ui-2_like"></i>
        </div>
        <strong>Well done!</strong> You successfully read this important alert message.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
        </button>
    </div>
    </div>
@endif
