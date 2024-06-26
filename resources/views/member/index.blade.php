@extends('layouts.app')
@section('content')
    <div class="mx-5">

        <h1 class="font-weight-bold mb-3">List of Members</h1>
        <a href="{{ route('member.create') }}" class="btn btn-dark">Register member</a>
            <div class="card card-body mt-4">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Ic Number</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->icNum }}</td>
                            <td>{{ $member->phoneNumber }}</td>
                            <td>{{ $member->address }}</td>
                            <td>{{ $member->email }}</td>
                            <td><a href="{{ route('member.show', $member) }}" class="btn btn-dark">Show</a></td>
                        </tr>
                    @endforeach
                </table>
                {{ $members->links() }}
            </div>

    </div>
@endsection
