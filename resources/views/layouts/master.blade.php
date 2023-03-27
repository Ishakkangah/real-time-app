<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan ID</title>
    @include('karyawan.components.header')
</head>

<body>
    <div id="appVue">
        <div class="container my-3 mx-auto">
            <div class="row">
                <div class="card w-100">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
@include('karyawan.components.footer')

</html>