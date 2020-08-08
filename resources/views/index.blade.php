<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Sentiments
    </title>

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">

    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/vendor/fontawesome-free-5.13.0-web/css/all.min.css">
</head>
<body>
<div class="container" id="login-container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="clearfix">
                <span class="float-left" style="font-size: 20pt;font-family:cursive;">
                    Sentiments
                </span>
                <span class="float-right">
                    <img src="/images/sentiment.png" alt="sentiment logo" class="img-fluid logo-sm">
                </span>
            </div>
            <div class="mt-2">
                <blockquote class="text-center">
                    “ All the beautiful things i want to say to you but don't know how! "
                </blockquote>
                <div class="card shadow nice-card">
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="username">Key</label>
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <button class="btn-primary btn-sm btn">
                                    <i class="fa fa-unlock-alt"></i>&nbsp;Open
                                </button>
                            </div>
                        </form>
                    </div>
                </div><!-- ./ sign in widget -->
                <hr>
                <div class="clearfix">
                    <span class="float-left">
                        &copy; {{date('Y')}}&nbsp;&middot; sentiments
                    </span>
                    <span class="float-right">
                        A labor of love <i class="fa fa-heart text-danger"></i>
                    </span>
                </div>


            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>
