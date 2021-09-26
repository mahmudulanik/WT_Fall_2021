<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section class="form-section">
        <form class="form" action="result.php" method="POST">
            <h1 class="form-heading" style="color:green;">Congratulations</h1>
            <hr>
            <div class="fileds">
                <label class="labels" for="firstName">First Name:</label>
                <p class="values">Mahmudul</p>
            </div>
            <div class="fileds">
                <label class="labels" for="lasttName">Last Name:</label>
                <p class="values">Anik</p>
            </div>
            <div class="fileds">
                <label class="labels" for="age">Age:</label>
                <p class="values">23</p>
            </div>
            <div class="fileds">
                <p class="labels">Designation:</p>
                <div class="filed-item">
                <p class="values">Senior Programmer</p>
                </div>
            </div>
            <div class="fileds">
                <p class="labels">Preferrde language</p>
                <div class="filed-item">
                <p class="values">PHP</p>
                    <!-- <input id="java" type="checkbox">
                    <label for="java">JAVA</label>
                    <input id="php" type="checkbox">
                    <label for="php">PHP</label>
                    <input id="c++" type="checkbox">
                    <label for="c++">C++</label> -->
                </div>
            </div>
            <div class="fileds">
                <label class="labels" for="email">E-mail:</label>
                <p class="values">mahmudulanik6512@gmail.com</p>
            </div>
            <input name="reset" class="button" type="submit" value="Reset">
        </form>
    </section>
    
</body>
</html>