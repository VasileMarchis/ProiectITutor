<?php
    //elseif 
    $x = 12;
    if ($x > 12) {
        echo "too much";
    } elseif ($x === 12) {
        echo "la fix";
    }
    else {
        echo "prea putin";
    }//outputs 'la fix'
    //while
    $x = 1;
    while ($x < 8) {
        echo "value will be $x <br/>";
        $x++;/* outputs value will be 1 <br/>value will be 2
        and so forth and so on. It stops to the value will be 7*/
    // do while
    $i = 3;
    do {
        echo "the number is"."$i". "<br/>";
        $i++;
    } while ($i <= 10 );//outputs the number is 3... the number is 10
    //switch 
    $today = 'Sun';

    switch ($today) {
        case "Mon":
            echo "Today is Monday.";
            break;
        case "Tue":
            echo "Today is Tuesday.";
            break;
        case "Wed":
            echo "Today is Wednesday.";
            break;
        case "Thu":
            echo "Today is Thursday.";
            break;
        case "Fri":
             echo "Today is Friday.";
             break;
        case "Sat":
             echo "Today is Saturday.";
             break;
        case "Sun":
             echo "Today is Sunday.";
             break;
        default:
             echo "Invalid day.";
    } //outputs "Today is Sunday"
    //another switch 
    $day = 'Wed';

    switch ($day) {
        case 'Mon':
            echo 'First day of the week';
            break;
        case 'Tue':
        case 'Wed':
        case 'Thu':
            echo 'Working day';
            break;
        case 'Fri':
            echo 'Friday!';
            break;
        default:
            echo 'Weekend!';
    } //outputs "working day"
    //foreach
    $names = array("Daniel", "Sebastian", "Armand");
    foreach ($names as $name) {
        echo $name.'<br />';
    }//outputs Daniel
    