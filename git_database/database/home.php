<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>database</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="home.php"><strong>Movie+</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="http://localhost/pma/index.php">管理员登录</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <section>
            <div class="border rounded jumbotron py-5 px-4">
                <h1>Movie+: Find Your Movie!</h1>
                <p></p>
                <p></p>
                <form action="search_movie.php" method="get">
                <input type="text" name="id" placeholder="输入电影名开始搜索！"><input type="submit" class="btn btn-danger btn-lg" role="button" value="Get Started&gt;">
                </form>
            </div>
        </section>
    </div>
    <div class="container site-section">
        <h1 class="text-light bg-dark border rounded-pill border-danger shadow">Discover new movies!</h1>
        <div class="row">
            <div class="col-md-5"><a href="get_top_movies.php">&nbsp;<h2 class="text-body">Top Rated</h2><i class="fa fa-film" style="color: rgb(8,8,8);"></i></a></div>
            <div class="col-md-5"><a href="get_genres.php">&nbsp;<h2 class="text-body">Find by Genres</h2></a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                    <path d="M8 16L10.8787 13.1213M10.8787 13.1213C11.4216 13.6642 12.1716 14 13 14C14.6569 14 16 12.6569 16 11C16 9.34315 14.6569 8 13 8C11.3431 8 10 9.34315 10 11C10 11.8284 10.3358 12.5784 10.8787 13.1213ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>