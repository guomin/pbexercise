<?php
echo "...";
require 'vendor/autoload.php';
try
{
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
}
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}
?>
<html>
    <head>hello</head>
    <body>
        test
    </body>
</html>
