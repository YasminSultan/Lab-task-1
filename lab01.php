<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
</head>
<body>
    <h1>REGISTRATION</h1>
    <table>
    <form>
    <tr>
        <td>Name: </td> 
       <td><input type="text"  id="n" name="name"></td>
       </tr>
       <tr>
        <td>Email: </td> 
        <td><input type="text"  id="e" name="email"></td>
        </tr>  
       <tr>  
        <td>User Name: </td>
        <td><input type="text"  id="m" name="un"></td>
        </tr>
        <tr>   
        <td>Password: </td>
        <td><input type="password"  id="p" name="password"></td>
         </tr>
         <tr>   
        <td>Confirm Password: </td>
        <td><input type="password"  id="cp" name="confirmPassword"></td>
        </tr>
         <tr>
    <td>Gender <br>
    <input type="radio" id="male" name="gender" value="male">
    Male
    <input type="radio" id="female" name="gender" value="female">
    Female
    <input type="radio" id="other" name="gender" value="other">
    Other</td>
    </tr>      
    <tr>
    <td>Date of Birth <br>  
    <input type="date" id="birthday" name="birthday"></td>
    </tr> 
    <tr>
    <td><input type="submit" value="SUBMIT">
    <input type="reset" value="RESET"></td>
    </tr>
    </form>
    </table>
   </body>
</html>