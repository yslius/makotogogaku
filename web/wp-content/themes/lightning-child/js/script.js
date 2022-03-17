jQuery(function($){
/*===========================================================*
 * アニメーション
 *===========================================================*/

function fadeAnime(){
    var minusPoint = 50;                      // 要素より、50px上から動く  
    // ふわっ（その場で）
    $('.fadeInTrigger').each(function(){       // fadeInTriggerというクラス名が
		var elemPos = $(this).offset().top-minusPoint;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('fadeIn');            // 画面内に入ったらfadeInというクラス名を追記
		}
		});
    // ふわっ（下から）
	$('.fadeUpTrigger').each(function(){       // fadeUpTriggerというクラス名が
		var elemPos = $(this).offset().top-minusPoint;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('fadeUp');            // 画面内に入ったらfadeUpというクラス名を追記
		}
		});

	// パタッ（左上へ）
	$('.flipLeftTopTrigger').each(function(){  // flipLeftTopTriggerというクラス名が
		var elemPos = $(this).offset().top-minusPoint;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('flipLeftTop');       // 画面内に入ったらflipLeftTopというクラス名を追記
		}
		});
    
    // パタッ（右上へ）
    $('.flipRightTopTrigger').each(function(){ // flipRightTopTriggerというクラス名が
		var elemPos = $(this).offset().top-minusPoint;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('flipRightTop');      // 画面内に入ったらflipRightTopというクラス名を追記
		}
		});
	
	// ボンッ（拡大）
	$('.zoomInTrigger').each(function(){       // zoomInTriggerというクラス名が
		var elemPos = $(this).offset().top-minusPoint;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('zoomIn');            // 画面内に入ったらzoomInというクラス名を追記
		}
		});	
}

/*===========================================================*
 * 関数をまとめる
 *===========================================================*/

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	fadeAnime(); // アニメーションの関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load',function(){
	
	// bodyにappearクラス付与
	$('body').addClass('appear');

}); // ここまでページが読み込まれたらすぐに動かしたい場合の記述
});