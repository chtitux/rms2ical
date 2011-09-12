BEGIN:VCALENDAR
PRODID:-//rms2ical.pinade.org//Symfony1.4 pinade.org//EN
VERSION:2.0
CALSCALE:GREGORIAN
METHOD:PUBLISH
X-WR-CALNAME:Mes cours - RMS - <?php echo $nom."\n" ?>
X-WR-TIMEZONE:Europe/Paris
BEGIN:VTIMEZONE
TZID:Europe/Paris
X-LIC-LOCATION:Europe/Paris
BEGIN:DAYLIGHT
TZOFFSETFROM:+0000
TZOFFSETTO:+0200
TZNAME:CEST
DTSTART:19700329T020000
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=-1SU
END:DAYLIGHT
BEGIN:STANDARD
TZOFFSETFROM:+0200
TZOFFSETTO:+0100
TZNAME:CET
DTSTART:19701025T030000
RRULE:FREQ=YEARLY;BYMONTH=10;BYDAY=-1SU
END:STANDARD
END:VTIMEZONE

<?php foreach($liste_cours as $cours): ?>

BEGIN:VEVENT
SUMMARY:<?php echo $cours['title'] ?>

DTSTART:<?php echo date('Ymd\THis', $cours['start']) ?>

DURATION:PT<?php echo $cours['duration']['h'] ?>H<?php echo $cours['duration']['m'] ?>M0S
LOCATION:<?php echo $cours['location'] ?>

DESCRIPTION:<?php echo $cours['title'] ?> <?php echo $cours['description'] ?>

UID:<?php echo $cours['uid'] ?>@rms2ical.pinade.org
END:VEVENT

<?php endforeach ?>

END:VCALENDAR

