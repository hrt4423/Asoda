<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
        <form action="" method="post">
        <div class="err_msg"><?php echo $err_msg['email']; ?></div>
        <label for=""><span>メールアドレス</span>
          <input type="email" name="email" id=""><br>
        </label>
        <div class="err_msg"><?php echo $err_msg['password']; ?></div>
        <label for=""><span>パスワード</span>
          <input type="text" name="password" id=""><br>
        </label>
        <input type="submit" value="ログイン">
        </form>
        <a href="新規登録画面">新規登録<a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>