@extends('patientdatas.layout')

 

@section('content4')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('patientdatas.create') }}"> Create New Product</a>

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

            <th>HMO Code</th>
            <th>HMO Description</th>
            <th>Patient Code</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Initial</th>
            <th>Dependent</th>
            <th>Date Avail</th>
            <th>Item Code</th>
            <th>Item Description</th>
            <th>Sundries</th>
            <th>Prof. FEE</th>
            <th>Credits</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($patientdatas as $patientdata)

        <tr>

            <td>{{ $patientdata->h_code }}</td>
            <td>{{ $patientdata->h_desc }}</td>
            <td>{{ $patientdata->patient_codes }}</td>
            <td>{{ $patientdata->last_name }}</td>
            <td>{{ $patientdata->first_name }}</td>
            <td>{{ $patientdata->middle_initial }}</td>
            <td>{{ $patientdata->dependent }}</td>
            <td>{{ $patientdata->date_avail }}</td>
            <td>{{ $patientdata->i_code }}</td>
            <td>{{ $patientdata->i_desc }}</td>
            <td>{{ $patientdata->sundries }}</td>
            <td>{{ $patientdata->prof_fee }}</td>
            <td>{{ $patientdata->credits }}</td>

            <td>

                <form action="{{ route('patientdatas.destroy',$patientdata->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('patientdatas.show',$patientdata->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>

    

                    <a class="btn btn-primary" href="{{ route('patientdatas.edit',$patientdata->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $patientdatas->links() !!}

      

@endsection