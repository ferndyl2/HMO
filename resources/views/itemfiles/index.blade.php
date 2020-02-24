@extends('itemfiles.layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('itemfiles.create') }}"> Create New Product</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Id No.</th>

            <th>Item Description</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($itemfiles as $itemfile)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $itemfile->id_no}}</td>

            <td>{{ $itemfile->item_description}}</td>

            <td>

                <form action="{{ route('itemfiles.destroy', $itemfile->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('itemfiles.show',$itemfile->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('itemfiles.edit',$itemfile->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $itemfiles->links() !!}

      

@endsection