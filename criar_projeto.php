<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LABSI2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
$current = "";
include ('db.php'); 

include ('session.php');

include('header.php'); 
?>
<div class="container-fluid wraper">
	<?php include('sidenav.php') ?>
    <div class="col-sm-8 textcontent"> 
        <form>
          <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file">
          </div>
          <button type="publicar" class="btn btn-primary">Publicar</button>
        </form>
    </div>
</div>

</body>
</html>