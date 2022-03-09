<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="iframe-css.php?_=<?= time() ?>&view_head_height=<?= $view_head_height ?>">
    <link rel="stylesheet" href="client.css?_=<?= time() ?>">

</head>

<body>
<div id="head">
    <h3 class="alert alert-primary">掲示板</h3>
    <div id="content">
	    <form action="" method="POST" target="myframe">
	        <div><span style='display:inline-block;width:100px;'>件名</span> <input class="entry" type="text" name="message"> <input type="submit" value="投稿" class="ebutton"></div>
	        <div><span style='display:inline-block;width:100px;'>ユーザ</span> <input class="entry" type="text" name="user"></div>
	        <div>
	            <textarea id="body" name="body"></textarea>
	        </div>
	    </form>
    </div>
</div>

<iframe id="extend" src="control.php?page=init" name="myframe"></iframe>

</body>
</html>
