<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mogitate</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/product.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">mogitate</a>
      </a>      
    </div>
  </header>
  <h1>商品一覧</h1>
  <form action="productdetail.php" method="get">
      @csrf
      <label>商品名で検索：<input type="text" name="product_name"></label>
      <br />
      <input taype="submit" name="submit" value="検索" />
    </form>
    
    <main class="main">
      <div class="grid-container">
        <div class="grid-item"><img src="{{ asset('storage/kiwi.jpg') }}" alt="キウイ" >
        <div class="grid-item"><img src="{{ asset('storage/strawberry.png') }}" alt="ストロベリー" >
        <div class="grid-item"><img src="{{ asset('storage/orange.jpg') }}" alt="オレンジ" >
        <div class="grid-item"><img src="{{ asset('storage/suika.jpeg') }}" alt="スイカ"  >
        <div class="grid-item"><img src="{{ asset('storage/peach.jpg') }}" alt="ピーチ"  >
        <div class="grid-item"><img src="{{ asset('storage/masukatto.jpg') }}" alt="マスカット"  >
      </div>
    </main>
</body>

</html>
