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
</head> 

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">mogitate</a>  
    </div>    
</header>

  <h1>商品一覧</h1>

<form action="/products/search" method="get">
  <input type="search" class="search-input" placeholder="商品名で検索">
  <input type="submit" class="search-btn" value="検索">
</form>

    <h2>価格順で表示</h2>
    
    
    <main class="main">
      <div class="flex__item">
        <div class="practice__card">
         <div class="card__img">
          <img src="/storage/kiwi.jpg" alt="キウイ" >
         </div>
          <div class="card__content">
            <h2 class="card__ttl">
            キウイ ￥８００
            </h2>
          </div>
        </div>
      </div>

      <div class="practice__card">
       <div class="card__img">
        <img src="/storage/strawberry.png" alt="ストロベリー" >
       </div>
         <div class="card__content">
           <h2 class="card__ttl">
           ストロベリー　￥１２００
           </h2>
         </div>
        </div>
      </div>

      <div class="practice__card">
       <div class="card__img">
         <img src="/storage/orange.jpg" alt="オレンジ" >
       </div>
         <div class="card__content">
           <h2 class="card__ttl">
          オレンジ　￥８５０
           </h2>
          </div>
         </div>
      </div>  

      <div class="practice__card">
       <div class="card__img">
        <img src="/storage/suika.jpeg" alt="スイカ"  >
      </div> 
         <div class="card__content">
          <h2 class="card__ttl">
           スイカ　￥７００
          </h2>
         </div>
        </div>
      </div>

      <div class="practice__card">
       <div class="card__img">
        <img src="/storage/peach.jpg" alt="ピーチ"  >
       </div>
        <div class="card__content">
         <h2 class="card__ttl">
          ピーチ　￥１０００
         </h2>
        </div>
       </div>
      </div>

      <div class="practice__card">
       <div class="card__img">
        <img src="storage/masukatto.jpg" alt="マスカット"  >
       </div>
        <div class="card__content">
         <h2 class="card__ttl">
          シャインマスカット　￥１４００
         </h2>
        </div>
       </div>
      </div>











      
      
        
      </div>
    </main>
</body>

</html>
