<?php 


///送られたデータが存在しているか確認　⇨ 不備があればエラーを出す。
if(!isset($_POST["grade"]) || $_POST["grade"] === '' || 
   !isset($_POST["class"]) || $_POST["class"] === '' ||
   !isset($_POST["student_number"]) || $_POST["student_number"] === '' ||
   !isset($_POST["student_name"]) || $_POST["student_name"] === '' ||
   !isset($_FILES["up_image"]["name"]) || $_FILES["up_image"]["name"] === '' ||
   !isset($_FILES["up_image"]["type"]) || $_FILES["up_image"]["type"] === '' ||
   !isset($_FILES["up_image"]["tmp_name"]) || $_FILES["up_image"]["tmp_name"] === '' ||
   !isset($_FILES["up_image"]["size"]) || $_FILES["up_image"]["size"] === '' 
    ){
        exit('ParamError');
    };

///データ取得////////////////////////////////////////////////////////////
///テキスト/////////////
if(!empty($_POST)){
    $grade = $_POST["grade"];
    $class = $_POST["class"];
    $student_number = $_POST["student_number"];
    $student_name = $_POST["student_name"];
};


///写真データ////////////
if(!empty($_FILES["up_image"])){
    $img_name = $_FILES["up_image"]["name"];
    $img_type = $_FILES["up_image"]["type"];
    $img_content = $_FILES["up_image"]["tmp_name"];
    $img_size = $_FILES["up_image"]["size"];
};

///写真をローカルフォルダへ移す
$uploaded_path = "images/".$img_name;

$result = move_uploaded_file($_FILES['up_image']['tmp_name'],$uploaded_path);

$command = "python face_recognize.py";
// $full_cmd = $cmd." ".escapeshellarg("$_FILES["up_image"]["name"]");
exec($command,$output);
$output[0];


///db接続/////////////////////////////////////////////////////////////
$dbn ='mysql:dbname=student_db;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
};

///SQL作成＆実行
$sql = 'INSERT INTO alldatas(id, grade, class, student_number, name, img_name, img_type, img_content, img_size, created_at) VALUES (NULL, :grade, :class, :student_number, :name, :img_name, :img_type, :img_content, :img_size, now())';

$stmt = $pdo->prepare($sql);
// var_dump($grade);
// exit();

///バインド変数を設定
$stmt->bindValue(':grade', $grade, PDO::PARAM_INT);
$stmt->bindValue(':class', $class, PDO::PARAM_INT);
$stmt->bindValue(':student_number', $student_number, PDO::PARAM_INT);
$stmt->bindValue(':name', $student_name, PDO::PARAM_STR);
$stmt->bindValue(':img_name', $img_name, PDO::PARAM_STR);
$stmt->bindValue(':img_type', $img_type, PDO::PARAM_STR);
$stmt->bindValue('img_content', $img_content, PDO::PARAM_STR);
$stmt->bindValue(':img_size', $img_size, PDO::PARAM_INT);



///SQL実行　⇨ 失敗するとエラーを出す
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

///input画面へ戻る
header("Location:input.php");
exit();

