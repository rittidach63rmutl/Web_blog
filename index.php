<!DOCTYPE html>
<html lang="en">
<!-- เบราว์เซอร์อาจเก็บแคชของหน้าเว็บเก่า ลองกด Ctrl + Shift + R หรือเปิดในโหมด Incognito (ไม่ระบุตัวตน) เพื่อตรวจสอบ 
     ล้างแคชด้วยการกด F12 → ไปที่ Network → ติ๊ก Disable cache → รีเฟรช-->


<head>
    <meta charset="UTF-8">
    <!-- ทำให้บนมือถือซูมไม่ได้ (เฉพาะบางเบราเซอร์)-->
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" c content="ie=edge">
    <title>BookWEB</title>
    <meta name="title" content="BookWEB">
    <meta name="description"
        content="รับทำเว็บไซต์ด้วย HTML, CSS, JS, PHP พร้อมใช้ XAMPP, GitHub และ Generative AI ได้ ภาษาไทยดี อังกฤษพอใช้ จบครุศาสตร์อุตสาหกรรม วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่">
    <meta name="keywords" content="HTML,CSS,javascript">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta property="og:title" content="BookWEB" />
    <meta property="og:description"
        content="รับทำเว็บไซต์ด้วย HTML, CSS, JS, PHP พร้อมใช้ XAMPP, GitHub และ Generative AI ได้ ภาษาไทยดี อังกฤษพอใช้ จบครุศาสตร์อุตสาหกรรม วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่" />
    <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://metatags.io/" />
    <meta property="twitter:title" content="BookWEB" />
    <meta property="twitter:description"
        content="รับทำเว็บไซต์ด้วย HTML, CSS, JS, PHP พร้อมใช้ XAMPP, GitHub และ Generative AI ได้ ภาษาไทยดี อังกฤษพอใช้ จบครุศาสตร์อุตสาหกรรม วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา เชียงใหม่" />
    <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

    <!-- Meta Tags Generated with https://metatags.io -->


    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="assets/images/favicons/favicon.svg" />
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="BookWeb" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



</head>

<body>


    <!-- Section Navbar -->
   <?php include_once('includes/navbar.php') ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="https://images.unsplash.com/photo-1607706189992-eae578626c86?w=600&auto=format&fit=crop&q=60"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-center d-none d-md-block">
                    <h1 class="display-4 font-weight-bold">book Story</h1>
                    <p>การสร้างเว็ปไซต์เบื้องต้น</p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?w=600&auto=format&fit=crop&q=60"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-center d-none d-md-block">
                    <h1 class="display-4 font-weight-bold">book Story</h1>
                    <p>การสร้างเว็ปไซต์เบื้องต้น22222</p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://plus.unsplash.com/premium_photo-1678565999588-08fdd0b1410b?w=600&auto=format&fit=crop&q=60"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-center d-none d-md-block">
                    <h1 class="display-4 font-weight-bold ">book Story</h1>
                    <p>การสร้างเว็ปไซต์เบื้องต้น3333</p>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Section Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <br><br>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="border-short-bottom"> ทดสอบทำเว็ปไซต์</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis fugiat sed, maiores
                doloremque iste eos ea porro quaerat reiciendis eaque aliquam explicabo natus quisquam repudiandae id
                aut obcaecati nihil accusantium.This is a modified jumbotron that occupies the entire horizontal space
                of its parent.</p>
        </div>
    </div>



    <!-- blog -->
    <section class="container">

        <h1 class="text-center">
            <span class="border-short-bottom">บทความ</span>
        </h1>


        <div class="row">
            <section class="col-12 col-sm-6 col-md-4 p-3">
                <div class="card">
                    <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-3">
                <div class="card">
                    <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-3">
                <div class="card">
                    <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>

            </section>

            <section class="col-12 col-sm-6 col-md-4 p-3">
                <div class="card">
                    <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-3">
                <div class="card">
                    <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </section>

            <section class="col-12 col-sm-6 col-md-4 p-3">
                <div class="card">
                    <img src="https://plus.unsplash.com/premium_photo-1726726348510-84f8ba300e1a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZ2FybXxlbnwwfHwwfHx8MA%3D%3D"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </section>
        </div>
        </div>

    </section>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <a href="#" class="warpper-card-img">
                                <img class="card-img-top" alt="Bootstrap Image Preview"
                                    src="assets/images/image1.jpg" /></a>
                            <h3 class="card-header ">
                                Card title
                            </h3>
                            <div class="card-body">
                                <p class="card-text">
                                    Card content
                                </p>
                            </div>
                            <div class="card-footer">
                                Card footer
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="#" class="warpper-card-img">
                                <img class="card-img-top" alt="Bootstrap Image Preview"
                                    src="assets/images/image2.jpg" /></a>
                            <h3 class="card-header">
                                Card title
                            </h3>
                            <div class="card-body">
                                <p class="card-text">
                                    Card content
                                </p>
                            </div>
                            <div class="card-footer">
                                Card footer
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <a href="#" class="warpper-card-img">
                                <img class="card-img-top" alt="Bootstrap Image Preview"
                                    src="assets/images/lufe.jpg" /></a>
                            <h3 class="card-header">
                                Card title
                            </h3>
                            <div class="card-body">
                                <p class="card-text">
                                    Card content
                                </p>
                            </div>
                            <div class="card-footer">
                                Card footer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Section TO DO -->
    <section class="position-relative jarallax" data-jarallax='{"speed":0.6}'
        style="background-image: url('https://images.unsplash.com/photo-1484417894907-623942c8ee29?w=1350&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGNvZGV8ZW58MHx8MHx8fDA%3D');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-2">
                    <img src="assets/images/bootstrap-logo.svg" class="img-fluid " width="150px" alt="">
                    <h1 class="text-white display-4 font-weight -bold">TIME LINE ABOUT US</h1>

                </div>
            </div>
        </div>
    </section>


 

    <!-- Section on to top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <!-- footer -->
    <?php include_once('includes/footer.php') ?>


    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>