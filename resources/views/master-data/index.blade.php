@extends('layouts/layouts')

@section('title', 'Master Data')

@push('styles')
<link href="{{ asset('css/master-data.css') }}" rel="stylesheet">
<link href="{{ asset('css/scoring.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.2/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.css">
@endpush

@section('content')

<section class="mt-35">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="employees-tab" href="{{'/master-data'}}">
                All Employee
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="cost-tab" href="{{'/master-data/cost'}}">
                Cost
                <div class=" number-icon">7</div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="benefit-tab" href="{{'/master-data/benefit'}}">
                Benefit
                <div class=" number-icon">7</div>
            </a>
        </li>
        <div class="col d-flex justify-content-end">
            <form action="" class="datetimerange">
                <input type="text" id="datetimerange-input1" size="24" style="text-align:center" class=" mons-500 fs-14">
            </form>
            <form class="search-input col-xs-6 ml-20 roboto-500">
                <input type="text" name="search" placeholder="Search">
            </form>
            <button class="btn btn-sm add-btn ml-20 roboto-400" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add
                <img src="{{'img/add.svg'}}" alt="" width="12.34px" height="10.67px">
            </button>
            <div class="align-items-center ml-20 roboto-400 fs-14" style="color: #494848;">
                <div class="d-flex text-left align-items-center w-100">
                    <select class="inter-400 " id="multiple-checkboxes" multiple="multiple">
                        <option value="php">Status</option>
                        <option value="javascript">Permanent</option>
                        <option value="java">Contract</option>
                        <option value="sql">Daily Worker</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-sm download-btn fs-16 roboto-400 ml-20">
                Download
            </button>
        </div>
    </ul>

</section>

<section class="mt-20 mb-20">
    <table id="myTable" class="table  fs-14 roboto-400" style="width:100%">
        <thead class="fs-14">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Departmen</th>
                <th>Point</th>
                <th>Employee Status</th>
                <th>Join Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td></td>
                <td>
                    <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>
                    <span class="badge badge-info">Deactive</span>
                </td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <span class="badge badge-info">Deactive</span>
                </td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Deactive</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Active</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Active</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Active</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <span class="badge badge-info">Deactive</span>
                </td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Active</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Active</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Active</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <span class="d-none">Faia</span>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('img/profile.png') }}" alt="" style="width: 40px; height: 40px" class="rounded-circle" />
                        <div class="ms-1">
                            <p class="roboto-500 mb-0">Faia</p>
                            <p class="roboto-400 mb-0 fs-12">Duty Manager</p>
                        </div>
                    </div>
                </td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td><span class="badge badge-info">Deactive</span></td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{'img/edit.svg'}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{'img/delete.svg'}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 560px; margin: auto;">
        <div class="modal-content">
            <div class="modal-body">
                <form class="g-3">
                    <label for="inputEmail4" class="form-label roboto-400 fs-16">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                    <label for="inputPassword4" class="form-label roboto-400 fs-16">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                    <label for="inputPassword4" class="form-label roboto-400 fs-16">Employee Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="inputPassword4" class="form-label roboto-400 fs-16">Join Date</label>
                    <input type="date" class="form-control" id="inputPassword4">

                    <div class="row mt-37 d-flex justify-content-end">
                        <div class="col-md-auto">
                            <button class="btn btn-success submit-btn">Save</button>
                        </div>
                        <div class="col-md-auto">
                            <button type="button" class="btn cancel-btn" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="js/bootstrap-multiselect.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.js"></script>

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
        // Add event listeners to the two range filtering inputs

    });
</script>

<script>
    window.addEventListener("load", function(event) {
        new DateRangePicker('datetimerange-input1');
    });
</script>

@endsection