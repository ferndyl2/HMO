@extends('patientdatas.layout')

  

@section('content4')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Product</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('patientdatas.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('patientdatas.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HMO Code:</strong>

                <input type="text" name="h_code" class="form-control" placeholder="h_code">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HMO Description:</strong>

                <input type="text" name="h_desc" class="form-control" placeholder="h_desc">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Patient Code:</strong>

                <input type="text" name="patient_codes" class="form-control" placeholder="patient_codes">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Last Name:</strong>

                <input type="text" name="last_name" class="form-control" placeholder="last_name">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>First Name:</strong>

                <input type="text" name="first_name" class="form-control" placeholder="first_name">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Middle Initial:</strong>

                <input type="text" name="middle_initial" class="form-control" placeholder="middle_initial">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dependent:</strong>

                <input type="text" name="dependent" class="form-control" placeholder="dependent">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Date Avail:</strong>

                <input type="text" name="date_avail" class="form-control" placeholder="date_avail">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Item Code:</strong>

                <input type="text" name="i_code" class="form-control" placeholder="i_code">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Item Description:</strong>

                <input type="text" name="i_desc" class="form-control" placeholder="i_desc">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Sundries:</strong>

                <input type="text" name="sundries" class="form-control" placeholder="sundries">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Prof. FEE:</strong>

                <input type="text" name="prof_fee" class="form-control" placeholder="prof_fee">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Credits:</strong>

                <input type="text" name="credits" class="form-control" placeholder="credits">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection