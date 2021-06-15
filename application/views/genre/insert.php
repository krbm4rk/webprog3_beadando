<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<head>
<style type="text/css">

body{
    background: rgb(55,0,201);
    background: radial-gradient(circle, rgba(55,0,201,1) 0%, rgba(9,9,121,0.6488970588235294) 50%, rgba(0,80,255,1) 94%);
    display:flex;
    justify-content: center;
    margin-left:auto;
    margin-right:auto;
    margin-top:150px;
}
.name{
    margin-bottom:10px;
    display:flex;
    justify-content: center;
}
.desc{
        margin-bottom:10px;
    display:flex;
    justify-content: center;
}
.dir{
            margin-bottom:10px;
    display:flex;
    justify-content: center;
}
.button{
            margin-bottom:10px;
    display:flex;
    justify-content: center;
}
.btn{
    
    display:flex;
    justify-content: center;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:10px;
    background-color: #a78dc7;
}
</style>
</head>
<body>
<?php echo form_open(); ?>

            <div class="container-lg name">
<?php echo form_error('name')?>
<?php echo form_input(['type' => 'text', 'name' => 'name'],set_value('name',''),[ 'placeholder' => 'Név']); ?><br/>
        </div>

                <div class="container-lg desc">
<?php echo form_error('description')?>
<?php echo form_textarea(['name' => 'description'],set_value('description',''),['cols' =>10, 'rows' =>5, 'placeholder' => 'Leírás']); ?><br/>
            </div>

            <div class="container-lg dir">
<?php echo form_error('director_id')?>
<?php echo form_dropdown(['name' => 'director_id'], $directors);?><br/>
        </div>

        <div class="container-lg button">
<?php echo form_button(['type' => 'submit', 'name' => 'submit'], 'Mentés'); ?>
                </div>

    <button type="button" class="btn btn-primary"><?php echo anchor(base_url('director/list'), 'Vissza a listára'); ?></button>
<?php echo form_close(); ?>

</body>
</html>