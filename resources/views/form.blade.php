<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Acount Baru</title>
</head>
<body>
   <form action="{{ url ('welcome') }}" method="get">
      <h1 style="color:fuchsia;">Buat Account Baru</h1>
      <h2 style="color:rgb(128, 9, 128)">Sign Up From</h2>

      <label for="first-name" style="color:rgb(165, 30, 30)">First Name:</label><br><br>
      <input type="text" id="first-name" name="first-name" required><br><br>

      <label for="last-name" style="color:red">Last-Name:</label><br></br>
      <input type="text" id="last-name" name="last-name" required><br><br>

      <label for="gender "style="color:navy;">Gender:</label><br></br>
      <input type="radio" id="male" name="gender" value="male">
      <label for="male "style="color:blue;">Male</label><br>
      <input type="radio" id="femele" name="gender" value="femele">
      <label for="femele "style="color:blue;">Femele</label><br><br>
      
      <label for="nationality "style="color:	rgb(0, 255, 0);">Nationality:</label> <br></br>
      <select id="nationality" name="nationality"> <br>
        <option value="Indonesia "style="color:rgb(255, 0, 0);">Indonesia</option> <br>
        <option value="Jepang">Jepang</option> <br>
        <option value="Inggris">Inggris</option> <br>
    </select><br><br>

      <label for="language">Language Spoken</label><br></br>
      <input type="checkbox" id="bahasa" name="language" value="Bahasa Indonesia">
      <label for="bahasa">Bahasa Indonesia</label><br>
      <input type="checkbox" id="english" name="language" value="English">
      <label for="english">English</label><br>
      <input type="checkbox" id="other" name="language" value="other">
      <label for="other">Other</label><br><br>

      <label for="bio">Bio:</label><br>
      <textarea id="bio" name="bio" rows="8" cols="30"></textarea><br><br>

      <input type="submit" value="Sign Up">
   </form> 
</body>
</html>