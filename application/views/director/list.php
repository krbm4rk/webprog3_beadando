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
}
.oldalcim{
    font-size: 100px;
    display:flex;
    justify-content: center;
    
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
.upload{
        float:right;
    margin-right:150px;
    margin-bottom:5px;
    background-color: #a78dc7;
    color: white;
    font-size: 18px;
}
h1{
  font-family: OCR A Std, monospace;
  text-transform:uppercase;
  margin-bottom:40px;
  margin-top: 50px;
  text-shadow: 2px 2px white;
}
</style>
</head>
<body>
    
<h1 class="oldalcim"><?=$title?></h1>

<button type="button" class="btn btn-outline-info upload"><?php echo anchor(base_url('upload/'), 'Feltöltés'); ?></button>
    <br/>
    <br/>
<button type="button" class="btn btn-outline-info addbtn"><?php echo anchor(base_url('director/insert'), 'Rendező hozzáadása'); ?></button>
    <br/>
    <br/>
<button type="button" class="btn btn-outline-info listbtn"><?php echo anchor(base_url('genre/list'), 'Műfajok listája'); ?></button>
    <br/>
    <br/>
<button type="button" class="btn btn-outline-info listbtn"><?php echo anchor(base_url('movie/list'), 'Filmek listája'); ?></button>
    <br/>
    <br/>
<button type="button" class="btn btn-outline-info addbtn"><?php echo anchor(base_url('auth/logout'), 'KIJELENTKEZÉS'); ?></button>
    <br/>
    <br/>
<?php if(!empty($errors)): ?>
<?php foreach($errors as &$error): ?>
<p><?=$error?></p>
<?php endforeach; ?>
<?php endif; ?>
<div class="container-lg">
<?php if($records == null || empty($records)): ?>
    <p>Nincs rögzítve egyetlen rendező sem!</p>
<?php else: ?>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>NÉV</th>
                <th>MŰVELETEK</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($records as $record): ?>
        <tr>
            <!--<td><?=$record->id?></td>-->
            <td><?=$record->name?></td>
            <td>
                <?php echo anchor(base_url('director/list/'.$record->id), 'Részletek '); ?>
                <br />
                <?php echo anchor(base_url('director/delete/'.$record->id), 'Törlés ') ?>
                <br />
                <?php echo anchor(base_url('director/update/'.$record->id), 'Szerkesztés '); ?>
            </td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endif; ?>

</body>
</html>