@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header">Add Message Information</div>

                <div class="card-body">
                    <form method="POST" action="{{route('messages.store')}}" enctype='multipart/form-data'>
                        @csrf

                        <div class="row">


                            <div class="col-md-6">
                                <label for="userId" class=" col-form-label ">{{ __('Select User') }}</label>


                                <select class="form-control" id="userId" class="form-control " name="userId" required
                                    autocomplete="userId" autofocus>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>

                                    @endforeach
                                </select>

                            </div>


                            <div class="col-md-6">
                                <label for="title" class="col-form-label ">{{ __('Title') }}</label>


                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>



                            </div>

                            <div class="col-md-6">
                                <label for="message" class="col-form-label ">{{ __('Message') }}</label>


                                <input id="message" type="text"
                                    class="form-control @error('message') is-invalid @enderror" name="message" required
                                    autocomplete="message" autofocus>



                            </div>
                            <div class="col-md-6">
                                <label for="status" class="col-form-label ">{{ __('Status') }}</label>


                                <input id="status" type="text"
                                    class="form-control @error('status') is-invalid @enderror" name="status"
                                    value="{{ old('status') }}" autocomplete="status" autofocus>

                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="col-md-12 text-right">
                                <div class="form-group row  mt-3">

                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>

                                </div>
                            </div>




                        </div>



                </div>






            </div>
            </form>
        </div>
    </div>

</div>
<script>
@endsection