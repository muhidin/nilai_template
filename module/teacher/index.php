<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : 'view';
switch ($submodule) {
    case 'view': default:
        include('module/teacher/view.php');
        break;
    case 'add':
        include('module/teacher/add.php');
        break;
    case 'save':
        include('module/teacher/save.php');
        break;
    case 'edit':
        include('module/teacher/edit.php');
        break;
    case 'update':
        include('module/teacher/update.php');
        break;
    case 'delete':
        include('module/teacher/delete.php');
        break;
}