<?php
  require_once('./dao/users.php');
  $users = new Users;
  $USER_ID = 1;

  //ファイル名を変更
  $newFileName = date("YmdHis"). "-". $_FILES['file_upload']['name'];
  //ファイルの保存先
  $upload_dir = './images/'. $newFileName;
  //アップロードのチェック
  if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir)){
    $users->updateUserIconPath($USER_ID, $upload_dir);
    echo 'アップロードしました';
    //header('reflesh: 5; Location: ./profile_question.php');
    header('Refresh: 5; URL=./profile_question.php');
  }else{
    echo 'アップロードに失敗しました';
    header('Refresh: 5; URL=./profile_question.php');
  }
?>