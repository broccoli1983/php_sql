<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- style.cssファイルの読み込み -->
  <link rel="stylesheet" href="css/style.css">
  <title>廃棄物回収依頼（入力画面）</title>
</head>

<body>
  <!-- <div class="form-group"> -->
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>廃棄物回収依頼（入力画面）</legend>
      <a href="todo_read.php">案件一覧画面</a>
      <div class="col-sm-8 col-sm-offset-2">
        <div class="form_group">
          <div>
            <p class="form_item_label"><span class="labe-must">必須</span>企業・団体名</p>
            <input type="text" class="form_item_input" required placeholder="例：株式会社○○" name="waste_company">
          </div>
          <div>
            <label>
              <p class="form_item_label"><span class="labe-must">必須</span>担当者名</p>
              <input type="text" class="form_item_input" required placeholder="例：廃棄 プラ子" name="waste_cutomer_name">
          </div>
          <div>
            <p class="form_item_label"><span class="labe-must">必須</span>部署名</p>
            <input type="text" class="form_item_input" required placeholder="例：商品開発部" name="waste_division">
          </div>
          <div>
            <p class="form_item_label"><span class="labe-must">必須</span>電話番号</p>
            <input type="text" class="form_item_input" required placeholder="例：0921234567" name="waste_tel">
          </div>
          <div>
            <p class="form_item_label"><span class="labe-must">必須</span>郵便番号</p>
            <input type="text" class="form_item_input" required placeholder="例：8120000" name="waste_zip">
          </div>
          <div>
            <p class="form_item_label"><span class="labe-must">必須</span>住所</p>
            <input type="text" class="form_item_input" required placeholder="例：福岡市中央区大手門1-1-1" name="waste_address">
          </div>
          <div>
            <p class="form_item_label"><span class="labe-must">必須</span>
              <!-- 素材 <input type="text" name="waste_material"> -->
              <for="list_material">素材
            </p>
            <select id="list_material" name="waste_material">
              <option value="">選択してください</option>
              <option value="廃プラスチック類">廃プラスチック類</option>
              <option value="ガラス・陶器くず">ガラス・陶器くず</option>
              <option value="金属くず">金属くず</option>
              <option value="その他">その他</option>
            </select>
          </div>
          <!-- 立米単位で見積もりするようなので重量は必須でなくても良いかも -->
          <div>
            <p class="form_item_label"><span class="label-must">必須</span>重量</p>
            <input type="text" class="form_item_input" placeholder="例：10t" name="waste_weight">
          </div>
          <div>
            <p class="form_item_label"><span class="labe-must">必須</span>
              <!-- 形状 <input type="text" name="waste_form">  -->
              <for="list_form">形状
            </p>
            <select id="list_form" name="waste_form">
              <option value="">選択してください</option>
              <option value="容器状">容器状</option>
              <option value="板状">板状</option>
              <option value="粉状">粉状</option>
              <option value="フレーク状">フレーク状</option>
              <option value="その他">その他</option>
            </select>
          </div>
          <div>
            <button class="submit_button">送信</button>
          </div>
        </div>
      </div>
    </fieldset>
  </form>

</body>

</html>