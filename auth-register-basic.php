<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - Persekutuan Pengakap Malaysia</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <!-- Basic registration form-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <!-- Registration form-->
                                        <form action="register.php" method="POST">
                                        <?php if (isset($_GET['error'])) { ?>
                                            <p class="error"><?php echo $_GET['error']; ?></p>
                                        <?php } ?>

                                        <?php if (isset($_GET['success'])) { ?>
                                            <p class="success"><?php echo $_GET['success']; ?></p>
                                        <?php } ?>

                                        <div class="row gx-3">
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputName">Full Name</label>
                                                <?php if (isset($_GET['name'])) { ?>
                                                <input class="form-control" id="inputName" name="name" type="text" placeholder="Enter your name" value="<?php echo $_GET['name']; ?>"><?php }
                                                else
                                                {
                                                    ?><input class="form-control" id="inputName" name="name" type="text" placeholder="Enter your name"><?php }?>
                                                
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <?php if (isset($_GET['email'])) { ?>
                                            <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" value="<?php echo $_GET['email']; ?>"><?php }
                                            else
                                            {
                                                ?><input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address"><?php }?>
                                            
                                        </div>

                                        <div class="mb-3">
                                            <label class="small mb-1" for="userType">User Type</label>
                                            <select class="form-control" id="userType" name="user_type">
                                               <option value="" disabled selected>Select user type</option>
                                               <option value="ketua pengakap negara">Ketua Pengakap Negara</option>
                                               <option value="timbalan ketua pengakap negara">Timbalan Ketua Pengakap Negara</option>
                                               <option value="penolong ketua pengakap negara">Penolong Ketua Pengakap Negara</option>
                                               <option value="pesuruhjaya pengakap negeri">Pesuruhjaya Pengakap Negeri</option>
                                               <option value="penolong pesuruhjaya pengakap negeri">Penolong Pesuruhajaya Pengakap Negeri</option>
                                               <option value="pesuruhjaya pengakap daerah">Pesuruhjaya Pengakap Daerah</option>
                                               <option value="ketua pemimpin pengakap">Ketua Pemimpin Pengakap</option>
                                            </select>
                                        </div>
                                            <!-- Form Row    -->
                                            <div class="row gx-3">
                                                <div class="col-md-6">
                                                    <!-- Form Group (password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Form Group (confirm password)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control" id="inputConfirmPassword" name="re_password" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Form Group (create account submit)-->
                                            <button type="submit" class="btn btn-primary btn-block">Create Account</a>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="auth-login-basic.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
