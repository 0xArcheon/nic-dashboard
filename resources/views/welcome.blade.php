@extends('layout')
@section('title', 'Dashboard')
@section('content')
    @auth
        <section class="pt-5"
            style="background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
">
            {{-- Statistic cards --}}
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card l-bg-cherry mb-3">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Total Entries</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{ $totalSchemes }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card l-bg-blue-dark mb-3">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Unique Schemes</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{ $uniqueSchemeCount }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card l-bg-green-dark mb-3">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Total Central Schemes</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{ $centralSchemesCount }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card l-bg-orange-dark mb-3">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Total State Schemes</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{ $stateSchemesCount }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of Cards --}}

            <div class="container pb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-5">
                            @if ($scheme->isEmpty())
                                <div class="text-center card-body">
                                    <p>No schemes found.</p>
                                    <div>You can start by importing a .xlxs file
                                        <a href="{{ route('import') }}"><u>Here</u></a>
                                    </div>
                                </div>
                            @else
                                <div class="card-body text-center">
                                    <h5 class="card-title m-b-0">Scheme Entries</h5>
                                </div>
                                <div class="table-responsive text-center">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Scheme Code</th>
                                                <th scope="col">Scheme Name</th>
                                                <th scope="col">Scheme Type</th>
                                                <th scope="col">Financial Year</th>
                                                <th scope="col">Total Disbursement(Rupees)</th>
                                            </tr>
                                        </thead>
                                        <tbody class="customtable">
                                            @foreach ($scheme as $item)
                                                <tr>
                                                    <td>{{ $item->scheme_code }}</td>
                                                    <td class="text-start">{{ $item->scheme_name }}</td>
                                                    <td>
                                                        @if ($item->central_state_scheme == 'central_scheme')
                                                            Central
                                                        @elseif ($item->central_state_scheme == 'state_scheme')
                                                            State
                                                        @else
                                                            {{ $item->central_state_scheme }}
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->fin_year }}</td>
                                                    <td class="text-end">{{ $item->total_disbursement }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endauth
@endsection
