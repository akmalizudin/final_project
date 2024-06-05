@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {{-- start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #9ceaef">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
                {{-- End card --}}


                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Volunteers</div>
                    <div class="card-body">
                        <a href="{{ route('volunteer.index') }}" class="btn btn-primary">Go to Volunteers page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Supervisors</div>
                    <div class="card-body">
                        <a href="{{ route('supervisor.index') }}" class="btn btn-primary">Go to Supervisor page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Members</div>
                    <div class="card-body">
                        <a href="{{ route('member.index') }}" class="btn btn-primary">Go to Member page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Books</div>
                    <div class="card-body">
                        <a href="{{ route('book.index') }}" class="btn btn-primary">Go to Book page</a>
                    </div>
                </div>
                {{-- End card --}}

                {{-- Start card --}}
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #c4fff9">Loans</div>
                    <div class="card-body">
                        <a href="{{ route('loan.index') }}" class="btn btn-primary">Go to Loan page</a>
                    </div>
                </div>
                {{-- End card --}}

            </div>
        </div>
    </div>
@endsection
