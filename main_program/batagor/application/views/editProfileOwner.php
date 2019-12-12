<?php
  if(!($this->session->login)){
    redirect(base_url());
  }
  $error_msg = $this->session->error_msg;
  if($error_msg != ''){
    $this->session->unset_userdata('error_msg');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?= base_url('js/function.js')?>"></script>
  <link rel="stylesheet" href="<?= base_url('css/style.css')?>" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?= base_url('css/home.css')?>" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('css/slide.css')?>" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('css/w3.css')?>">
  <link rel="stylesheet" href="<?= base_url('css/profile.css')?>">
  <link href="<?= base_url('css/hamburgers.css')?>" rel="stylesheet">
  <script>
    $(document).ready(function(){
      $('#no-confirm').click(function(){
        hideNotification();
      })
      $.getJSON('<?= base_url('user/getInfoUser/')?>', function (detil) {
        $('#fullName').val(detil.name);
        $('#phoneNumber').val(detil.phone_number);
        $('#emailAddress').val(detil.email);
      })
      if(!($('#notificationMessage').val() == '')){
        showNotification('Notifikasi',$('#notificationMessage').val(),0,'Ya');
      }
      $('#submit').click(function(){
        $.post("<?= base_url(); ?>user/edit/",{ fullName : $('#fullName').val() , mobileNumber : $('#phoneNumber').val(), emailAddress : $('#emailAddress').val(), currentPassword : $('#curPassword').val(), newPassword : $('#newPassword').val()}, function (data) {
        });
        location.reload();
      })
    })
  </script>
  <title>BATAGOR - Edit Profile</title>
</head>
<body>
  <input type="hidden" name="" id="checkPemilik" value="">
    <div class="container-fluid">
      <div class="row header-nav">
        <div class="col-md-2">
        <div class="hamburger hamburger--collapse" type="button" onclick="shSlide()">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
          <a href="<?= base_url('/homeOwners') ?>"><img src="<?= base_url('assets/logo.png') ?>" class="logo-gor"></a>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-2">
          <div class="row">
          <?php
            if($this->session->login == ''){
              echo '  <div class="col-md-5"> <button class="btn btn-outline-warning btn-sign" onclick="shLoginCustomer()">Sign In</button></div>
                  <div class="col-md-5"><button class="btn btn-outline-warning btn-sign" onclick="shRegisterCustomer()" >Sign Up</button></div>';
            }else{
              echo '<div class="col-md-5"></div>';
              echo '<div class="col-md-5"> <button class="btn btn-outline-warning btn-sign" "><a href="'.base_url('home/logout').'">Sign Out</a></button></div>';
            }
          ?>

          </div>
        </div>
      </div>
      <?php
        $this->load->view('chk_slide');  
        $this->load->view('login'); 
        $this->load->view('register');
        $this->load->view('rekeningPop'); 
        $this->load->view('confirm-box'); 
      ?>
      <input type="hidden" name="" id="notificationMessage" value="<?= $error_msg ?>">
      <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
      <div class="container bootstrap snippets">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
          <div class="form-horizontal">
              <div class="panel panel-default">
                <div class="panel-body text-center">
                 <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle profile-avatar" alt="User avatar">
                </div>
              </div>
            <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title"><b>User info</b></h4>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                  <a onclick="shRekening()">
                    <button type="submit" class="btn btn-success" id="rekening">Rekening</button>
                  </a>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" id="fullName" class="form-control" value="">
                  </div>
                </div>
              </div>
            </div> 

            <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title"><b>Contact info</b></h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Mobile number</label>
                  <div class="col-sm-10">
                    <input type="tel" id="phoneNumber" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">E-mail address</label>
                  <div class="col-sm-10">
                    <input type="email" id="emailAddress"class="form-control">
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title"><b>Security</b></h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Current password</label>
                  <div class="col-sm-10">
                    <input type="password" id="curPassword" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">New password</label>
                  <div class="col-sm-10">
                    <input type="password" id="newPassword" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    <button type="reset" class="btn btn-default">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
</body>
</html>
