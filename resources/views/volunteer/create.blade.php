@extends('layouts.app')
@section('content')
    <div class="m-3">
        <h1 class="mx-5">Create Volunteer</h1>
        <h5 class="mx-5 mb-3">Please enter the volunteer's details</h5>

        <div class="card pt-3 pb-3">
            <form action="{{ route('volunteer.store') }}" method="POST">
                @csrf
                <div class="mx-5">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mx-5">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>

                <div class="mx-5">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3 mx-5">Submit</button>

            </form>
        </div>


    </div>
@endsection
