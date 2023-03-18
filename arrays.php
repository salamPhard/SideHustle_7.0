<!DOCTYPE html>
<html>
<body>

<?php

$votersAge = 18;
$voterHasPVC = true;
$voterward = "020";

#Check Eligibiliy to vote
if($votersAge >= 18)
{
    if($voterHasPVC)
    {
        if($voterward == "020")
        {
            echo "voter eligible to vote";
        }
        else
        {
            echo "Sorry you cant vote as you are not from ward 020";
        }

    }
    else{
        echo "Sorry you can vote because you have no PVC";
    }

}
else
{
    echo "Sorry You are not up to 18 years";
}




?>



</body>
</html>