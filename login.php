<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>restoran Bubu Caké</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height : 300px">
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- End Header -->
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg"><i class="bi bi-bag-heart-fill"></i> Sign in to start your session</p>
                        <form action="proses/proses_login.php" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="username" required />
                                <div class="invalid-feedback">
                                    Masukkan email anda.
                                </div>
                                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" />
                                <div class="invalid-feedback">
                                    Masukkan email anda.
                                </div>
                                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            </div>
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!--end::Row-->
                        </form>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>

        </div>

        <div class="fixed-bottom text-center">
            copyright 2025 Bubu Caké
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>