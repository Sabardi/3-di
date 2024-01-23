<?php
include "database.php";
?>
<!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                     <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <form action="login.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="tetx" class="form-control" id="floatingInput" id="inputname" name="username" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </form>
                        
                        
                        <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <?php
    include "footer.php";
    ?>