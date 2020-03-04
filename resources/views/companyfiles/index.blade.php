@extends('companyfiles.layout')

 

@section('content3')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align:center">Adventist Medical Center Manila</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companyfiles.create') }}"> Create New File</a>
            </div>
        </div>
    </div>

   <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>HMO code</th>
            <th>HMO Description</th>
            <th>HMO SFX</th>
            <th>HMO Status</th>
            <th>Credit Limit</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($companyfiles as $companyfile)

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $companyfile->hmo_code }}</td>
            <td>{{ $companyfile->hmo_desc }}</td>
            <td>{{ $companyfile->hmo_sfx }}</td>
            <td>{{ $companyfile->hmo_status }}</td>
            <td>{{ $companyfile->credit_limit }}</td>
            <td>

                <form action="{{ route('companyfiles.destroy',$companyfile->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('companyfiles.show',$companyfile->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('companyfiles.edit',$companyfile->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

    {!! $companyfiles->links() !!}

      

@endsection