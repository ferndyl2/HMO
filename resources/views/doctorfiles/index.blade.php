@extends('doctorfiles.layout')

 

@section('content2')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('doctorfiles.create') }}"> Create New Product</a>

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

            <th>Doctors code</th>

            <th>Last Name</th>

            <th>First Name</th>

            <th>Middle Inital</th>

            <th>Specialty</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($doctorfiles as $doctorfile)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $doctorfile->doctors_code }}</td>

            <td>{{ $doctorfile->last_name }}</td>

            <td>{{ $doctorfile->first_name }}</td>

            <td>{{ $doctorfile->middle_initial }}</td>

            <td>{{ $doctorfile->specialty }}</td>

            <td>

                <form action="{{ route('doctorfiles.destroy',$doctorfile->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('doctorfiles.show',$doctorfile->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('doctorfiles.edit',$doctorfile->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $doctorfiles->links() !!}

      

@endsection