<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css"> -->

        <title>Shooters | Login</title>
        <style>
            body{
                overflow-x: hidden;
            }
             *{
                 margin: 0;
                 padding: 0;
             }
            a{
                text-decoration: none;
            }
            #login{
                margin-top:15vh !important ;
                /* display: none; */
                
                transition: all 600ms ease-in-out;
                /* position: ; */
            }
             .form-control{
                /* background-color: rgba(141, 141, 141,0.3); */
                margin-bottom: 15px;
            }
            #Register{ 
                transition: all 600ms ease-in-out;
                 position: absolute;
                 top: -190vh;
                 /* display: none; */
            } 
        </style>
    </head>
    <body>
        <div class="main w-100">
            <div  class="form row d-flex justify-content-center align-items-center p-4 ">
                <div id="login" class="col-lg-4 col-md-8 col-sm-8 p-4 m-3 shadow ">
                    <form id="vendorLogin"  method="post">
                        <div class="form-head">
                            <h1>Login  </h1>
                        </div>
                        <div class="form-group mt-5">
                            <label for="Username">Username :</label>
                            <input type="text" class="form-control" placeholder="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="Username">Password :</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="link d-flex justify-content-end">
                            <a href="/forgot">
                                Forgot Password ?
                            </a>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-outline-success w-50" type="submit" value="Login" id="Login">
                        </div>
                        <div class="p-4 d-flex justify-content-center">
                            <a href="#" id="openRegister"> Create New Account ?</a>
                        </div>
                    </form>
                </div>  

                <div id="Register" class="col-lg-4 col-md-4  p-4 m-3 shadow ">
                    <form id="registerVendor"  method="post">
                        <div class="form-head ">
                            <h1>Register </h1>
                        </div>

                        <!-- <div class="row">
                            
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">Shop Name:</label>
                                <input type="text" class="form-control" name="shopName">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">Location:</label>
                                <input type="text" class="form-control" name="location">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">City:</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">State:</label>
                                <input type="text" class="form-control" name="state">
                            </div>
                             
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">Pin Code:</label>
                                <input type="text" class="form-control" name="pinCode">
                            </div>
                        </div>
                        <div class="row">
                                    
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">Owner Name:</label>
                                <input type="text" class="form-control" name="shopName">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">Email:</label>
                                <input type="text" class="form-control" name="Email">
                            </div>
                            <div class="form-group col-lg-4 col-md-4">
                                <label for="">Contact No:</label>
                                <input type="text" class="form-control" name="contact">
                            </div>
                        </div> -->
                        
                        <div class="row justify-content-center mt-2 align-baseline">
                            <div class="form-group col-md-6 ">
                                <label for="City">City:<br><br></label>
                                <input type="text" class="form-control" placeholder="City..." name="city" id="city">
                            </div>
                            <div class="form-group col-md-6  ">
                                <label class="w-100" for="Location">Location:</label>
                                <span style="font-size: 12px;color: brown;font-style: italic;">Specify Exact location in the city</span>
                                <input type="text" class="form-control" placeholder="Ex. Sai Nagar" name="location" id="location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vendor Name">Vendor Name:</label>
                            <input type="text" class="form-control" placeholder="YC Cafe" name="vendorName" id="vendorName">
                        </div>
                        <div class="form-group">
                            <label for="Contact No.">Contact no:</label>
                            <input type="text" class="form-control" placeholder="8888888888" name="contact" name="contact">
                        </div>
                        <div class="form-group">
                            <label for="Contact No.">Password :</label>
                            <input type="text" class="form-control" placeholder="*********" name="password" name="password">
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12">
                                <input type="submit" id="sendOtp" value="Register" style="letter-spacing: 2px;" class="btn btn-success w-100">
                            </div>
                            <div class="col-lg-12">
                                <a href="#" id="openLoginForm"> Already Registered ?</a>
                            </div>
                        </div>
                    </form>

                    <!-- <form id="otp" action="" method="POST">
                        <div class="row">
                            <div class="form-group d-flex  flex-column">
                                <h4>OTP :</h4>
                                <input type="text" name="otp" name="otp" class="form-control" placeholder="6 - digit code">
                                <input type="submit" id="verifyBtn" class="btn btn-success" value="Verify">
                            </div>
                        </div>
                    </form> -->

                    <!-- <form id="setPassword" action="">
                        <div class="row">
                            <div class="form-group d-flex  flex-column">
                                <h4> Set Password :</h4>
                                <label for="">Password :</label>
                                <input type="text" name="pass" class="form-control" placeholder="*********">
                                <label for="">Confirm Password :</label>
                                <input type="text" name="Cpass" class="form-control" placeholder="*********">
                            </div>
                            <input type="submit" id="registerBtn" class="btn btn-success" value="Register">
                        </div>
                    </form> -->
                </div>  
            </div> 
        </div>

    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>