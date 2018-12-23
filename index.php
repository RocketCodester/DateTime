<?php

declare(strict_types=1);
namespace Project;
use DateTime;

$row = '10. 11. 1968';

$date = new DateTime('2014, August 23');
$date = new DateTime('2014-09-12');
$date = new DateTime('+2 weeks');
$date = new DateTime('next week');
$date = new DateTime('tomorrow');
$date = DateTime::createFromFormat('d. m. Y', $row);

$dvone = new DateTime('August 1, 1972');
$spike = new DateTime('August 13, 1970');

// Who is older?

if ($dvone < $spike)
{
    echo '<p>D-Von is older than Spike</p>';
}
else
{
    echo '<p>Spike is older than D-Von</p>';
}

// Age Difference

$diff = $dvone->diff($spike);

echo $diff->format("<p>There is %y years, and %m months and %d days between Spike and D-Von</p>")

?>

<p>The output date is: <?php echo $date->format('m/d/y') ?></p>
