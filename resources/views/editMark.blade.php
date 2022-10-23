@extends("layout")
@section('content')
<div class="card" width="20%">
<div class="card-header">Update Marks
<div style="float: right">
<a href="{{route('viewMark')}}"><b>Back<b></a>
</div>
</div>
<div class="card-body">
<div class="modal-body">
<form action="{{route('updateMark')}}" method="post">
    @csrf
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Reporting Teacher') }}</label>
        <div class="col-md-6">
            <select name="student_id" id="student_id" class="form-control @error('student_id') is-invalid @enderror">
                <option value="">Select</option>
                @foreach($students as $key=>$student)
                <option value="{{$key}}" @if($model->student_id == $key) selected @endif>{{$student}}</option>
                @endforeach
            </select>
            @error('student_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Reporting Teacher') }}</label>
        <div class="col-md-6">
            <select name="term_id" id="term_id" class="form-control @error('term_id') is-invalid @enderror">
                <option value="">Select Term</option>
                <option value="1" @if($model->term_id == '1') selected @endif>Term 1</option>
                <option value="2" @if($model->term_id == '2') selected @endif>Term 2</option>
            </select>
            @error('term_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Maths') }}</label>
        <div class="col-md-6">
            <input id="maths" type="text" class="form-control @error('maths') is-invalid @enderror" name="maths" placeholder="Enter Mark" value="{{$model->maths}}">
            @error('maths')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Science') }}</label>
        <div class="col-md-6">
            <input id="science" type="text" class="form-control @error('science') is-invalid @enderror" name="science" placeholder="Enter Mark" value="{{$model->science}}">
            @error('science')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('History') }}</label>
        <div class="col-md-6">
            <input id="history" type="text" class="form-control @error('history') is-invalid @enderror" name="history" placeholder="Enter Mark" value="{{$model->history}}">
            @error('history')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
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