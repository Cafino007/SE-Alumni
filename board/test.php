<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/test1.css">
    <title>Document</title>
</head>



<body>
    
     <div class="container">
        <form action="database.php" method="post">
            <h3>Personal Info</h3>
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>

            <input type="text" name="elementary_dategraduated" placeholder="Elementary Date Graduated" required> 

            <input type="text" name="highschool_dategraduated" placeholder="High School Date Graduated" required><br>

            <input type="text" name="seniorhighschool_dategraduated" placeholder="Senior High Date Graduated" required><br>
            <label for = "str">Choose a strand </label>
                        <select name="strand">
                            <option selected disabled >--Select--</option>
                            <option value = "STEM">STEM</option>
                            <option value = "ABM">ABM</option>
                            <option value = "HUMMS">HUMMS</option>
                            <option value = "GAS">GAS</option>
                        </select>

            <input type="text" name="college_dategraduated" placeholder="College Date Graduated" required><br>
            <label for = "str">Choose a course </label>
                        <select name="course">
                            <option selected disabled >--Select--</option>
                            <option value = "NURSING">NURSING</option>
                            <option value = "IT">IT</option>
                            <option value = "ENGINEERING">ENGINEERING</option>
                            <option value = "EDUCATION">EDUCATION</option>
                        </select>
            <div class="btn-box" style = "padding-top: 15%;">
            <button type="button"> Back </button>
                <button type="Submit" value="Submit" name="Submit"> Submit </button>
            </div>
        </form>
           


   
</body>
</html>