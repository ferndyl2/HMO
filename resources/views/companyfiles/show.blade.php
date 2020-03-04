@extends('companyfiles.layout')



@section('content3')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Company Files</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('companyfiles.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HMO Code:</strong>

                {{ $companyfile->hmo_code }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HMO Description:</strong>

                {{ $companyfile->hmo_desc }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HMO SFX:</strong>

                {{ $companyfile->hmo_sfx }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>HMO Status:</strong>

                {{ $companyfile->hmo_status }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Credit Limit:</strong>

                {{ $companyfile->credit_limit }}

            </div>

        </div>

    </div>

@endsection