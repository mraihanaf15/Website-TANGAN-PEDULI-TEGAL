<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="bg-dark text-white p-3" style="width: 250px; min-height:100vh;">
        <h4>Admin</h4>
        <hr>

        <a href="/admin/program" class="d-block text-white mb-2">Program</a>
    </div>

    <!-- CONTENT -->
    <div class="p-4 w-100">
        @yield('content')
    </div>

</div>

</body>
</html>