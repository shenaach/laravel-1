<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        
        <form action="/selamatdatang" method="POST">
        @csrf
            <label for = "firstname">First Name :</label> <br>
            <input type="text" placeholder="firstname" name="firstname" id="firstname"><br><br>
            <label for = "lastname">Last Name :</label> <br>
            <input type="text" placeholder="lastname" name="lastname" id="lastname"><br><br>

            <label for = "gender">Gender :</label><br>
            <input type="radio" name="gender" id="male" value="male">Male <br>
            <input type="radio" name="gender" id="female" value="female">Female <br>
            <input type="radio" name="gender" id="other" value="other">Other<br>
            <br>
            <label for = "nationality">Nationality :</label><br>
            <select>
                <option>Indonesian</option>
                <option>Singaporean</option>
                <option>Malaysian</option>
                <option>Australian</option>
            </select>
            <br>
            <br>
            <label for = "languagespoken">Language Spoken</label><br>
            <input type="checkbox" name="languagespoken" id="bahasaindonesia" value="bahasaindonesia">Bahasa Indonesia <br>
            <input type="checkbox" name="languagespoken" id="english" value="english">English <br>
            <input type="checkbox" name="languagespoken" id="others" value="others">Others<br>
            
            <br>
            <label for = "bio">Bio :</label><br>
            <textarea cols="40" rows="7" id="bio"></textarea>

            <br>
            <input type="submit" value="Sign Up" href="/selamatdatang">
        </form>

    </body>
</html>