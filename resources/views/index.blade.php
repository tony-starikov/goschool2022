@extends('master')

@section('title', 'Welcome to club!')

@section('main')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Welcome to the club!</h1>

            <form method="POST" class="w-50 mx-auto my-2" action="{{ route('store') }}">
                @csrf

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Name</span>
                    </div>
                    <input type="text" name="name" id="name" class="form-control" placeholder="REQUIRED" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">Email</span>
                    </div>
                    <input type="text" name="email" id="email" class="form-control" placeholder="UNIQUE" aria-describedby="addon-wrapping">
                </div>

                <button type="submit" class="btn btn-success mt-3">Add</button>
            </form>

            <h2>
                Members
            </h2>

            @if(count($users) != 0)

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Registration date</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($users as $user)

                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ date("Y-m-d G:i:s", $user->time)  }}</td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

            @else

                <h2>
                    No users in the list.
                </h2>

            @endif
        </div>




    </div>
</div>

@endsection
