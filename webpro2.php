<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home':
    default:
        $active = 'home';
        break;
    case 'subject':
        $active = 'subject';
        break;
    case 'teacher':
        $active = 'teacher';
        break;
}
