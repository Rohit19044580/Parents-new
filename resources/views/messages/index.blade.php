@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left">
                <h4>School Communication</h4>
            </div>

        </div>

    </div>


    <div class="col-sm-12" style="background-color:white;padding:15px">
        <div class="mt-2" style="height:500px;overflow-y:auto;width:100%">
            @if($messages)

            <form method="POST" action="{{route('messages.store')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-4">


                        <input id="title" placeholder="Title" type="text" class="form-control " name="title" required
                            autocomplete="title" autofocus>

                    </div>
                    <div class="col-sm-6">


                        <input id="message" placeholder="Message" type="text"
                            class="form-control @error('message') is-invalid @enderror" name="message" required
                            autocomplete="message" autofocus>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <table class="table table-bordered mt-2 " style="margin-top:20px">
                <tr>

                    <th>User</th>
                    <th>Title</th>

                    <th>Message</th>






                    <th width="120px">Action

                    </th>
                </tr>
                @foreach ($messages as $message)
                <tr>

                    <td>{{ $message->user->email }}</td>
                    <td>{{ $message->title }}</td>
                    <td>{{ $message->message }} </td>






                    <td>
                        <form action="{{ route('messages.destroy',$message->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            @endif
            @if(!$messages)
            <h3>Select a chat to start conversation.</h3>

            @endif
        </div>
    </div>

</div>

@endsection