<?php

use App\Models\Teacher;

?>

@extends("layout")

@section('content')

<div class="card" width="20%">
  <div class="card-header">View Students</div>
  <div class="card-body">
    <div style="float: right">
        <a href="{{url('/addStudent')}}" class="btn btn-default"><b>Add Students</b></a>
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
    <table class="table  table-bordered">
        <thead>
            <tr>
                <th>Id #</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Reporting Teacher</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @if(count($students) != 0)
            @foreach($students as $student)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{Teacher::getname($student->reporting_teacher)}}</td>
                    <td colspan ="2">
                      <a href="{{route('editStudent', ['id'=>$student->id])}}">Edit | </a>
                      <a href="{{route('deleteStudent', ['id'=>$student->id])}}" onclick="return confirm('Are you sure, do you want delete?')">
                      Delete
                      </a>
                    </td>
                </tr>
            @endforeach
            @else
            <tr>
                <td colspan="5">
                    <div class="tbl-item"><center>{{'No data found!!'}}</center></div>
                </td>
            </tr>
          @endif
        </tbody>
    </table>
   
</div>
</div>
@endsection