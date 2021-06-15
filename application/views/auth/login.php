<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<head>
<style type="text/css">
table {

  margin-left: auto;
  margin-right: auto;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
background: #666;
color: white;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: 25px;
}

body{
    background: rgb(55,0,201);
    background: radial-gradient(circle, rgba(55,0,201,1) 0%, rgba(9,9,121,0.6488970588235294) 50%, rgba(0,80,255,1) 94%);
    color:white;
}
.oldalcim{
    font-size: 70px;
    display:flex;
    justify-content: center;
    font-family: OCR A Std, monospace;
      text-transform:uppercase;
  margin-bottom:40px;
  margin-top: 50px;
  text-shadow: 2px 2px white;
    
}
.addbtn{
    float:left;
    margin-left: 150px;
    margin-bottom:5px;
    background-color: #8dbec7;
    color: white;
    font-size: 18px;
}
.listbtn{
    float:right;
    margin-right:150px;
    margin-bottom:5px;
    background-color: #a78dc7;
    color: white;
    font-size: 18px;
    
}
.bevezeto{
  text-transform:uppercase;
  margin-bottom:40px;
  margin-top: 50px;
  font-size: 16px;
  color:white;
}
#infoMessage{
    color:pink;
        margin-left:auto;
    margin-right:auto;
    display:flex;
    justify-content: center;
    
}
.info{
    color:white;
    margin-left:auto;
    margin-right:auto;
    display:flex;
    justify-content: center;
}
.egeszform{
        margin-left:auto;
    margin-right:auto;
    display:flex;
    justify-content: center;
}
.user{
    margin-left:250px;
}
.emlekezz{
    margin-left:auto;
    margin-right:auto;
    display:flex;
    justify-content: center;
}
.belepes{
    margin-left:auto;
    margin-right:auto;
    display:flex;
    justify-content: center;
}
.forgotpw{
    margin-left:auto;
    margin-right:auto;
    display:flex;
    justify-content: center;
}

</style>
</head>
<body>

<h1 class="oldalcim"><?php echo lang('login_heading');?></h1>
<p class="info"><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>
<div class="container-lg">
<?php echo form_open("auth/login");?>
    <div class="row">
        <div class="col-lg-4 user">
  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>
        </div>
            <div class="col-lg-4">
  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>
            </div>
                <div class="emlekezz">
  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>
                </div>
        </div>
                <div class="belepes">

  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>
                </div>
                <div class="forgotpw">

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                </div>

    </div>
</body>
</html>