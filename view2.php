<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="client.css?_=<?= time() ?>">

</head>

<body>
<div id="databody">

    <h2>投稿一覧 (<?= $kensu ?>件)</h2>
    <ul>
        <?= $line_data ?>
    </ul>

</div>
</body>
</html>
