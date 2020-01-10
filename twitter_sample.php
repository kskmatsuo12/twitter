<?php

require 'TwistOAuth.phar';
$consumer_key = '';
$consumer_secret = '';
$access_token = '';
$access_token_secret = '';

$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

// ニックネームからユーザ情報を取得
// $users_params = ['screen_name' => 'まっつん'];
// $users = $connection->get('users/show', $users_params);
// 自分のタイムラインを取得
$home_params = ['count' => '10'];
$home = $connection->get('statuses/home_timeline', $home_params);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>twitter test</title>
</head>
<body>
    <?php var_dump($home) ?>
    test
</body>
</html>