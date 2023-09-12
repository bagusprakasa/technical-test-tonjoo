@extends('layouts.template')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header"><a href="{{ route('form.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>
                    Add Data</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                @include('components.button-list')
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
