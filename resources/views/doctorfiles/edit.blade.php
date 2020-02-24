@extends('doctorfiles.layout')

   

@section('content2')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Product</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('doctorfiles.index') }}"> Back</a>

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

  

    <form action="{{ route('doctorfiles.update',$doctorfile->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Doctor Code:</strong>

                    <input type="text" name="doctors_code" value="{{ $doctorfile->doctors_code }}" class="form-control" placeholder="Doctors_code">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Last Name:</strong>

                    <input type="string" name="last_name" value="{{ $doctorfile->last_name }}" class="form-control" placeholder="Last_name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>First Name:</strong>

                    <input type="string" name="first_name" value="{{ $doctorfile->first_name }}" class="form-control" placeholder="First_name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Middle Initial:</strong>

                    <input type="string" name="middle_initial" value="{{ $doctorfile->middle_initial }}" class="form-control" placeholder="Middle_initial">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Specialty:</strong>

                    <input type="text" name="specialty" value="{{ $doctorfile->specialty }}" class="form-control" placeholder="Specialty">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection

