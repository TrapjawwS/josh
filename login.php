<?php
# https://gist.github.com/eric1234/5700719

function auth($username, $password, $realm='Administration') {
  if( $_SERVER['PHP_AUTH_USER'] != $username ||
    $_SERVER['PHP_AUTH_PW'] != $password ) {
    header("WWW-Authenticate: Basic realm=\"$realm\"");
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access Denied';
    exit;
  }
}