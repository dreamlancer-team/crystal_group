<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crystal Group | Admin</title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        @include('admin.layout.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                @include('admin.layout.nav')

                <div class="container-fluid">

                    @stack('main')

                </div>

            </div>

            @include('admin.layout.footer')

        </div>

    </div>

 

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    @stack('scripts')

</body>

</html>