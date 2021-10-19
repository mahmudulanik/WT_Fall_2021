<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>

    <section class="form-section">
        <form class="form" action="result.php" method="POST">
            <h1 class="form-heading">Please fill up the form</h1>
            <hr>
            <div class="fileds">
                <label class="labels" for="firstName">First Name:</label>
                <input name="firstName" id="firstName" type="text" required>
            </div>
            <div class="fileds">
                <label class="labels" for="lasttName">Last Name:</label>
                <input name="lastName" id="lasttName" type="text" required>
            </div>

            </div>
            <div class="fileds">
                <label class="labels" for="email">E-mail:</label>
                <input name="email" id="email" type="email" required>
            </div>
            <div class="fileds">
                <label class="labels" for="password">Password:</label>
                <input name="password" id="password" type="password" required>
            </div>
          
            </div>

            <div class="fileds">
                <p class="labels">Gender:</p>
                <div class="filed-item">
                    <input id="gender" name="gender" type="radio" value="Male">
                    <label for="gender">Male</label>
                    <input id="female" name="gender" type="radio" value="Female">
                    <label for="female">Female</label>
                   
                </div>
            </div>
            </div>
            <div class="fileds">
                <label class="labels" for="mobile no">Mobile no:</label>
                <input name="mobile no" id="mobile no" type="mobile no" required>
            </div>

            <div class="fileds">
                <label class="labels" for="">HSC Result:</label>
                <input name="HSC Result" id="HSC Result" type="text" required>
            </div>
            <div class="fileds">
                <label class="labels" for="">SSC Result:</label>
                <input name="SSC Result" id="SSC Result" type="text" required>
            </div>

            <tr>
        <td class="labels">Select a course you want to enroll : </td>
        <td>
          <select name="j" class="fields" required>
            <option value="" selected="selected" disabled="disabled">Course</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
           
          </select>
        </td>

            
        <tr>
        <td class="labels">Choose a year enrolling year : </td>
        <td>
        <select name="j" class="fields" required>
            <option value="" selected="selected" disabled="disabled">Year</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
           
          </select>
        </td>

            
            
            <input name="Insert Data" class="button" type="insert Data" value="Insert Data">
            
        </form>
    </section>
    
</body>
</html>