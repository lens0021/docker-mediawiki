<?php
# Database settings
$wgDBserver = "localhost";
$wgDBname = "femiwiki";
$wgDBuser = "root";
$wgDBpassword = "root";

# AWS
$wgAWSCredentials = [
        'key' => '<something>',
        'secret' => '<something>',
        'token' => false
];
$wgAWSRegion = 'us-east-1';
$wgAWSBucketPrefix = "<something>";

# Mail
$wgSMTP = array(
    'host' => "SMTP-HOST-NAME",
    'IDHost' => "femiwiki.com",
    'port' => 25,
    'auth' => true,
    'username' => "USERNAME",
    'password' => "PASSWORD"
);

# Other
$wgSecretKey = "SECRET-KEY";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "UPGRADE-KEY";

