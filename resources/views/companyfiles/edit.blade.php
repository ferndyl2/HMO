@extends('companyfiles.layout')

   

@section('content3')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit File</h2>

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

  

    <form action="{{ route('companyfiles.update',$companyfile->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-8 col-sm-8 col-md-8">

                <div class="form-group">

                    <strong>HMO Code:</strong>

                    <input type="text" name="hmo_code" value="{{ $companyfile->hmo_code }}" class="form-control" placeholder="Enter Code">

                </div>

            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">

                <div class="form-group">

                    <strong>HMO Description:</strong>

                    <input type="string" name="hmo_desc" value="{{ $companyfile->hmo_desc }}" class="form-control" placeholder="Enter Description">

                </div>

            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">

                <div class="form-group">

                    <strong>HMO SFX:</strong>

                    <input type="string" name="hmo_sfx" value="{{ $companyfile->hmo_sfx }}" class="form-control" placeholder="Enter Input">

                </div>

            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">

                <div class="form-group">

                    <strong>HMO Status:</strong>

                    <input type="string" name="hmo_status" value="{{ $companyfile->hmo_status }}" class="form-control" placeholder="Enter Status">

                </div>

            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">

                <div class="form-group">

                    <strong>Credit Limit:</strong>

                    <input type="text" name="credit_limit" value="{{ $companyfile->credit_limit }}" class="form-control" placeholder="Enter Limit">

                </div>

            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection

