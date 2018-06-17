<?php

$games = array(
  // Week 1 - Game + Duty
    array(
      'uid' => 'Game1',
      'summary' => 'SVL • UTS v ASIMS',
      'start' => '2018-05-27 13:45:00',
      //'end' => '2018-05-27 15:15:00',
      'description' => 'UTS defeated ASIMS 3-0'
    ),
    array(
      'uid' => 'Duty1',
      'summary' => 'SVL • Duty',
      'start' => '2018-05-27 15:15:00',
      //'end' => '2018-05-27 17:00:00',
      'description' => 'Duty for HC v USYD L'
    ),
    // Week 2 - Game
    array(
      'uid' => 'Game2',
      'summary' => 'SVL • UTS v ILLA',
      'start' => '2018-06-03 10:20:00',
      //'end' => '2018-06-03 12:00:00',
      'description' => 'UTS defeated ILLA 3-0'
    ),
    // Week 3 - Game + Duty
    array(
      'uid' => 'Game3',
      'summary' => 'SVL • UTS v CITY',
      'start' => '2018-06-10 13:45:00',
      //'end' => '2018-06-10 15:30:00',
      'description' => 'CITY defeated UTS 3-2'
    ),
    array(
      'uid' => 'Duty3',
      'summary' => 'SVL • Duty',
      'start' => '2018-06-10 12:00:00',
      //'end' => '2018-06-10 13:45:00',
      'description' => 'Duty for Div 1 HC O v VOS'
    ),
    // Week 4 - Game + Duty
    array(
      'uid' => 'Game4',
      'summary' => 'SVL • UTS v SNV',
      'start' => '2018-06-17 13:45:00',
      //'end' => '2018-06-17 15:30:00',
      'description' => 'UTS defeated SNV 3-2'
    ),
    array(
      'uid' => 'Duty4',
      'summary' => 'SVL • Duty',
      'start' => '2018-06-17 12:00:00',
      //'end' => '2018-06-17 13:45:00',
      'description' => 'Duty for Div 1 UTS B v EAGLES'
    ),
    // Bye
    array(
      'uid' => 'Bye',
      'summary' => 'SVL • Bye',
      'start' => '2018-06-24 08:50:00',
      //'end' => '2018-06-24 15:30:00',
      'description' => ''
    ),
    // Week 5 - Game
    array(
      'uid' => 'Game5',
      'summary' => 'SVL • UTS v EAGLES',
      'start' => '2018-07-01 08:50:00',
      //'end' => '2018-07-01 10:20:00',
      'description' => ''
    ),
    // Week 6 - Game + Duty
    array(
      'uid' => 'Game6',
      'summary' => 'SVL • UTS v HC',
      'start' => '2018-07-08 12:00:00',
      'description' => ''
    ),
    array(
      'uid' => 'Duty6',
      'summary' => 'SVL • Duty',
      'start' => '2018-07-08 13:45:00',
      'description' => 'Duty for USYD B v SNV'
    ),
    // Week 7 - Bye
    array(
      'uid' => 'Bye7',
      'summary' => 'SVL • Bye',
      'start' => '2018-07-15 08:50:00',
      'description' => ''
    ),
    // Week 8 - Game + Duty
    array(
      'uid' => 'Game8',
      'summary' => 'SVL • UTS v UTS',
      'start' => '2018-07-22 12:00:00',
      'description' => ''
    ),
    array(
      'uid' => 'Duty8',
      'summary' => 'SVL • Duty',
      'start' => '2018-07-22 12:00:00',
      'description' => 'Duty for HC v CITY'
    ),
    // Week 9 - Game + Duty
    array(
      'uid' => 'Game9',
      'summary' => 'SVL • UTS v USYD L',
      'start' => '2018-07-29 13:45:00',
      'description' => ''
    ),
    array(
      'uid' => 'Duty9',
      'summary' => 'SVL • Duty',
      'start' => '2018-07-29 12:00:00',
      'description' => 'Duty for Div 1 UTS B v UNSW'
    ),
    // Week 10 - Game
    array(
      'uid' => 'Game10',
      'summary' => 'SVL • UTS v USYD B',
      'start' => '2018-08-05 12:00:00',
      'description' => ''
    ),
    // Week 11 - Game
    array(
      'uid' => 'Game11',
      'summary' => 'SVL • UTS v END',
      'start' => '2018-08-12 12:00:00',
      'description' => ''
    ),
);

echo "
BEGIN:VCALENDAR<br>
VERSION:2.0<br>
URL:<br>
PRODID:-//Blair Hardaker<br>
NAME:UTS W SVL 2018<br>
X-WR-CALNAME:UTS W SVL 2018<br>
DESCRIPTION:SVL dates for the UTS Honours White squad<br>
X-WR-CALDESC:SVL dates for the UTS Honours White squad<br>
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
    //echo "DTEND:" . date('Ymd\THis', strtotime($game['end'])) . "<br>";
    echo "DURATION:" . "P1H30M<br>";
    echo "SUMMARY:" . $game['summary'] . "<br>";
    echo "DESCRIPTION:" . $game['description'] . "<br>";
    echo "END:VEVENT<br>";
};

echo "END:VCALENDAR";

?>
