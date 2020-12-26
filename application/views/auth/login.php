<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SISCO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='<?php echo base_url('assets/');?>css/login.css' rel='stylesheet'>

    <script src="bower_components/jquery/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url('vendor/charisma/');?>img/favicon.ico">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
</head>

<body>
<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <?= $this->session->flashdata('WrongPassword');?>
            <form class="form-signin " action="login/login" method="post" onSubmit="return cekform();">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username"  autofocus>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" >
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>            
        </div>
</div>

<script type="text/javascript">
  function cekform()
  {
    if (!$("#inputUsername").val())
    {
      alert('Maaf Username tidak boleh kosong');
      $("#inputEmail").focus();
      return false;
    }
    if (!$("#inputPassword").val())
    {
      alert('Maaf Password tidak boleh kosong');
      $("#inputPassword").focus();
      return false;
    }
  }
</script>

</body>
</html>