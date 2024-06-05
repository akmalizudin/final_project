@extends('layouts.app')
@section('content')
    <div class="px-3">
        <h1 class="mx-5">Create Loan</h1>
        <h5 class="mx-5 mb-3">Please enter the loan's details</h5>

        <div class="card pt-3 pb-3">

            <form action="{{ route('loan.store') }}" method="POST">
                @csrf

                <div class="mx-5">
                    <label for="book_id">Book ID</label>
                    <input type="text" name="book_id" class="form-control mb-2" required>
                </div>

                <div class="mx-5">
                    <label for="member_id">Member ID</label>
                    <input type="text" name="member_id" class="form-control mb-2" required>
                </div>

                <div class="mx-5">
                    <label for="borrowingDate">Borrowing Date</label>
                    <input type="date" name="borrowingDate" class="form-control mb-2" style="width: 30%" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3 mx-5">Submit</button>
            </form>
        </div>
    </div>
@endsection
