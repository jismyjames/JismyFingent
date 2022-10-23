@extends("layout")
@section('content')
<div class="card" width="20%">
<div class="card-header">Edit Student
<div style="float: right">
<a href="{{route('viewStudent')}}"><b>Back<b></a>
</div>
</div>
<div class="card-body">
<div class="modal-body">
<form action="{{route('updateStudent')}}" method="post">
    @csrf
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter name" value="{{$model->name}}">
            @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
        <div class="col-md-6">
            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" placeholder="Enter age" value="{{$model->age}}">
            @error('age')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="male" {{($model->gender == 'male') ? 'checked' : ''}}>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="female" {{($model->gender == 'female') ? 'checked' : ''}}>
                <label class="form-check-label" for="female">
                    Female
                </label>
                @error('gender')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>

        </div>

    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Reporting Teacher') }}</label>
        <div class="col-md-6">
            <select name="reporting_teacher" id="reporting_teacher" class="form-control @error('gender') is-invalid @enderror">
                <option value="">Select</option>
                @foreach($teachers as $key=>$teacher)
                <option value="{{$key}}" @if($model->reporting_teacher == $key) selected @endif>{{$teacher}}</option>
                @endforeach
            </select>
            @error('reporting_teacher')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
    </div>
    <input type="hidden" name="id" value="{{$model->id}}">
    <div class="form-group row">
        <div class="col-md-7">
            <button type="submit" name="" style="float:right">Save</button>
        </div>
    </div>
</form>
<div>
</div>
@endsection