<!--
Allows user to edit personal information. .
Writes to JSON file.
-->

<?php 

$roomate1 = array(
    "fullName" => "Zachary Bayoff",
    "birthday" => "August 35, 2045",
    "email" => "zrk@gmail.com",
    "phone" => "333-333-3333"
);

$roomate1JSON = json_encode($roomate1);
file_put_contents('data.json', $roomate1JSON);

$roomate1fName = $_POST['fName'];
$roomate1lName = $_POST['lName'];

$roomate1fullName = $roomate1fName." ".$roomate1lName;
echo $roomate1fullName;
echo "<br>";

$d = json_decode($roomate1JSON, true);
print_r($d);

echo "<br>";

$d['fullName'] = $roomate1fullName;
print_r($d);
echo "<br>";

$j = json_encode($d);
file_put_contents('data.json', $j);

echo "<br>";


//header('location:../roomies.php');

echo "hello";
echo "<br>";

$chore = array(
    'trash' => array(
        'startDate'   => "04/14/18",
        'assignedFreq' => 'Day of Week',
        'frequency' => 'Bi-Weekly',
        'user' => array(
            'name' => "zach",
            'roomieOrder' => 2,
            'dayOfWeek'    => 'Monday' //Rewrite over dayOfWeek at page onload to be most upcoming date in mm/dd/yyyy
        ),
    ),
);

/*

To find the specific day mm/dd/yyyy based on the startDate and dayOfWeek:
for (loop through each user) {
    for (i=0; i < 7; i++) {
        // Loop from beginning of startDate to end of 7 days (1 week) and find all the days 
        // of week that match those chosen by the Roomiesand set their dayOfWeek to those specific days (mm/dd/yyyy)




    }
}

*/







print json_encode($zach);
file_put_contents('data.json', json_encode($chore));
echo "<br>";

echo $zach[0];

echo "<br>";

date_default_timezone_set('UTC');


// Prints something like: Monday


// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

echo "<br>";

$week_start = strtotime('last Sunday', time());
$week_end = strtotime('next Sunday', time());

$month_start = strtotime('first day of this month', time());
$month_end = strtotime('last day of this month', time());

$year_start = strtotime('first day of January', time());
$year_end = strtotime('last day of December', time());

echo date('D, M jS Y', $week_start).'<br/>';
echo date('D, M jS Y', $week_end).'<br/>';

echo date('D, M jS Y', $month_start).'<br/>';
echo date('D, M jS Y', $month_end).'<br/>';

echo date('D, M jS Y', $year_start).'<br/>';
echo date('D, M jS Y', $year_end).'<br/>';

echo "<br>";
echo "<br>";

// Switch this date on for actual CURRENT date
//$currentDate = date("Y-m-d");

// Switch this date on for date + 'daysAdded'
$daysAdded = 300;
$currentDate = date("Y-m-d",time()+(86400*$daysAdded));


    echo "Date is ".$currentDate;

$daysInMonth






?>

<!--
Allows user to add/edit chores. .
Writes to JSON file.
-->

<!--
