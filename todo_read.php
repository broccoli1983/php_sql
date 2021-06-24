<?php



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

// SQL作成&実行（データ参照）
$sql = 'SELECT * FROM t_waste ORDER BY waste_id ASC';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); // SQLを実行

if ($status == false) {
  // 失敗の場合
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  // 成功の場合
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = '';
  foreach ($result as $record) {
    $output .= "<tr><td>{$record['waste_material']}</td>
                    <td>{$record['waste_weight']}</td>
                    <td>{$record['waste_form']}</td><tr>";
  }
  // echo '<pre>';
  // var_dump($result);
  // echo '</pre>';
  // exit();
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>廃棄物回収リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>廃棄物回収リスト（一覧画面）</legend>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <!-- <th>waste_material</th>
          <th>waste_weight</th>
          <th>waste_form</th> -->
          <th>素材</th>
          <th>重量</th>
          <th>形状</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
  <script>
    const result = <?= json_encode($result) ?>;
    console.log(result);
  </script>
</body>

</html>