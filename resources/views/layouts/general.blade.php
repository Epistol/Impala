<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('layouts.head')
</head>
<body ng-app="Employees">



<div id="app">
    @yield('content')
</div>

</body>
</html>
