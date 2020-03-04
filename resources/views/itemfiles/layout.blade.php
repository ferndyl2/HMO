<!DOCTYPE html>

<html>

<head>

    <title>Home</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ route('doctorfiles.index')}}">Doctor's File</a>
            <a class="nav-item nav-link" href="#">Item's File</a>
            <a class="nav-item nav-link" href="{{ route('companyfiles.index')}}">Health Company File Maintenance</a>
    </nav>

<div class="container">
    <br>
    @yield('content')

</div>

   

</body>

</html>