<?php

declare(strict_types=1);
namespace Project;
use DateTime;
use DateTimeZone;

$publishDate = '2014-08-24 09:14:00';

$utcDateTime = new DateTime($publishDate, new DateTimeZone('America/New_York'));

$localDateTime = clone $utcDateTime;

$localDateTime->setTimezone(new DateTimeZone('UTC'));

?>

<p>The UTC date/time is: <?= $utcDateTime->format("y-m-d H:i:s") ?></p>
<p>The New York date/time is <?= $localDateTime->format("Y-m-d H:i:s") ?></p>
