@extends('layouts/layouts')

@section('title', 'Cost')

@push('styles')
<link href="{{ asset('css/master-data.css') }}" rel="stylesheet">
<link href="{{ asset('css/scoring.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.2/css/select.dataTables.min.css">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"> -->
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.css">
@endpush

@section('content')

<section class="mt-35">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="btn nav-link" id="employees-tab" href="{{'/master-data'}}">
                All Employee
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="btn nav-link active" id="cost-tab" href="{{'/master-data/cost'}}">
                Cost
                <div class=" number-icon">7</div>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="btn nav-link" id="benefit-tab" href="{{'/master-data/benefit'}}">
                Benefit
                <div class=" number-icon">7</div>
            </a>
        </li>
        <div class="col d-flex justify-content-end">
            <form class="search-input col-xs-6 ml-20 roboto-500">
                <input type="text" name="search" placeholder="Search">
            </form>
            <button class="btn btn-sm add-btn ml-20 roboto-400" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add
                <img src="{{asset('img/add.svg')}}" alt="" width="12.34px" height="10.67px">
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
        </div>
    </ul>
    <table id="benefit-table" class="table mt-20 fs-14 roboto-400" style="width:100%">
        <thead class="fs-14">
            <tr>
                <th></th>
                <th>Scoring</th>
                <th>
                    <!-- <select name="category" id="category" class="form-control">
                        <option value="">Category Search</option>
                        <option value="Attitude">Attitude</option>
                        <option value="Productivity">Productivity</option>
                        <?php
                        // while ($row = mysqli_fetch_array($result)) {
                        //     echo '<option value="' . $row["category_id"] . '">' . $row["category_name"] . '</option>';
                        // }
                        ?>
                    </select> -->
                    Category
                </th>
                <th>Max Point</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td></td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>

                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>
                    <div class="d-flex">
                        <a href="#" class="edit-btn">
                            <img src="{{asset('img/edit.svg')}}" alt="">
                        </a>
                        <a href="#" class="delete-btn ml-10">
                            <img src="{{asset('img/delete.svg')}}" alt="">
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

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
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
        $('#benefit-table').DataTable({
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


@endsection