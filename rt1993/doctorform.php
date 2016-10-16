
<html>
<link rel="stylesheet" type="text/css" href="styles/style.css">

<body >

<div class="body">
    <a href ="index.php"><img src="images/doctorwho.jpg"  alt="doc" /></a>
</div>

<form action="adddoctor.php" method="post">
    <div>
        <label for="name"><h1>Name</h1></label>
        <input type="varchar" id="name" name="name" required/>
    </div>
    <div>
        <label for="incarnation"><h1>Incarnation</h1></label>
        <input type="varchar" id="incarnation" name="incarnation" required />
    </div>  
    <div>
        <label for="year"><h1>Year</h1></label>
        <input type="int"id="year" name="year" required />
    </div>
    
    <div class="button">
        <button type="submit"><h1>Create</h1>
        </button>
    </div>
</form>

</body>
</html>