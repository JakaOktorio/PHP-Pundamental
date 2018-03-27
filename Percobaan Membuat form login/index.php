<?php
    session_start();
    if(isset($_SESSION["salah"])){
        if($_SESSION["salah"] >= 10){
            echo '<h1>ANDA DI BLOKIR</h1>';
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jaka Oktorio</title>
        <link rel="icon" href="asset/images/favicon.ico">
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        <link rel="stylesheet" href="asset/css/floating-labels.css">
        <script>
           /* function cobaajadeh() {
                document.getElementById("inputEmail").addEventListener("keyup",function(event){
                    event.preventDefault();
                    if(event.keyCode === 13){
                        document.getElementById("inputPassword").focus();
                    }
                });
            }*/
            function alertsalahlogin(){
                
            }
            window.setTimeout(function (){
               $(".alert").fadeTo(400, 0).slideUp(400, function() {
                   $(this).remove();
               }); 
            }, 2000);
            
            function showModalku(){
                $(document).ready(function (){
                    $("#Modalku").modal("show")
                });
            }
        </script>
    </head>
    <body>
        <form id="frm01" name="frm01" method="POST" action="login.php" 
              class="form-signin">
            <div class="text-center mb-4">
                <img width="72" height="72" src="asset/images/bootstrap-solid.svg">
                <h1>MENU LOGIN</h1>
<!--            <p>Mari kita belajar bersama sama</p>-->
            </div>
<!--            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Alert ini hilang dalam waktu 4 detik!
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->
            <?php
            if(isset($_SESSION["salah"])){
                if($_SESSION["salah"] < 3){
                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Anda salah ke-'.$_SESSION["salah"].'...!!!!
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>';      
    }
    }
        ?>
                    <div class="form-label-group">
                        <input onkeyup="cobaajadeh();" class="form-control" 
                               name="inputEmail" type="email" 
                               required="yes" id="inputEmail"
                               placeholder="Email Address" autofocus="yes"
                               autocomplete="no">
                        <label for="inputEmail">Email Address</label>
                    </div>
                     <div class="form-label-group">
                         <input class="form-control" name="inputPassword" 
                         id="inputPassword" placeholder="Password" 
                         type="password" required="yes">
                         <label for="inputPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
            
            <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#Modalku">
                Show Modal
            </button>
            <button onclick="showModalku();" class="btn btn-primary btn-block" type="button" data-toggle="modal">
                Show Modal Pakai JavaScript
            </button>
        </form>
        <div class="modal fade" id="Modalku" tabindex="-1" role="dialog" aria-labelledby="DialogModallabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Modallabel01">
                            Disini Judul Modal
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h5>
                    </div>
                    <div class="modal-body">
                        <p>Disini pernah terjadi kenangan yang tidak pernah kulupahkan seumur hidup</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/popper.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

