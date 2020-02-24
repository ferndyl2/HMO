@extends('healths.layout')

 

@section('content3')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('healths.create') }}"> Create New Product</a>

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

            <th>HMO Code</th>

            <th>HMO Description</th>

            <th>HMO SFX</th>

            <th>HMO Status</th>

            <th>Credit limit</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($healths as $health)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $health->hmo_code }}</td>

            <td>{{ $health->hmo_description }}</td>
            <td>{{ $health->hmo_sfx }}</td>
            <td>{{ $health->hmo_status }}</td>
            <td>{{ $health->credit_limit }}</td>

            <td>

                <form action="{{ route('healths.destroy',$health->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('healths.show',$health->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('healths.edit',$health->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $healths->links() !!}

      

@endsection