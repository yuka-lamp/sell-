// ドロワーメニュー
$(document).ready(function() {
  $('.drawer').drawer();
});

// よくあるご質問 アコーディオン
$(".ac dt").on("click", function() {
  $(this).next().slideToggle();
});

var itemHeights = [];
var returnHeight;

$(function(){
  // SELL+の実績 「続きを読む」
  $(".grad-item").each(function(){ //ターゲット(縮めるアイテム)
    var thisHeight = $(this).height(); //ターゲットの高さを取得
    itemHeights.push(thisHeight); //それぞれの高さを配列に入れる
    $(this).addClass("is-hide"); //CSSで指定した高さにする
    returnHeight = $(this).height(); //is-hideの高さを取得
  });
  //スムーススクロール
  $('a[href^="#"]').click(function() {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
  //プライバシーポリシー モーダル
  $('.js-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    return false;
  });
});

// SELL+の実績 「続きを読む」
$(".grad-trigger").click(function(){ //トリガーをクリックしたら
  if(!$(this).hasClass("is-show")) {
    var index = $(this).index(".grad-trigger"); //トリガーが何個目か
    var addHeight = itemHeights[index]; //個数に対応する高さを取得
    $(this).addClass("is-show").next().animate({height: addHeight},200).removeClass("is-hide"); //高さを元に戻す
  } else {
    $(this).removeClass("is-show").next().animate({height: returnHeight},200).addClass("is-hide"); //高さを制限する
  }
});

// クリックでハンバーガーメニューを閉じる
$('.drawer-menu a[href]').on('click', function(event) {
    $('.drawer-toggle').trigger('click');
});
