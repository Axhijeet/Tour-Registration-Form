<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div class="container">
    <h1>
        Welcome To IGNOU 
    </h1>    
    <h2>
            Registration Form Of Tour
        </h2>
        <form action="tour-form.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Why You Want To Join?"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>