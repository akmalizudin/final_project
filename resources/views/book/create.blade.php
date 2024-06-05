@extends('layouts.app')
@section('content')
    <div class="m-3">
        <h1 class="mx-5">Create Book</h1>
        <h5 class="mx-5 mb-3">Please enter the book's details</h5>

        <div class="card pt-3 pb-3">

            <form action="{{ route('book.store') }}" method="POST">
                @csrf

                <div class="mt-3 mx-5">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mt-3 mx-5">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" required>
                </div>

                <div class="mt-3 mx-5">
                    <label for="publisher">Publisher</label>
                    <input type="text" name="publisher" class="form-control" required>
                </div>

                <div class="mt-3 mx-5">
                    <label for="year">Year</label>
                    <input type="text" name="year" class="form-control" required>
                </div>

                <div class="mt-3 mx-5">
                    <label for="category">Category</label>
                    <input type="text" name="category" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3 mb-3 mx-5">Submit</button>

            </form>
        </div>
    </div>
@endsection
