<!DOCTYPE html>
<html>
    
<head>
    @include('includes.admin.head')
    

</head>

<body>
        @include('sweetalert::alert')
    <header>
        @include('includes.admin.header')
    </header>

    <div>
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.admin.footer')
    </footer>

</body>
</html>