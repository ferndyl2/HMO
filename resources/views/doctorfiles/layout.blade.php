<!DOCTYPE html>
<html>
<head>
    <title>HMO</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Doctor's File</a>
            <a class="nav-item nav-link" href="{{ route('itemfiles.index')}}">Item's File</a>
            <a class="nav-item nav-link" href="{{ route('companyfiles.index')}}">Health Company File Maintenance</a>
    </nav>
    <br>
<div class="container">
    @yield('content2')
</div>

</body>

</html>