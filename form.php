<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Create account </title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body class="background">

        <h1 id="create_account_h1">
            Create account
        </h1>

        <div id="form_block">
            <form action="add.php" method="GET" id="form_content">

                <!-- firstname -->
                <label for="firstname" class="form_label">
                    Firstname:
                </label>    </br></br>
                <input type="text" name="firstname" id="firstname" required>    </br></br>

                <!-- lastname -->
                <label for="lastname" class="form_label">
                    Lastname:
                </label>    </br></br>
                <input type="text" name="lastname" id="lastname" required> </br></br>

                <!-- age -->
                <label for="age" class="form_label">
                    Age:
                </label>    </br></br>
                <input type="number" name="age" id="age" required>  </br></br>

                <!-- gender -->
                <label for="gender" class="form_label">
                    Gender:
                </label>    </br></br>
                <select name="gender" id="gender">
                    <option value="gender_neutral">Gender neutral</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select> </br></br>

                <!-- interests -->
                <label for="interests" class="form_label">
                    Interests
                </label>    </br></br>
                <input type="text" name="interests" id="interests"> </br></br>

                <!-- favorite animal -->
                <label for="animal" class="form_label">
                    Favorite animal:
                </label>    </br></br>
                <input type="text" name="animal" id="animal" required> </br></br>
            
                <!-- Submit button -->
                <button type="submit" class="buttons">
                    Create account
                </button>
            </form>
        </div>         
    </body>
</html>