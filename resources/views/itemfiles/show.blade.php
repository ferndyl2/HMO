@extends('itemfiles.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Item Files</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('itemfiles.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Id No.:</strong>

                {{ $itemfile->id_no }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Item Description:</strong>

                {{ $itemfile->item_description }}

            </div>

        </div>

    </div>

@endsection