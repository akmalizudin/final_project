@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {{-- TEST --}}

                <div class="row row-cols-1 row-cols-md-5 g-4 mt-4">
                    {{-- one card --}}
                    <div class="col">
                        <div class="card" >
                            <a href="{{ route('volunteer.index') }}"><img src="/volunteer.png" class="card-img-top p-5" alt="volunteers"></a>
                            <div class="card-body" style="background-color: #f4f2ea">
                                <h3><a href="{{ route('volunteer.index') }}" class="card-title link-opacity-50-hover"><b>Volunteers</b></a></h3>
                                <p class="card-text">Click here to view a list of all volunteers</p>
                            </div>
                        </div>
                    </div>
                    {{-- card ends --}}

                    {{-- one card --}}
                    <div class="col">
                        <div class="card">
                            <a href="{{ route('supervisor.index') }}"><img src="/supervisor.png" class="card-img-top p-5" alt="volunteers"></a>
                            <div class="card-body" style="background-color: #f4f2ea">
                                <h3><a href="{{ route('supervisor.index') }}" class="card-title link-opacity-50-hover"><b>Supervisors</b></a></h3>
                                <p class="card-text">Click here to view a list of all supervisors</p>
                            </div>
                        </div>
                    </div>
                    {{-- card ends --}}

                    {{-- one card --}}
                    <div class="col">
                        <div class="card">
                            <a href="{{ route('member.index') }}"><img src="/member.png" class="card-img-top p-5" alt="volunteers"></a>
                            <div class="card-body" style="background-color: #f4f2ea">
                                <h3><a href="{{ route('member.index') }}" class="card-title link-opacity-50-hover"><b>Members</b></a></h3>
                                <p class="card-text">Click here to view a list of all members</p>
                            </div>
                        </div>
                    </div>
                    {{-- card ends --}}

                    {{-- one card --}}
                    <div class="col">
                        <div class="card">
                            <a href="{{ route('book.index') }}"><img src="/books.png" class="card-img-top p-5" alt="volunteers"></a>
                            <div class="card-body" style="background-color: #f4f2ea">
                                <h3><a href="{{ route('book.index') }}" class="card-title link-opacity-50-hover"><b>Books</b></a>
                                </h3>
                                <p class="card-text">Click here to view a list of all available and borrowed books</p>
                            </div>
                        </div>
                    </div>
                    {{-- card ends --}}

                    {{-- one card --}}
                    <div class="col">
                        <div class="card">
                            <a href="{{ route('loan.index') }}"><img src="/loan.png" class="card-img-top p-5" alt="volunteers"></a>
                            <div class="card-body" style="background-color: #f4f2ea">
                                <h3><a href="{{ route('loan.index') }}" class="card-title link-opacity-50-hover"><b>Loans</b></a>
                                </h3>
                                <p class="card-text">Click here to view a list of all active and inactive loan records.</p>
                            </div>
                        </div>
                    </div>
                    {{-- card ends --}}
                </div>






                {{-- TEST END --}}


                {{-- Start card --}}
                {{-- <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Volunteers</div>
                    <div class="card-body">
                        <a href="{{ route('volunteer.index') }}" class="btn btn-primary">Go to Volunteers page</a>
                    </div>
                </div> --}}
                {{-- End card --}}

                {{-- Start card --}}
                {{-- <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Supervisors</div>
                    <div class="card-body">
                        <a href="{{ route('supervisor.index') }}" class="btn btn-primary">Go to Supervisor page</a>
                    </div>
                </div> --}}
                {{-- End card --}}

                {{-- Start card --}}
                {{-- <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Members</div>
                    <div class="card-body">
                        <a href="{{ route('member.index') }}" class="btn btn-primary">Go to Member page</a>
                    </div>
                </div> --}}
                {{-- End card --}}

                {{-- Start card --}}
                {{-- <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Books</div>
                    <div class="card-body">
                        <a href="{{ route('book.index') }}" class="btn btn-primary">Go to Book page</a>
                    </div>
                </div> --}}
                {{-- End card --}}

                {{-- Start card --}}
                {{-- <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Loans</div>
                    <div class="card-body">
                        <a href="{{ route('loan.index') }}" class="btn btn-primary">Go to Loan page</a>
                    </div>
                </div> --}}
                {{-- End card --}}

            </div>
        </div>
    </div>
@endsection
