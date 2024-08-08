<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Changa:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rajdhani:wght@300;400;500;600;700&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
<style>
    .form-div{
display: flex;
justify-content:center;
align-items:center;
height: 100vh;
font-family: "Open Sans", sans-serif;
}
 body{
        background-color: whitesmoke;
    }
form{
display: flex;
flex-direction:column;
gap: 10px;
padding: 20px;
}
button{
background-color:#65a765;
padding: 5px;
border:none;
}
h3{
    font-family: "Titillium Web", sans-serif;
}
</style>
</head>
    <body>
        <div class="form-div">
    <form action="client.php" method="post">
       <h3>Hey <?php echo $user["name"]; ?> Welcome back🤓!</h3>
        <input type="hidden"name="action" value="3">
        <button type="submit" class="w-25 text-light rounded">logout</button>
    </form></div>
    </body>
</html>