<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" onsubmit="return validateForm()">
        <div>Signup</div>
        <div>Username: <input type="text" name = "un" id="un" required minlenth="6"></div> 
        <div>Password: <input type="password" name = "pw" id="pw" required></div>
        <div>Email1(Html5 validation): <input type="email" name = "em" required></div>
        <div>Email2(JS validation): <input type="text" name = "email2"></div>
        <div id="email2"></div>
        <div><input type="submit" value="Signup" name="submit"></div>
</form>
<script>
    function validateForm(){
        var emailRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        //OR newRegExp ("[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}")  yo chai uta bata copy nagareyc
        var email2= document.getElementById('pw').value
        if( emailRegex.test(email2)){
           return true;
        }
        else{
            document.getElementById("email2").innerHTML ="Invalid email";
            return false;
        }

    }
 </script>
</body>
</html>