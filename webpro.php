<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home': default:
        include('home.php');
        break;
    case 'subject':
        include('module/subject/index.php');
        break;
    case 'teacher':
        include('module/teacher/index.php');
        break;
}