@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card ">
                <div class="card-header">Add Parent Information</div>

                <div class="card-body">
                    <form method="POST" action="{{route('parents.store')}}" enctype='multipart/form-data'>
                        @csrf

                        <div class="row">




                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="col-form-label text-md-right">{{ __('Title') }}</label>


                                    <input id="title" type="text" class="form-control " name="title"
                                        autocomplete="title" autofocus>



                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName"
                                        class="col-form-label text-md-right">{{ __('First Name') }}</label>


                                    <input id="firstName" type="text" class="form-control " name="firstName"
                                        autocomplete="firstName" autofocus>



                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName"
                                        class="col-form-label text-md-right">{{ __('Last Name') }}</label>


                                    <input id="lastName" type="text" class="form-control " name="lastName"
                                        autocomplete="lastName" autofocus>



                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob" class="col-form-label text-md-right">{{ __('DOB') }}</label>


                                    <input id="dob" type="date" class="form-control " name="dob" required
                                        autocomplete="dob" autofocus>


                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address"
                                        class="col-form-label text-md-right">{{ __('Address') }}</label>


                                    <input id="address" type="text" class="form-control " name="address" required
                                        autocomplete="address" autofocus>



                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="postCode"
                                        class=" col-form-label text-md-right">{{ __('Post Code') }}</label>


                                    <input id="postCode" type="text" class="form-control" name="postCode" required
                                        autocomplete="postCode" autofocus>



                                </div>


                            </div>

                            <div class="col-md-4 ">

                                <div class="form-group">
                                    <label for="area" class=" col-form-label text-md-right">{{ __('Area') }}</label>


                                    <input id="area" type="text" class="form-control " name="area" required
                                        autocomplete="area" autofocus>



                                </div>


                            </div>

                            <div class="col-md-4">
                                <label for="studentId" class=" col-form-label ">{{ __('Select Student') }}</label>


                                <select class="form-control" id="studentId" class="form-control " name="studentId"
                                    required autocomplete="studentId" autofocus>
                                    @foreach ($students as $student)
                                    <option value="{{$student->id}}">{{$student->firstName}} {{$student->lastName}}
                                    </option>

                                    @endforeach
                                </select>

                            </div>


                            <div class="col-md-4">
                                <label for="userId" class=" col-form-label ">{{ __('Select User') }}</label>


                                <select class="form-control" id="userId" class="form-control " name="userId" required
                                    autocomplete="userId" autofocus>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}
                                    </option>

                                    @endforeach
                                </select>

                            </div>









                            <div class="col-md-12 text-right ">


                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Submit') }}
                                </button>


                            </div>
                        </div>

                </div>
            </div>
            </form>
        </div>
    </div>

</div>

@endsection