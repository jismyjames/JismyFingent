@extends("layout");

@section('content')

<div class="card" width="20%">
    <div class="card-header">View Teachers</div>
    <div class="card-body">
        <div style="float: right">
            <a href="{{url('/addTeacher')}}" class="btn btn-default"><b>Add Teachers</b></a>
        </div>
        </br></br>
        @if ($message = Session::get('success'))
        <div class="tpvbtn">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
        @endif
        </br></br>
        <table class="table  table-bordered ">
            <thead>
                <tr>
                    <th>Id #</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @if(count($teachers) != 0)
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$teacher->name}}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5">
                        <div class="tbl-item">
                            <center>{{'No data found!!'}}</center>
                        </div>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>

    </div>
</div>
@endsection