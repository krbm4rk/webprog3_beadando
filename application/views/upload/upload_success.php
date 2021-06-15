<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<head>
<style type="text/css">
body{
    background: rgb(55,0,201);
    background: radial-gradient(circle, rgba(55,0,201,1) 0%, rgba(9,9,121,0.6488970588235294) 50%, rgba(0,80,255,1) 94%);
    color:white;
}
.fajl{
            display:flex;
    justify-content: center;
    margin-top: 20px;
}
.oldalcim{

      font-family: OCR A Std, monospace;
  text-transform:uppercase;
  margin-bottom:40px;
  margin-top: 50px;
  text-shadow: 2px 2px white;
     font-size: 50px;
    display:flex;
    justify-content: center;
    
}
</style>
</head>
<body>

<h1 class="oldalcim"> 1 új fájl sikeresen feltöltve </h1>
<div class="container-lg fajl">
<?php if($file['is_image'] == 1): ?>
    <img src="<?=base_url('uploads/'.$file['file_name'])?>"
         alt="<?=$file['file_name']?>"/>
<?php endif; ?>
</div>

</body>
</html>