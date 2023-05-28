@extends('layouts/layouts')

@section('title', 'Master Data')

@push('styles')
<link href="{{ asset('css/scoring.css') }}" rel="stylesheet">
@endpush

@section('content')
<section class="mt-35">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="employees-tab" href="{{'/scoring'}}">
                All Employee
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="manager-tab" href="{{'/scoring/manager'}}">
                Manager
                <div class=" number-icon">7</div>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="superv-tab" href="{{'/scoring/superv'}}">
                Supervisor
                <div class=" number-icon">7</div>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="staff-tab" href="{{'/scoring/staff'}}">
                Staff
                <div class=" number-icon">7</div>
            </a>
        </li>
        <!-- text on right -->
        <div class="col d-flex justify-content-end">
            <div class="col-xs-6">
                <form>
                    <input type="text" name="search" placeholder="Search">
                </form>
            </div>
            <button class="btn filter-btn">Filter</button>
        </div>
    </ul>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-1">
        <div class="col mt-20 d-flex align-items-stretch">
            <a class="card list-card" href="{{'/scoring/single'}}" style="text-decoration: none;">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch ">
            <div class="card list-card">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch ">
            <div class="card list-card">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch ">
            <div class="card list-card">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch">
            <div class="card list-card">
                <div class="card-body">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-20 d-flex align-items-stretch ">
            <div class="card list-card">
                <div class="card-body ">
                    <div class="number-icon">7</div>
                    <div class="mt-30 d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 100px; height: 100px" class="rounded-circle" />
                        <div class="ms-3" style="width: 100%;">
                            <div class="employee-name">Eggie</div>
                            <p class="position">IT Manager</p>
                            <div class="mb-10 progress">
                                <div class="progress-bar first-pb" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar second-pb" role="progressbar" aria-label="Example with label" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
                            </div>
                            <div class="mb-10 progress">
                                <div class="progress-bar third-pb" role="progressbar" aria-label="Example with label" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">82</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<!--   -->


@endsection