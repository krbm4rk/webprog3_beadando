<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<head>
<style type="text/css">
body{
    background: rgb(55,0,201);
    background: radial-gradient(circle, rgba(55,0,201,1) 0%, rgba(9,9,121,0.6488970588235294) 50%, rgba(0,80,255,1) 94%);
    color:white;
}
.feltolt{
    display:flex;
    justify-content: center;
    margin-top: 200px;
}
.mentes{
        display:flex;
    justify-content: center;
    margin-top: 20px;
}
</style>
</head>
<body>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<div class="container-lg feltolt">
<?php echo form_open_multipart(); ?>
    
    <?php echo form_upload('file'); ?>
    <br/>
    <div class="mentes"><?php echo form_submit('submit', 'Mentés'); ?></div>

<?php echo form_close(); ?>
</div>
</body>
</html>