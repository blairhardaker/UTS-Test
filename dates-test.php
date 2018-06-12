<?php

$games = array(
  // Week 1 - Game + Duty
    array(
      'uid' => 'Game1',
      'summary' => 'Week 1 | UTS v ASIMS',
      'start' => '2018-05-27 13:45:00',
      'end' => '2018-05-27 15:15:00',
      'description' => 'UTS defeated ASIMS 3-0.'
    ),
    array(
      'uid' => 'Duty1',
      'summary' => 'Week 1 | Duty',
      'start' => '2018-05-27 15:15:00',
      'end' => '2018-05-27 17:00:00',
      'description' => 'Duty for HC v USYD L.'
    ),
    // Week 2 - Game
    array(
      'uid' => 'Game2',
      'summary' => 'Week 2 | UTS v ILLA',
      'start' => '2018-06-03 10:20:00',
      'end' => '2018-06-03 12:00:00',
      'description' => 'UTS defeated ILLA 3-0.'
    ),
    // Week 3 - Game + Duty
    array(
      'uid' => 'Game3',
      'summary' => 'Week 3 | UTS v CITY',
      'start' => '2018-06-10 13:45:00',
      'end' => '2018-06-10 15:30:00',
      'description' => 'CITY defeated UTS 3-2.'
    ),
    array(
      'uid' => 'Duty3',
      'summary' => 'Week 3 | Duty',
      'start' => '2018-06-10 12:00:00',
      'end' => '2018-06-10 13:45:00',
      'description' => 'Duty for'
    ),
    // Week 4 - Game + Duty
    array(
      'uid' => 'Game4',
      'summary' => 'Week 4 | UTS v SNV',
      'start' => '2018-06-17 13:45:00',
      'end' => '2018-06-17 15:30:00',
      'description' => ''
    ),
    array(
      'uid' => 'Duty4',
      'summary' => 'Week 4 | Duty',
      'start' => '2018-06-17 12:00:00',
      'end' => '2018-06-17 13:45:00',
      'description' => 'Duty for UTS B v EAGLES.'
    ),
    // Bye
    array(
      'uid' => 'Bye1',
      'summary' => 'Bye Week',
      'start' => '2018-06-25 08:50:00',
      'end' => '2018-06-25 15:30:00',
      'description' => ''
    ),
    // Week 5
    array(
      'uid' => 'Game5',
      'summary' => 'Week 5 | UTS v EAGLES',
      'start' => '2018-07-01 08:50:00',
      'end' => '2018-07-01 10:20:00',
      'description' => ''
    ),
    // Week 6

    // Week 7

    // Week 8

    // Week 9

    // Week 10

    // Week 11
);

echo "
BEGIN:VCALENDAR<br>
VERSION:2.0<br>
URL:<br>
PRODID:-//Blair Hardaker<br>
NAME:UTS White SVL 2018<br>
X-WR-CALNAME:UTS White SVL 2018<br>
DESCRIPTION:SVL dates for the UTS Honours White squad.<br>
X-WR-CALDESC:SVL dates for the UTS Honours White squad.<br>
TIMEZONE-ID:Australia/Sydney<br>
X-WR-TIMEZONE:Australia/Sydney<br>
REFRESH-INTERVAL;VALUE=DURATION:PT15M<br>
X-PUBLISHED-TTL:PT15M<br>
METHOD:PUBLISH<br>
";

foreach ($games as $game) {
    echo "BEGIN:VEVENT<br>";
    echo "UID:" . $game['uid'] . "<br>";
    echo "DTSTAMP:" . date('Ymd\THis', strtotime(date('Y-m-d'))) . "<br>";
    echo "DTSTART:" . date('Ymd\THis', strtotime($game['start'])) . "<br>";
    echo "DTEND:" . date('Ymd\THis', strtotime($game['end'])) . "<br>";
    echo "SUMMARY:" . $game['summary'] . "<br>";
    echo "DESCRIPTION:" . $game['description'] . "<br>";
    echo "END:VEVENT<br>";
};

echo "END:VCALENDAR";

?>
