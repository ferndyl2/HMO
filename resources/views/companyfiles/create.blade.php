@extends('companyfiles.layout')

@section('content3')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New File</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('doctorfiles.index') }}"> Back</a>
        </div>
        <br>
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

   

<form action="{{ route('companyfiles.store') }}" method="POST">

    @csrf
     <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>HMO Code:</strong>
                <input type="text" name="hmo_code" class="form-control" placeholder="Enter Code">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>HMO Description:</strong>
                <input type="text" name="hmo_desc" class="form-control" placeholder="Enter Description">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>HMO SFX:</strong>
                <input type="text" name="hmo_sfx" class="form-control" placeholder="Enter Input">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>HMO Status:</strong>
                <input type="text" name="hmo_status" class="form-control" placeholder="Enter Status">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Credit Limit:</strong>
                <input type="text" name="credit_limit" class="form-control" placeholder="Enter Limit">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection