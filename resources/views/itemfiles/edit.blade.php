@extends('itemfiles.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Item Files</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('itemfiles.index') }}"> Back</a>

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

  

    <form action="{{ route('itemfiles.update',$itemfile->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-8 col-sm-8 col-md-8">

                <div class="form-group">

                    <strong>Id No:</strong>

                    <input type="text" name="id_no" value="{{ $itemfile->id_no }}" class="form-control" placeholder="Enter ID">

                </div>

            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">

                <div class="form-group">

                    <strong>Item Description:</strong>

                    <textarea class="form-control" style="height:150px" name="item_description" placeholder="Enter Description">{{ $itemfile->item_description }}</textarea>

                </div>

            </div>

            <div class="col-xs-8 col-sm-8 col-md-8 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection