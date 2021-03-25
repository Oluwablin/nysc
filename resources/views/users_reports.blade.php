@extends('layouts.app')

@section('content')

<div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Users Reports</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Ward</th>
                                <th>LGA</th>
                                <th>State</th>
                                </thead>
                            <tbody>
                                @foreach ($citizens as $citizen)
                                    <tr>
                                        <td>{{ $citizen->name }}</td>
                                        <td>{{ $citizen->gender }}</td>
                                        <td>{{ $citizen->address }}</td>
                                        <td>{{ $citizen->phone }}</td>
                                        <td>{{ $citizen->ward->name ?? '-' }}</td>
                                        <td>{{ $citizen->lga->name ?? '-' }}</td>
                                        <td>{{ $citizen->state->name ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $citizens->links() }}
            </div>

</div>
@endsection
