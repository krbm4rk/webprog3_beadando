<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<head>
<style type="text/css">

h2 {
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
color: white;
text-transform: uppercase;
}

body{
    background: rgb(55,0,201);
    background: radial-gradient(circle, rgba(55,0,201,1) 0%, rgba(9,9,121,0.6488970588235294) 50%, rgba(0,80,255,1) 94%);
    font-size: 20px;
}
h1{
  font-family: OCR A Std, monospace;
  text-transform:uppercase;
  margin-bottom:40px;
  margin-top: 50px;
  text-shadow: 2px 2px white;
  display:flex;
  justify-content: center;
}
.btn{
    text-transform: uppercase;
    margin-left: auto;
    margin-right:auto;
    display:flex;
}
</style>
</head>
<body>

<h1><?=$title?></h1>
<hr>
<div class="container-lg">
    <div class="row">
        <div class="col-lg-1">
<h2>ID</h2>
<p><?=$record->id?></p>
        </div>
                <div class="col-lg-3">
<h2>Név</h2>
<p><?=$record->name?></p>
    </div>
        <div class="col-lg-6">
<h2>Leírás</h2>
<p><?=($record->description == NULL ? '-' : $record->description)?></p>
    </div>
        <div class="col-lg-2">
<h2>Születési év</h2>
<p><?=$record->birthyear?></p>
    </div>
    </div>

    <button type="button" class="btn btn-outline-danger"><?php echo anchor(base_url('director/list'), 'Vissza a listára'); ?></button>
</div>

</body>
</html>

