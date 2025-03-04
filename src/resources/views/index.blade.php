@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
@endsection

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">mogitate</a>
      </a>      
    </div>
  </header>
      
    <main>
    <img src="{{ asset('storage/masukatto.jpg') }}" alt="代替テキスト" width="374px" height="350px" >
    <img src="{{ asset('storage/peach.jpg') }}" alt="代替テキスト" width="374px" height="350px" >
    <img src="{{ asset('storage/suika.jpeg') }}" alt="代替テキスト" width="374px" height="350px" >
    <img src="{{ asset('storage/orange.jpg') }}" alt="代替テキスト" width="374px" height="350px" >
    <img src="{{ asset('storage/strawberry.png') }}" alt="代替テキスト" width="374px" height="350px" >
    <img src="{{ asset('storage/kiwi.jpg') }}" alt="代替テキスト" width="374px" height="350px" >
</main>
</body>

</html>
