<?php
if (session_status() == PHP_SESSION_NONE) {
    session_cache_expire(43200); // 30 dias
    session_start();
}

ob_start();
require_once("core/routes.php");
ob_end_flush();
