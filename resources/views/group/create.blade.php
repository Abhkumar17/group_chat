@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/group/create">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Group name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> <br>

                        <div class="form-group row mb-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create a group
                                </button>
                            </div>
                        </div>
                    </form>

                   
                    <!-- <div id="save-group">
                      <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Group name</label>

                            <div class="col-md-6">
                                <input id="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> <br>

                        <div class="form-group row mb-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="save" class="btn btn-primary">
                                    Create a group
                                </button>
                            </div>
                        </div>
                    </div> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
<!-- <script>
	$(document).ready(function(){
		$(document).on('click','#save',function(){
			var name = $("#name").val();
            var _token = $('input[name="_token"]').val();
            $.ajax({              
            url: "{{ url('/group/create')}}",
            type: 'post',
            data:{name:name, _token:_token},
            dataType: 'json',
            success: function(data) {
                
                if($.isEmptyObject(data.error)){
                    alert(data.success);
                    location.reload();
                }else{
                    printErrorMsg(data.error);
                }
            }
         });	
	});
});
	
</script> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
