<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajax Work</title>
</head>
<body>
    <form action="" method="post" class="form">
        <div class="text-area">
            <p>XXXXXXXXXXXXXX</p>
        </div>
        <div class="input-area">
            <p><?php echo date('Y/M/d H:i:s'); ?></p>
            <input type="text" name="name" class="input-text js-get-val-name" autocomplete="off" placeholder="名前">
            <input type="text" name="age" class="input-text js-get-val-age" autocomplete="off" placeholder="年齢">
            <input type="submit" value="送信" class="btn">
        </div>
        
    </form>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="app.js"></script>
</body>
</html>