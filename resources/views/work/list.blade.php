<!doctype html>
<html lang="ja">

<head>
    <title>商品一覧</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <style>
        .notification-badge {
        position:relative;
        }
        .notification-badge[data-badge]:after {
        content:attr(data-badge);
        position:absolute;
        top:-8x;
        right:-10px;
        font-size:.8em;
        background:green;
        color:white;
        width:18px;height:18px;
        text-align:center;
        line-height:18px;
        border-radius:50%;
        box-shadow:0 0 1px #333;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a href="" class="navbar-brand">商品一覧</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ url('create') }}" class="nav-link">商品登録</a></li>
                        <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link">ログアウト</a></li>
                        <li class="nav-item"><a href="{{ url('create') }}" data-badge="0" class="notification-badge nav-link">カート</a></li>
                    </ul>
                </div>
                @if (Session::has('name'))
		<div id="sample">
		    <p>{{ Session::get('name') }}</p>
		</div>
		@endif
            </nav>
        </div>
    </header>
    <main>
        <section class="bg-light text-center py-5">
            <h2 class="mb-5">商品一覧</h2>
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>商品名</th>
                            <th>カテゴリ</th>
                            <th>販売価格</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($records as $record)
                            <tr>
                                <td>{{$record->shohin_id}}</td>
                                <td>{{$record->shohin_name}}</td>
                                <td>{{$record->category}}</td>
                                <td>{{$record->hanbai_tanka}}</td>
                                <td><button type="button" id="btn_{{ $record->shohin_id }}" data-id="{{ $record->shohin_id }}" class="btn btn-success"><span id="btn_inner_{{ $record->shohin_id }}" data-innerid="{{ $record->shohin_id }}">追加</span></button></td>
                            </tr>
                        @empty
                        
                        @endforelse

                    </tbody>
                </table>
            </div>
        </section>

    </main>
    <footer class="fixed-bottom text-center text-muted py-4">
        Copyright 2020-09 mtake.com
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script>
	(function() {
	    'use strict';
	    var cartItems=[];
	    var itemCnt=0;
	    var cmds = document.getElementsByClassName('btn');
	    var i;
	  
	    for (i = 0; i < cmds.length; i++) {
	      cmds[i].addEventListener('click', function(e) {
	        if($('#btn_inner_'+ this.dataset.id).text()=='追加'){
	       	 $('#btn_inner_'+ this.dataset.id).text("追加済");
	       	 cartItems.push(this.dataset.id);
	       	 itemCnt++;
	       	 $('.notification-badge').attr('data-badge',itemCnt);
	        }else{
	        	$('#btn_inner_'+ this.dataset.id).text("追加");
	        	cartItems.forEach((item, index) => {
			    if(item ===  this.dataset.id) {
			        cartItems.splice(index, 1);
			        itemCnt--;
			        $('.notification-badge').attr('data-badge',itemCnt);
			    }
			});
	        }
	      });
	    }
	  })();
    </script>
</body>

</html>
