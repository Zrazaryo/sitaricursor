<?php
// Load functions untuk get_tab_id (gunakan path absolut relatif ke file ini)
$baseDir = __DIR__;
if (file_exists($baseDir . '/includes/functions.php')) {
    require_once $baseDir . '/includes/functions.php';
}

// Redirect ke halaman landing untuk memilih jenis login dengan mempertahankan parameter tab
$tab_param = (function_exists('get_tab_id') && get_tab_id() > 0) ? '?tab=' . get_tab_id() : '';
header('Location: landing.php' . $tab_param);
exit();
?>
