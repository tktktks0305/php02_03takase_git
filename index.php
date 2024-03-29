<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 自作CSSの読み込み -->
    <link rel="stylesheet" href="./css/layout.css">
    <!-- Font Awesome読み込み -->
    <script src="https://kit.fontawesome.com/f569121d87.js" crossorigin="anonymous"></script>
    <title>アイテム登録</title>
</head>

<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="display.php">持ち物管理アプリPrototype</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">アイテム登録</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="display.php">登録アイテム一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">（作成中）保管場所登録</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">（作成中）登録アイテム分析</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="container container-m">
  <legend class="mb-3">アイテム登録</legend>

  <form method="post" action="insert.php" enctype="multipart/form-data">
  
    <div class="row mb-3">
      <div class="mt-5 mb-3 col-md-6">
          アイテムの画像：<input type="file" name="fname" accept="image/*">
      </div>
      <div class="thumbnail col-md-6">
        <img src="./img/dummy.webp" alt="#" class="w-100">
      </div>
    </div>
  

    <div class="row mb-3">
      <div class="col-md-4 mb-3">
        <label class="form-label">カテゴリ</label>
        <!-- <input type="text" class="form-control" placeholder="Cheese"> -->
        <select name="category" id="category" class="form-select" required>
          <option value="トップス">トップス</option>
          <option value="ボトムス">ボトムス</option>
          <option value="ワンピース">ワンピース</option>
          <option value="セットアップ">セットアップ</option>
          <option value="アウター">アウター</option>
          <option value="シューズ">シューズ</option>
          <option value="バッグ">バッグ</option>
          <option value="アクセサリー">アクセサリー</option>
          <option value="その他">その他</option>
        </select>
      </div>

      <div class="col-md-4 mb-3">
        <label class="form-label">サイズ</label>
        <select name="size" id="size" class="form-select" required>
          <option value="XS">XS</option>
          <option value="S">S</option>
          <option value="M">M</option>
          <option value="L">L</option>
          <option value="XL">XL</option>
          <option value="その他">その他</option>
        </select>
      </div>
      <div class="col-md-4">
        <label class="form-label">色</label>
        <input type="color" name="color" class="form-select" list required>
      </div>
    </div>
    
    <div class="row mb-3">
      <div class="col-md-6 mb-3">
        <label class="form-label">購入時期</label>
        <input type="date" name="date" class="form-control" min="1980-01-01">
      </div>

      <div class="col-md-6">
        <label class="form-label">購入金額</label>
        <select name="price" id="price" class="form-select" required>
          <option value="0-999円">      0-999円</option>
          <option value="1,000-2,999円">   1,000-2,999円</option>
          <option value="3,000-4,999円">   3,000-4,999円</option>
          <option value="5,000-9,999円">   5,000-9,999円</option>
          <option value="10,000円以上">  10,000円以上</option>
        </select>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6 mb-3">
        <label class="form-label">保管場所</label>
        <select name="location" id="location" class="form-select" required>
          <option></option>
          <option value="国内実家">国内実家</option>
          <option value="国内倉庫">国内倉庫</option>
          <option value="海外自宅">海外自宅</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label">ステータス</label>
        <select name="status" id="status" class="form-select" required>
          <option></option>
          <option value="自分で使用中">自分で使用中</option>
          <option value="人に貸してる">人に貸してる</option>
          <option value="処分予定">処分予定</option>
          <option value="売却予定">売却予定</option>
          <option value="悩み中">悩み中</option>
        </select>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">メモ</label>
      <textarea name="memo" class="form-control" placeholder="メモを入力"></textarea>
    </div>

    <button type="submit" class="btn btn-success w-100 mt-5">登録</button>
  </form>
</div>
<!-- Main[End] -->

<footer class="footer container-m">MIL 4th php02_03takase</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
// 画像サムネイル表示
// アップロードするファイル選択したら（inputに変化があったら）発動
  $('input[type=file]').change(function(){
    // 選択したファイルを取得しfile変数に格納
    let file = $(this).prop('files')[0];
    // 画像以外は処理を停止
    if (!file.type.match('image.*')) {
      $(this).val('');
      $('.thumbnail > img').html('');
      return;
    }
    // 画像表示
    let reader = new FileReader();
    reader.onload = function() {
      $('.thumbnail > img').attr('src', reader.result);
    };
    console.log(reader);
    reader.readAsDataURL(file);
  })
</script>

</body>
</html>
