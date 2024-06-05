@extends('layouts.app')

@section('content')
    <div class="mx-5">
        <h1 class="font-weight-bold">List of Borrowed Books</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Category</th>
                    </tr>

                    @foreach ($borrowedBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $borrowedBooks->links() }}
            </div>
        </div>

        <h1 class="font-weight-bold my-3">List of Available Books</h1>
        <a href="{{ route('book.create') }}" class="btn btn-dark">Add book</a>
        
        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($availableBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                            <td><a href="{{ route('book.show', $book) }}" class="btn btn-dark">Show</a></td>
                        </tr>
                    @endforeach
                </table>
                {{ $availableBooks->links() }}
            </div>
        </div>



        

    </div>
@endsection
