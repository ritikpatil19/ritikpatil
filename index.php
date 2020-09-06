<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Restaurant</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
	
        <div class="heading"> 
            <h1>
			Taste your fav dish !!!
			</h1>
        </div>

		<div class="ddl" id="d2_ddl">
			<label for="menu" style="font-size:25px;color:white;">SELECT MENU</label>
			<select id="menu" name="menu" style="background-color:#a55c1b;
			width:200px;
			font-size:15px;
			color:white;background-image:linear-gradient(315deg, #a55c1b 10%, #000000 74%);">
			<option selected disabled>CHOOSE</option>
			</select>
		</div>
   
		<div class="menu-list"></div>
    </div>


    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="script.js" defer="TRUE"></script>


</body>
</html>