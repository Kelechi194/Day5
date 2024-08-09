<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color:whitesmoke;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        form{
            background:linear-gradient(to top,skyblue,orangered);
            width:360px;
            height:160px;
            box-shadow: 5px 5px 5px black;
            padding:10px;
            border-radius:10px;
            position:absolute;
            z-index:1;

        }
        input{
            border:none;
            border-radius:20px;
            margin-left:10px;
            height:20px;
            padding:10px;
        }
        h3{
            text-align:center;
            letter-spacing:.5px;
        }
        h3::after{
            position:absolute;
            content:'';
            width:300px;
            height:2px;
            background-color:black;
            top:50px;
            left:37px;
            background:linear-gradient(to left,skyblue,orangered);
        }
        p{
            position:relative;
            z-index:2;
            margin-left:60px;
            margin-top:140px;
            color:green;
        }
        button{
            margin-left:40px;
            height:40px;
            border-radius:10px;
            border:none;
            color:white;
            background:black;
            font-weight:bold;
        }
        button:hover{
            background:white;
            color:black;
        }



        </style>
</head>
<body>

<form method="post">
    <h3> CAN YOU GUESS MY NUMBER </h3>
    <input type="number" name="guess" >
    <button type="submit" name="submit">FOR THE WIN</button>
</form>

  <?php
// seting up the random number generator for php.
  $rand = rand(1,10);

  // testing if button is clicked.
    if(isset($_POST['submit'])){

        //setting up the guess variable for users.
        $guess = $_POST['guess'];

        //testing conditions.
        if($guess <1 || $guess >10){
            echo "<p>Value must be between 1 and 10,</p>";

        }else{

            //checking if guess function is done
            if($guess != $rand){
                echo"<p>You Guessed Incorrectly. The number was {$rand}</p>";
            }
        }
        

        
    }

    ?>

</body>
</html>