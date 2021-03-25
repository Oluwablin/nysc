@extends('layouts.app')

@section('content')

<div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Register Citizen</h4>
                                    </div>
                                    <div class="card-body">
                                        @include('errors.list')
                                        <form action="{{ route('register_citizen') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Name</label>
                                                        <input type="text" name="name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Gender</label>
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="">Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Phone</label>
                                                        <input type="tel" name="phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    {{ Form::label('ward_id','Ward') }}
                                                        {{ Form::select('ward_id', [ 0 =>  'Select a ward'] + $wards->pluck('name', 'id')->toArray(),null, ['class'=> "full-width",'data-placeholder' => "Choose Ward", 'data-init-plugin' => "select2"]) }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <div class="form-group">
                                                    {{ Form::label('lga_id','LGA') }}
                                                        {{ Form::select('lga_id', [ 0 =>  'Select an LGA'] + $lgas->pluck('name', 'id')->toArray(),null, ['class'=> "full-width",'data-placeholder' => "Choose LGA", 'data-init-plugin' => "select2"]) }}
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    {{ Form::label('state_id','States') }}
                                                        {{ Form::select('state_id', [ 0 =>  'Select a State'] + $states->pluck('name', 'id')->toArray(),null, ['class'=> "full-width",'data-placeholder' => "Choose State", 'data-init-plugin' => "select2"]) }}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Address</label>
                                                        <input type="text" name="address" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
