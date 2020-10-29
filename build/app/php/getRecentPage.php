<?php
session_start();

function getRecentPage()
{
    $pageName = basename($_SERVER['REQUEST_URI']);
    $removePageExtension = @explode('.', $pageName);
    $pageName = $removePageExtension[0];

    $sessionIsSet = isset($_SESSION['pages']);
    if (!$sessionIsSet) {
        $_SESSION['pages'] = ['current' => $pageName, 'last' => $pageName];
    }

    $isCurrentPageSame = $pageName == $_SESSION['pages']['current'];
    if (!$isCurrentPageSame) {
        $_SESSION['pages'] = ['current' => $pageName, 'last' => $_SESSION['pages']['current']];
    }

    return $_SESSION['pages']['last'];
}
