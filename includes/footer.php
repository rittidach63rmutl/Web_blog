<!-- <?php echo $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?> -->
 <!-- section jarallax -->

 <section data-jarallax='{"speed":0.6}' class="page-title jarallax"
        style="background-image: url('https://images.unsplash.com/photo-1584949091598-c31daaaa4aa9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjJ8fGNvZGV8ZW58MHx8MHx8fDA%3D');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 font-weight -bold">เกี่ยวกับเรา</h1>
                    <p class="lead">" คุณไม่เก่งตั้งแต่เริ่มคุณต้องเริ่มก่อนถึงจะเก่ง "</p>
                    <div class="star-rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <div class="star-current" style="width: 50%;">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- footer -->

<footer class="semi-footer p-5 text-center text-md-start">
        <div class="row">
            <div class="col-md-4">
                
                <p style='color :white'>
                    <img style="margin: 8px;" src="assets/images/bootstrap-logo.svg" alt="" width="25"
                        height="25">bookstory <br>

                    <i class="fi fi-rr-phone-call"></i> 021-456-7899 <br>
                    <i class="fi fi-rr-at"></i> email@example.com <br>
                    <i class="fi fi-rr-user"></i> Lorem ipsum adipisicing elit. <br>
                    <i class="fi fi-brands-facebook"></i> <a href="https://www.facebook.com/">Facebook</a><br>
                    <i class="fi fi-brands-youtube"></i> <a href="https://www.youtube.com/">YouTube</a><br>
                    <i class="fi fi-brands-github"></i> <a href="https://github.com/">GitHub</a>
                </p>
                

            </div>

            <div class="col-md-4">
                <h4>เมนู</h4>
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about' ? 'active': '' ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active': '' ?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                        <a class="nav-link" href="contact.php" >Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>แผนที่</h4>
                <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.6893452451955!2d98.95239807171363!3d18.81199284808899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3a43cfcd65b5%3A0x1c0026152fc6a3df!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lil4LmJ4Liy4LiZ4LiZ4Liy!5e0!3m2!1sth!2sth!4v1743491675890!5m2!1sth!2sth"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </footer>

    <footer class="footer">
        <span>
            COPYRIGHT © 2025 <a href="https://www.youtube.com/watch?v=hGd4CfZYnnw" target="_blank">bodyslam</a> ALL
            Right Reserved
        </span>
    </footer>