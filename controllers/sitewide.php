<?php
date_default_timezone_set('UTC');
$sitewide['title'] = 'City of Edinburg (Test)';
$sitewide['author'] = 'City of Edinburg';
$sitewide['description'] = 'Welcome to the City of Edinburg Website';

// Autodetect website root path
$serverRoot = $_SERVER['DOCUMENT_ROOT'];
$websiteRoot = dirname(__DIR__);
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$sitewide['root'] = '';
$sitewide['path'] = $requestUri;
if ($serverRoot == $websiteRoot) {
$sitewide['root'] = '/';
} elseif (strpos($websiteRoot, $serverRoot) === 0) {
$sitewide['root'] = substr($websiteRoot, strlen($serverRoot)).'/';
} else {
$websiteArray = explode('/', $websiteRoot);
$reqArray = array_filter(explode('/', $requestUri));
foreach ($websiteArray as $websiteOffset => $websiteDir) {
foreach ($reqArray as $reqOffset => $reqDir) {
if ($websiteDir != $reqDir) {
continue;
}
$max = min(count($websiteArray) - $websiteOffset, count($reqArray) - $reqOffset);
for ($i = 0; $i < $max; $i++) {
if ($websiteArray[$websiteOffset + $i] != $reqArray[$reqOffset + $i]) {
break 2; // Doesn't match
}
}
// Matches
$rootArray = array_slice($reqArray, 0, $reqOffset - $max + 1);
$sitewide['root'] = '/'.implode('/', $rootArray).'/';
break 2;
}
}
}
$template['header'] = __DIR__.'/header.php';
$template['footer'] = __DIR__.'/footer.php';