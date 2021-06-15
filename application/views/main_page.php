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
hr{
    background-color:white;
}
</style>
</head>
<body>

<div class="container-lg">
	<p class="oldalcim">Üdvözöllek a legjobb és legújabb FILMEK adatbázisában!</p>
        <hr>
	<div class="bevezeto">
            <p>Ahhoz, hogy tovább tudj lépni, először is be kell jelentkezned!<br /></p>
                
		<p>Bejelentkezésnél lehetőséged van adminisztrátorként és sima felhasználóként bejelentkezni.<br />
                NE felejtsd el, hogy mind a két típus különféle jogokkal rendelkezik!</p>
                
                <button type="button" class="btn btn-info"><?php echo anchor(base_url('auth/login'), 'KATTINTS IDE A BEJELENTKEZÉSHEZ'); ?></button>
</div>
</div>
    
</body>
</html>