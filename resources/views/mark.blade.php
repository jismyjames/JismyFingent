<?php

use App\Models\Student;
use App\Models\Mark;

?>

@extends("layout")

@section('content')

<div class="card" width="20%">
    <div class="card-header">View Marks</div>
    <div class="card-body">
        <div style="float: right">
            <a href="{{Route('addmark')}}" class="btn btn-default"><b>Add Marks</b></a>
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
        <table class="table  table-bordered " width="100%">
            <thead>
                <tr>
                    <th>Id #</th>
                    <th>Student name</th>
                    <th>Maths</th>
                    <th>Science</th>
                    <th>History</th>
                    <th>Term</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @if(count($marks) != 0)
                @foreach($marks as $mark)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{Student::getname($mark->student_id)}}</td>
                    <td>{{$mark->maths}}</td>
                    <td>{{$mark->science}}</td>
                    <td>{{$mark->history}}</td>
                    <td>{{Mark::getTerm($mark->term_id)}}</td>
                    <td>{{$mark->Total}}</td>
                    <td colspan="2">
                        <a href="{{route('editMark', ['id'=>$mark->id])}}">Edit | </a>
                        <a href="{{route('deleteMark', ['id'=>$mark->id])}}" onclick="return confirm('Are you sure, do you want delete?')">Delete</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8">
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