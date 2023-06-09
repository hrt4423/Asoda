<?php
  class attached_tags {
    private $pdo;
    private $hostname;
    private $username;
    private $password;
    private $dbname;

    public function __construct() {
      require_once('connection.php');
      $connection = new Connection();
      $this->pdo = $connection->getPdo();
      $this->hostname = $connection->getHostname();
      $this->username = $connection->getUsername();
      $this->password = $connection->getPassword();
      $this->dbname = $connection->getDbname();
    }

        // タグと投稿の関連付け
        public function addTags($post_id, $tagIds) {
            // データベース接続
            $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
            if ($conn->connect_error) {
                die("データベースへの接続に失敗しました: " . $conn->connect_error);
            }

            // 関連付けをデータベースに追加するためのプリペアドステートメントを作成
            $sql = "INSERT INTO attached_tags (post_id, tag_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            // パラメータをバインド
            $stmt->bind_param("ii", $post_id, $tag_id);

            foreach ($tagIds as $tag_id) {
                // ステートメントを実行
                if ($stmt->execute()) {
                    echo "タグが投稿に関連付けられました: post_id=$post_id, tag_id=$tag_id<br>";
                } else {
                    echo "タグの関連付けに失敗しました: " . $stmt->error . "<br>";
                }
            }

            $stmt->close();
            $conn->close();
        }
    
    
  }

  class AttachedTags{
    private $pdo;
    public function __construct() {
      require_once('connection.php');
      $connection = new Connection();
      $this->pdo = $connection->getPdo();
    } 
  
    public function getAttachedTagsByPostId($postId){
      //SQLの生成
      $sql = "SELECT T.tag_name
              FROM attached_tags as AT
              INNER JOIN tags as T 
              ON AT.tag_id = T.tag_id
              WHERE post_id=?";
      //prepare:準備　戻り値を変数に保持
      $ps = $this->pdo -> prepare($sql);

      //”？”に値を設定する。
      $ps->bindValue(1, $postId, PDO::PARAM_INT); 

      //SQLの実行
      $ps->execute();
      $result = $ps->fetchAll(PDO::FETCH_ASSOC);

      if(empty($result)){
        return '指定したIDに該当するデータはありません。';
      }else{
        return $result;
      } 
    }

    public function searchPostIdsByTag($tagId){
      //SQLの生成
      $sql = "SELECT post_id FROM attached_tags WHERE tag_id=?";
      //prepare:準備　戻り値を変数に保持
      $ps = $this->pdo -> prepare($sql);

      //”？”に値を設定する。
      $ps->bindValue(1, $tagId, PDO::PARAM_INT); 

      //SQLの実行
      $ps->execute();
      $result = $ps->fetchAll(PDO::FETCH_ASSOC);

      if(empty($result)){
        throw new Exception('指定したIDに該当するデータはありません。');
      }else{
        return $result;
      }
    }

    //タグIDを元に投稿を絞り込む
    public function filterPostByTag(array $tagIds){
      require_once('posts.php');
      $posts = new Posts();
      $postIds = array();
      $postRecords = array();

      //タグIDを元に'post_id'を取得（タグが複数の場合があるのでforeach）
      //配列に格納
      foreach($tagIds as $tagId){
        $tmp = $this->searchPostIdsByTag($tagId);
        foreach($tmp as $row){
          array_push($postIds, $row['post_id']);
        }
      }

      //'post_id'から投稿を取得
      foreach($postIds as $row){
        $tmp = $posts->findPostById($row);
        array_push($postRecords, $tmp);
      }

      //post_time列だけ抽出
      $timeArray = array_column( $postRecords, "post_time" );

      //post_timeを基準にソート
      array_multisort( array_map( "strtotime", $timeArray ), SORT_DESC, $postRecords );

      return $postRecords;
    }
  }
?>