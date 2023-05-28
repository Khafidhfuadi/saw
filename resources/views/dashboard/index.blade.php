@extends('layouts/layouts')

@section('title', 'dashboard')

@push('styles')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/dashboard.js') }}"></script>
@endpush

@section('content')



<div class="row justify-content-end  mt-100">

    <div class="col-md-auto">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 5V31.6667C5 32.5507 5.35119 33.3986 5.97631 34.0237C6.60143 34.6488 7.44928 35 8.33333 35H35" stroke="#494848" stroke-width="1.66667" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M11.6667 23.3333L18.3333 16.6667L25 23.3333L35 13.3333" stroke="#494848" stroke-width="1.66667" stroke-miterlimit="5.759" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M30 13.3333H35V18.3333" stroke="#494848" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="col-md-auto align-self-center">
        <span class="heading-text">Dashboard</span>
    </div>

    <div class="col d-flex justify-content-end text-center">
        <div class="dropdown mons-600 fs-16">
            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                May 2023
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.5 0C3.775 0 4 0.223875 4 0.5V2H10V0.5C10 0.223875 10.225 0 10.5 0C10.775 0 11 0.223875 11 0.5V2H12C13.1031 2 14 2.89531 14 4V14C14 15.1031 13.1031 16 12 16H2C0.895313 16 0 15.1031 0 14V4C0 2.89531 0.895313 2 2 2H3V0.5C3 0.223875 3.225 0 3.5 0ZM13 6H1V14C1 14.5531 1.44781 15 2 15H12C12.5531 15 13 14.5531 13 14V6ZM12 3H2C1.44781 3 1 3.44688 1 4V5H13V4C13 3.44688 12.5531 3 12 3Z" fill="#494848" />
                </svg>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">April 2023</a></li>
                <li><a class="dropdown-item" href="#">March 2023</a></li>
                <li><a class="dropdown-item" href="#">February 2023</a></li>
            </ul>
        </div>
    </div>



</div>

<section id="stat" class="stat-sec">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-1">
        <div class="col ">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title fs-14 mons-400">Employee</h5>
                    <p class="data-number roboto-700 fs-20">14</p>
                    <span class="fs-14 inter-600 plus-minus-data decrease">↓2.5</span>
                    <!-- import svg -->
                    <!-- <img src="{{ asset('img/Chart.svg') }}" alt="plus" /> -->
                    <div class="employee-wrap"></div>

                </div>
            </div>
        </div>
        <div class="col ">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title fs-14 mons-400">KPI Average</h5>
                    <p class="data-number roboto-700 fs-20">14</p>
                    <span class="fs-14 inter-600 plus-minus-data increase">+1.20</span>
                    <div class="kpi-wrap"></div>

                </div>
            </div>
        </div>
        <div class="col ">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title fs-14 mons-400">Attitude Average</h5>
                    <p class="data-number roboto-700 fs-20">14</p>
                    <span class="fs-14 inter-600 plus-minus-data increase">+1.20</span>
                    <div class="attitude-wrap"></div>

                </div>
            </div>
        </div>
        <div class="col ">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title fs-14 mons-400">Productivity Average</h5>
                    <p class="data-number roboto-700 fs-20">14</p>
                    <span class="fs-14 inter-600 plus-minus-data increase">+1.20</span>
                    <div class="productivity-wrap"></div>

                </div>
            </div>
        </div>
        <div class="col ">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title fs-14 mons-400">Discipline Average</h5>
                    <p class="data-number roboto-700 fs-20">14</p>
                    <span class="fs-14 inter-600 plus-minus-data increase">+1.20</span>
                    <div class="discipline-wrap"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="best-employee" class="best-employee mb-40 mt-40">
    <div class="card best-employee-card">
        <div class="card-body">
            <h5 class="best-employee-heading roboto-500">Best Employee of The Month</h5>
            <div class="row justify-content-between mt-16">
                <div class="col">
                    <div class="sub-text">Monthly Standing</div>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="#" class="view-all roboto-500 fs-16">View All</a>
                </div>
            </div>

            <hr>
            <div class="table-responsive">

                <table class="table table-borderless text-center">
                    <thead class="roboto-500 fs-16">
                        <tr>
                            <th scope="col" class="text-start">Names</th>
                            <th scope="col">Department</th>
                            <th scope="col">Employee Status</th>
                            <th scope="col">KPI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/profile.png') }}" alt="" style="width: 50px; height: 50px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class=" mb-1 roboto-500 employee-name">John Doe</p>
                                        <p class=" mb-0 roboto-300 fs-16 job-position">john.doe@gmail.com</p>
                                    </div>
                                </div>
                            </th>
                            <td>IT</td>
                            <td>Permanent</td>
                            <td>93</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/profile.png') }}" alt="" style="width: 50px; height: 50px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class=" mb-1 employee-name">John Doe</p>
                                        <p class=" mb-0 job-position">john.doe@gmail.com</p>
                                    </div>
                                </div>
                            </th>
                            <td>IT</td>
                            <td>Permanent</td>
                            <td>93</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">

                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/profile.png') }}" alt="" style="width: 50px; height: 50px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class=" mb-1 employee-name">John Doe</p>
                                        <p class=" mb-0 job-position">john.doe@gmail.com</p>
                                    </div>
                                </div>
                            </th>
                            <td>IT</td>
                            <td>Permanent</td>
                            <td>93</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>




@endsection