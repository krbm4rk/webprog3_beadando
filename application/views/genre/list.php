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
text-transform: uppercase;
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
h1{
  font-family: OCR A Std, monospace;
  text-transform:uppercase;
  margin-bottom:40px;
  margin-top: 50px;
  text-shadow: 2px 2px white;
}
.backbtn{
        float:right;
    margin-left: 150px;
    margin-bottom:5px;
    background-color: #8dbec7;
    color: white;
    font-size: 18px;
}
</style>
</head>
<body>

<h1 class="oldalcim"><?=$title?></h1>
<button type="button" class="btn btn-outline-info addbtn"><?php echo anchor(base_url('genre/insert'), 'Új műfaj hozzáadása'); ?> </button>

<div class="container-lg">
<?php if($records == null || empty($records)): ?>
<p>Nincs rögzítve egyetlen elem sem!</p>
<?php else: ?>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th>Rendező neve</th>
            <th>Műfaj neve</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($records as $record): ?>
        <tr>
            <td><?=$record->director_name?></td>
            <td><?=$record->name?></td>
            <td>
                <?php echo anchor(base_url('genre/delete/'.$record->id), 'Törlés'); ?>
                <br />
                <?php echo anchor(base_url('genre/update/'.$record->id), 'Szerkesztés'); ?>
            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<button type="button" class="btn btn-primary backbtn"><?php echo anchor(base_url('director/list'), 'Vissza a listára'); ?></button>



<?php endif; ?>

</div>

</body>
</html>


