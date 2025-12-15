<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - KMUT</title>
    @include('layouts.admin.header')
</head>
<body>

@include('layouts.admin.topmenu')

<div class="container-fluid mt-4">
    @yield('content')
</div>

</body>
</html>
