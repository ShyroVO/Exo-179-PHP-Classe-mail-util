<?php
require './classes/Email.php';

$mail1 = new Email('manim46198@fironia.com', 'Subject', 'My message');

$mail1->sendMail();