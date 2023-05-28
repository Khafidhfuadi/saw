@extends('layouts/layouts')

@section('title', 'Add User')

@push('styles')
<link href="{{ asset('css/benefit.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.2/css/select.dataTables.min.css">

@endpush

@section('content')
<div class="custom-container mt-100">

    <form class="row g-3" method="POST">
        @csrf

        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!
        </div>
        @endif

        <div class="col-md-6">
            <label for="nama" class="form-label">Fullname</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="col-md-6">

            <label for="Departement" class="form-label">Departement</label>
            <select name="departement" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Open this select menu</option>
                @foreach ($departements as $departement)
                <option value="{{ $departement->id }}">{{ $departement->departement_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="row mt-37">
            <div class="col-md-auto">
                <button class="btn btn-success submit-btn" type="submit">Create</button>
            </div>
            <div class="col-md-auto">
                <a class="btn cancel-btn" href="{{'/'}}">Cancel</a>
            </div>
        </div>
    </form>

    <section class="mt-100 mb-20">
        <table id="all-pegawai" class="table mt-20 fs-14 roboto-400" style="width:100%">
            <thead class="fs-14">
                <tr>
                    <th></th>
                    <th>Fullname</th>
                    <th>
                        Departement
                    </th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- looping pegawai data -->
                @foreach ($pegawai as $pegawai)
                <tr>
                    <td></td>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->departement_nama }}</td>
                    <td>{{ $pegawai->username }}</td>
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
                @endforeach
            </tbody>
        </table>
    </section>


</div>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

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
        $('#all-pegawai').DataTable({
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