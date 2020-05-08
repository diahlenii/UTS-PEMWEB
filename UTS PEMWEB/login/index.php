<?php  
error_reporting(0);
session_start();
include_once 'config/class.php';

// instance objek db dan user
$user = new User();
$db = new Database();

// koneksi ke MySQL via method
$db->connectMySQL();

// cek apakah user login atau tidak via method
if($user->get_sesi()) {
  header("location:home");
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>


    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" method="post" class="form-vertical" action="login/">
				 <div class="control-group normal_text"> <h3>LOGIN OOP PHP</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="username" type="text" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="password" type="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">

                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Login"></span>
                </div>
            </form>
           
        </div>
        



    </body>

</html>
