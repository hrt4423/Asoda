<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/Profile_question.css">
  <title>Profile_question</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .btn-purple {
  background-color: #653A91;
  border-color: #653A91;
  color: #fff;
}
.btn-purple:hover {
  background-color: #4b2661;
  border-color: #4b2661;
  color: #fff;
}
.btn-purple:focus {
  box-shadow: none;
  color: #fff;
}

.header_size {
  /* height: 150px; */
  background-color: #b164ff;
}

.horizontal {
  display: flex;
  text-align: center;
  height: 4.5vw;
}

.search {
  width: 200px;
  height: 37px;
  margin-right: 20px;
}

.right {
  margin-left: auto;
  display: flex;
  margin-top: 1.5vw;
}

.text {
  color: white;
  font-size: 30px;
  font-weight: bold;
  flex-grow: 1;
}

.circle {
  width: 37px;
  height: 37px;
  border-radius: 50%;
  background-color: #653A91;
  margin-right: 20px;
}

.btn-purple {
  background-color: #653a91;
  color: #fff;
}

.btn {
  margin-right: 20px;
}

.underline {
  text-decoration: none; /* 下線をなくす */
  display: inline-block;
  border-bottom: 10px solid #653A91;
}

a:hover {
  text-decoration: none;
  color: white;
  width: 2vw;
}
.logo{
  margin-top: 0.9vw;
  width: 10vw;
  height: 2.7vw;
}
  </style>
</head>
<body class="body">

    <div class="header_size">
      <div class="horizontal">
          <img class="logo" src="images/logo.png" height="60" alt="ロゴ">
        <div class="right">

          <div class="input-group mb-3 search" >
            <div class="input-group-prepend">
              <span class="input-group-text">
              <i class="fa fa-search"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="検索" aria-label="検索" aria-describedby="basic-addon2">
          </div>

          <div class="circle"></div>
            <div class="dropdown">
                <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  投稿する
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">質問</a>
                  <a class="dropdown-item" href="#">記事</a>
                </div>
            </div>
        </div>
      </div>

    </div>
<!-- ↑ヘッダー -->
<div class="profile">
    <div class="profile_area">
      <div class="circle_area">
        <div class="circle1"></div>
      </div>
      <p class="user_name">平田</p>
      <p class="user_mail">hirata@gmail.com</p>
      <p class="user_point">999pt</p>
      <a href="" class="link">編集</a>
    </div>

    <div class="my_area">
      <p class="p1">投稿した質問</p>
      <div class="question_area">
          <div class="horizontal1">
            <a href="#" class="text2">質問</a>
            <a href="#" class="text1 ">記事</a>
            <a href="#" class="text1 ">投稿</a>
          </div>
          
          <div class="naiyou_area">
            <div class="naiyou">
                <div class="circle_area2">
                  <div class="circle2"></div>
                    <p class="user2">@user</p>
                </div>
                <div class="syousai_area">
                  <p class="day">yyyy/mm/ddに投稿</p>
                  <p class="title">タイトル</p>
                  <div class="tag_area">
                      <img src="./images/pin.png" alt="" class="img2">
                      <p class="tag">タグ</p>
                  </div>
                  <p class="answer">回答件数：xx</p>
                </div>
                  
                <div class="good_area">
                  <div class="good_img">
                    <img src="./images/good.png" alt="" class="img3">
                  </div>
                </div>
                <p class="good">134</p>
              </div>

              <div class="naiyou">
                <div class="circle_area2">
                  <div class="circle2"></div>
                    <p class="user2">@user</p>
                </div>
                <div class="syousai_area">
                  <p class="day">yyyy/mm/ddに投稿</p>
                  <p class="title">タイトル</p>
                  <div class="tag_area">
                      <img src="./images/pin.png" alt="" class="img2">
                      <p class="tag">タグ</p>
                  </div>
                  <p class="answer">回答件数：xx</p>
                </div>
                  
                <div class="good_area">
                  <div class="good_img">
                    <img src="./images/good.png" alt="" class="img3">
                  </div>
                </div>
                <p class="good">134</p>
              </div>

              <div class="naiyou">
                <div class="circle_area2">
                  <div class="circle2"></div>
                    <p class="user2">@user</p>
                </div>
                <div class="syousai_area">
                  <p class="day">yyyy/mm/ddに投稿</p>
                  <p class="title">タイトル</p>
                  <div class="tag_area">
                      <img src="./images/pin.png" alt="" class="img2">
                      <p class="tag">タグ</p>
                  </div>
                  <p class="answer">回答件数：xx</p>
                </div>
                  
                <div class="good_area">
                  <div class="good_img">
                    <img src="./images/good.png" alt="" class="img3">
                  </div>
                </div>
                <p class="good">134</p>
              </div>
          </div>

      </div>
    </div>
</div>


  <script>
    $(document).ready(function() {
     // リンクをクリックした時の処理
      $(".underline").click(function(e) {
        e.preventDefault(); // デフォルトのリンク遷移を防止

        // すでにアクティブなリンクがある場合、その下線を消す
        $(".underline.active").removeClass("active");
        // クリックされたリンクに下線をつける
        $(this).addClass("active");
      });
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>