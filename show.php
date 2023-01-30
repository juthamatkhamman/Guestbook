<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>

<body>
<h1>Personal Information</h1>
    <?php
    
    $name = $_GET["name"];
    $age = $_GET["age"];
    $gender = $_GET["gender"];
    $status = $_GET["status"];

    echo "Name : ";
    if ($age <= "14") #อายุน้อยกว่าหรือเท่ากับ 14 ปี
    { if ($gender == "male") 
        {
            echo "Mstr."; #เด็กชาย
        }
        else if ($gender == "female")
        {
           echo "Miss"; #เด็กหญิง
        }
    } 
    else if ($age >= "15") //อายุมากกว่าหรือเท่ากับ 15 ปี
    { if ($gender == "male")
        {
            echo "Mr."; //นาย
        }
        else if ($gender == "female")
        { if ($status == "married") //สถานะแต่งงานแล้ว
            {
                echo "Mrs."; //นาง
            }
            else if ($status == "single") //สถานะโสด
            {
                echo "Miss"; //นางสาว
            }
            
        }
    }
    
    
    echo "  " . "$name" . "<br>";
    echo "Age : " . "$age" . "<br>";
    echo "Gender : " . "$gender" . "<br>";
    echo "Status : " . "$status" . "<br>";

    ?>


</body>

</html>