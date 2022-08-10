<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<?php //echo latest('pic_block','portpolio',3,100); ?>
<section id="mainBanner" style='height: 1080px;'>
  <div class="Mbanner"></div> 
   <div class="container">
        <div class="abs">
            <h3></h3>
            <button></button>
        </div>
    </div>
</section>
<section id="qna" class="overflow-hidden">
    <div class="container">
        <p class="qbg">
            모두가 좋다고 하는 영양제,<br>
            과연 나에게도 진짜 필요한걸까요?       
        </p><img src="/yubeen/img/Q.png" alt="">
        <i><img src="/yubeen/img/end.png" alt=""></i>
        <div class="abg">
            <p>
              우리는 생활 환경, 식습관, 건강 상태에 따라<br>
                각자 다른 건강 관리가 필요합니다.
                <span>
                마이퍼즐은 고객 한 분, 한 분에 맞춘 건강기능식품이<br>
                필요하다는 생각으로부터 출발했습니다.
                </span>
                
            </p><img src="/yubeen/img/A.png" alt="">
        </div>
    </div>
</section>

<section id="system">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div>
                    <span>그래서 마이퍼즐은</span>
                        <h3>관리합니다.</h3>
                </div>
            </div>
            <div class="col-9">
                <ul class="row">
                    <li class="col-4">
                        <div class="pack"><img src="/yubeen/img/onepack1.png" class="img-fluid"  alt=""></div>
                        <div class="plan">
                            <h5>한 팩 포장</h5>
                            <p>언제 어디서든 꾸준히 섭취할 수 있도록, 주문하신 제품들을 소분하여 한 팩에 담아드립니다.</p>
                        </div>
                    </li>
                    <li class="col-4">
                        <div class="pack"><img src="/yubeen/img/onepack2.png" class="img-fluid"  alt=""></div>
                        <div class="plan">
                            <h5>섭취 관리</h5>
                            <p>섭취알람과 섭취 기록 리워드를 통한 체계적인 관리로 건강한 습관 형성을 도와드립니다.</p>
                        </div>
                    </li>
                    <li class="col-4">
                        <div class="pack"><img src="/yubeen/img/onepack3.png" class="img-fluid"  alt=""></div>
                        <div class="plan">
                            <h5>정기 배송</h5>
                            <p>30일마다 매월 알아서 제품을 보내드리기에 번거롭게 재주문 할 필요가 없습니다.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
    
                 





<?php
include_once(G5_PATH.'/tail.php');