@extends('layouts/layouts')

@section('title', 'Master Data')

@push('styles')
<link href="{{ asset('css/scoring.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.2/css/select.dataTables.min.css">
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.css">

@endpush

@push('scripts')
<script src="{{ asset('js/scoring.js') }}"></script>
@endpush

@section('content')
<section class="mt-35">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="attitude-tab" href="{{'/scoring'}}">
                Attitude
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="productivity-tab" href="{{'/scoring/productivity'}}">
                Productivity
                <div class=" number-icon">7</div>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="discipline-tab" href="{{'/scoring/discipline'}}">
                Discipline
                <div class=" number-icon">7</div>
            </a>
        </li>
        <!-- text on right -->
        <div class="col d-flex justify-content-end">
            <form action="" class="datetimerange">
                <input type="text" id="datetimerange-input1" size="24" style="text-align:center" class=" mons-500 fs-14">
            </form>
        </div>
    </ul>
    <div class="row  g-1 mt-20 d-flex">
        <div class="col d-inline-flex">
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
        <div class="col-10 d-flex align-items-scretch justify-content-center  inter-400" style="width: 636px;">
            <div class="bar-wrap" style="width: 100%;"></div>
        </div>
        <div class="col d-inline-flex">
            <div class="card score-card ms-auto">
                <div class="card-body pl-35 pl-20">
                    <div class="row">
                        <div class="col-3 d-flex align-items-start">
                            <img class="ms-auto" src="{{asset('img/equalizer.svg')}}" alt="" width="30px">
                        </div>
                        <div class="col">
                            <div class="mons-600 fs-22">Attitude</div>
                            <div class="inter-600 fs-56">80</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mt-20 mb-20">
    <table id="myTable" class="table mt-20 fs-14 roboto-400" style="width:100%">
        <thead class="fs-14">
            <tr>
                <th></th>
                <th>Scoring</th>
                <th>Cost/Benefit</th>
                <th>Max Point</th>
                <th>Point</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td>
                    <span class="badge bg-success">Deactive</span>
                </td>
                <td>61</td>
                <td>61</td>
                <td>Edinburgh</td>
                <td>
                    <span class="badge bg-secondary">Deactive</span>
                </td>
                <td>
                    <a href="#" class="edit-btn">
                        <img src="{{asset('img/edit.svg')}}" alt="">
                    </a>
                </td>
            </tr>

        </tbody>
    </table>
</section>

<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.js"></script>

<script>
    window.addEventListener("load", function(event) {
        new DateRangePicker('datetimerange-input1');
    });
</script>

<script>
    (function($) {
        "use strict";
        $(document).ready(function() {
            $('#multiple-checkboxes').multiselect({
                includeSelectAllOption: false,
            });
        });
    })(jQuery);

    $(document).ready(function() {
        $('#myTable').DataTable({
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            order: [
                [1, 'asc']
            ],
            //remove search
            searching: false,
            //remove show entries
            lengthChange: false,


        });
    });
</script>


@endsection