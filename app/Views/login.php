<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {

            background-color: gray;
        }


        .card {

            width: 400px;
            border: none;

        }




        .btr {

            border-top-right-radius: 5px !important;
        }


        .btl {

            border-top-left-radius: 5px !important;
        }

        .btn-dark {
            color: whitesmoke;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }


        .btn-dark:hover {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }


        .nav-pills {

            display: table !important;
            width: 100%;
        }

        .nav-pills .nav-link {
            border-radius: 0px;
            border-bottom: 1px solid #0d6efd40;

        }

        .nav-item {
            display: table-cell;
            background: green;
        }


        .form {

            padding: 10px;
            height: 300px;
        }

        .form input {

            margin-bottom: 12px;
            border-radius: 3px;
        }


        .form input:focus {

            box-shadow: none;
        }


        .form button {

            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!--<h2>Login</h2>-->

    <?php if (session()->get('error')) : ?>
        <div><?= session()->get('error') ?></div>
    <?php endif; ?>

    <?= form_open('login/process') ?>

    <div class="d-flex justify-content-center align-items-center mt-5">

        <div class="card">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                    <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Admin Login</a>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="form px-4 pt-5">

                        <input type="text" name="username" class="form-control" placeholder="Username" id="username">

                        <input type="text" name="password" class="form-control" placeholder="Password" id="password">
                        <button class="btn btn-dark btn-block">Login</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">Login</button> -->
    <?= form_close() ?>
</body>

</html>