<?php

var_dump($_POST);
exit();

if (
  !isset($_POST['waste_company']) || $_POST['waste_company'] == '' ||
  !isset($_POST['waste_cutomer_name']) || $_POST['waste_cutomer_name'] == '' ||
  !isset($_POST['waste_division']) || $_POST['waste_division'] == '' ||
  !isset($_POST['waste_tel']) || $_POST['waste_tel'] == '' ||
  !isset($_POST['waste_zip']) || $_POST['waste_zip'] == '' ||
  !isset($_POST['waste_address']) || $_POST['waste_address'] == '' ||
  !isset($_POST['waste_material']) || $_POST['waste_material'] == '' ||
  !isset($_POST['waste_weight']) || $_POST['waste_weight'] == '' ||
  !isset($_POST['waste_form']) || $_POST['waste_form'] == '' ||
  !isset($_POST['waste_staus']) || $_POST['waste_staus'] == ''
) {
  exit('ParamError...');
}

// データを変数に格納
$waste_company = $_POST['waste_company'];
$waste_cutomer_name = $_POST['waste_cutomer_name'];
$waste_division = $_POST['waste_division'];
$waste_tel = $_POST['waste_tel'];
$waste_zip = $_POST['waste_zip'];
$waste_address = $_POST['waste_address'];
$waste_material = $_POST['waste_material'];
$waste_weight = $_POST['waste_weight'];
$waste_form = $_POST['waste_form'];
$waste_staus = $_POST['waste_staus'];

// DB接続情報
$dbn = 'mysql:dbname=gsacf_d08_10_001;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// SQL作成&実行
$sql = 'INSERT INTO
           t_waste(waste_id,waste_company,waste_cutomer_name,waste_division,
           waste_tel,waste_zip,waste_address,waste_material,waste_weight,
           waste_form,waste_staus,waste_create_date,waste_update_date)
           
           VALUES(NULL, :waste_company, :waste_cutomer_name, :waste_division,
           :waste_tel,:waste_zip,:waste_address,:waste_material,:waste_weight,
           :waste_form,:waste_staus,sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':waste_company,', $todo, PDO::PARAM_STR);
$stmt->bindValue(':waste_cutomer_name', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_division', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_tel', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_zip', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_address', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_material', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_weight', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_form', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':waste_staus', $deadline, PDO::PARAM_STR);
$status = $stmt->execute(); // SQLを実行

if ($status == false) {
  // 失敗の場合
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  // 成功の場合
  header('Location:todo_input.php');
}
