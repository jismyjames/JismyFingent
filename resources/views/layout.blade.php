
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head> 
    <style>
        .custom-class {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00;
            }
    </style> 
    <body>
        <div class="container">
            </br>
            <div class="jumbotron">
                <h1 style="color:blue">School Management</h1>
            </div>
            <a href="{{ route('viewStudent') }}" class="btn btn-warning">Student</a>
            <a href="{{ route('viewMark') }}" class="btn btn-warning">Mark</a>
            <a href="{{ route('viewTeacher') }}" class="btn btn-warning {{(Route::has('viewTeacher') || Route::has('addTeacher')) ? 'custom-class' : ''}}">Teacher</a>
            
        </div>
        </br>
        <div class="container"> 
            @yield('content')
        </div>
        </br>
    </body>
<html>
