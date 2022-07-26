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
<div class='topgradient'>
    <?php //echo latest('pic_block','portpolio',3,100); ?>
    <section id="mainBanner" class='d-flex flex-column justify-content-center'>
 
    <div class="container d-flex justify-content-end">
            <div class="puzzle">
                <p> 나만의 건강 한 조각,<br>맞춤 건강기능식품
                </p>
                <h3>'MY PUZZLE'</h3>
                <button class="button" type="button" onclick="location.href='https://www.mypuzzle.co.kr/product/product'">about</button>
            </div>
        </div>
    </section>
    <section id="qna" class="overflow-hidden h-100">
        <div class="container d-flex justify-content-between align-items-stretch">
            <div class="qbg ">
               <p> 모두가 좋다고 하는 영양제,<br>
                과연 나에게도 진짜 필요한걸까요?       
            </p>
            </div>
            <i class='d-flex flex-column justify-content-center'><img src="/yubeen/img/qea.png" alt=""></i>
            <div class="abg d-flex flex-column justify-content-end">
                <p class="mb-0">
                우리는 생활 환경, 식습관, 건강 상태에 따라<br>각자 다른 건강 관리가 필요합니다. </p>
                    <span>
                    마이퍼즐은 고객 한 분, 한 분에 맞춘 건강기능식품이<br>필요하다는 생각으로부터 출발했습니다.
                    </span>        
            </div>
        </div>
    </section>

    <section id="system" class="h-100">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div style="margin-top: -32%;">
                        <span>그래서 마이퍼즐은</span>
                            <h3>관리합니다.</h3>
                    </div>
                </div>
                <div class="col-9">
                    <ul class="row">
                        <li class="col-4">
                            <div class="pack"><img src="/yubeen/img/onepack1.png" class="img-fluid"  alt="한 팩 포장"></div>
                            <div class="plan">
                                <h5>한 팩 포장</h5>
                                <p>언제 어디서든 꾸준히 섭취할 수 있도록, 주문하신 제품들을 소분하여 한 팩에 담아드립니다.</p>
                            </div>
                        </li>
                        <li class="col-4">
                            <div class="pack"><img src="/yubeen/img/onepack2.png" class="img-fluid"  alt="섭취 관리"></div>
                            <div class="plan">
                                <h5>섭취 관리</h5>
                                <p>섭취알람과 섭취 기록 리워드를 통한 체계적인 관리로 건강한 습관 형성을 도와드립니다.</p>
                            </div>
                        </li>
                        <li class="col-4">
                            <div class="pack"><img src="/yubeen/img/onepack3.png" class="img-fluid"  alt="정기 배송"></div>
                            <div class="plan">
                                <h5>정기 배송</h5>
                                <p>30일마다 매월 알아서 제품을 보내드리기에 번거롭게 재주문 할 필요가 없습니다.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

</div>
    <!-- 중간 베너 -->
        <section id="middlebanner">     
        <div class="container">
                <div>
                    <h3>마이퍼즐 건강 자문단</h3>
                    <p>마이퍼즐은 의사, 약사, 영양학 박사 등으로 구성된<br>
                            건강 자문단과 함께 합니다.</p>
                </div>
            </div>
        </section>
    </section>
        <!-- 유튜브 연결 -->
        <div class="youtubeback">
        <section id="youtube"></section>
                    <div class="container">
                        <div>
                            <h3>마이퍼즐로 건강이 <em class='point'><ruby>쉬<rt>.</rt>워<rt>.</rt></ruby></em> 진다!</h3>
                                <iframe style="border:none" width="1054" height="592"  src="https://www.youtube.com/embed/wSKfz5mgHT0?autoplay=1&mute=1&modestbranding=1&loop=1&playlist=wSKfz5mgHT0"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            
                                allowfullscreen></iframe>
                        </div>
                        <ul class="iconNumber row row-cols-2">
                            <li class="col"><i><img src="/yubeen/img/icon1.png" alt=""></i><strong>건강설문 & 1:1전문가 상담</strong></li>
                            <li class="col"><i><img src="/yubeen/img/icon2.png" alt=""></i><strong>추천 영양성분 확인</strong></li> 
                            <li class="col"><i><img src="/yubeen/img/icon3.png" alt=""></i><strong>원하는 성분 선택</strong></li>
                            <li class="col"><i><img src="/yubeen/img/icon4.png" alt=""></i><strong>한 팩 서비스 신청</strong></li>
                        </ul>
                    
                </section>
                  </div>
                
              

                <section id="Pbanner">
                    <div class="container">
                        <div>
                            <p></p>
                            <strong></strong>
                        </div>
                    </div>
                </section>
            </div>
          <!-- sns 후기  -->
                <section id="sns">
                   <div class="container">
                    <div class="d-flex justify-content-center">
                        <h3>마이퍼즐 고객님들의</h3> <h2>  ‘생생한 후기’</h2>
                    </div>
                    <div class="snsimg">
                       <div>
                        <a><img src="/yubeen/img/click!.png" class="click"></a>
                       </div>

                      <ul class="row m-0">
                        <li>
                            <a><img src="/yubeen/img/sns1.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>stic*****님<br>하루 딱 한 포로 끝나니 간편해요<br>#영양제추천 #직장인영양제 #건강한조각</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a ><img src="/yubeen/img/sns2.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>psm1***님<br>합리적인 가격과 편리함이 가장 큰 매력포인트네요<br>#건강해지기 #영양제 #이너뷰티</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a ><img src="/yubeen/img/sns3.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>lovr****님<br>언제 어디서나 건강 챙기기! 요즘 빠진 마이 퍼즐 영양제:)<br>#건강최고#간편영양제#영양제선물</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a><img src="/yubeen/img/sns4.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>choe***님<br>나를 위한 맞춤영양제로 앞으로 건강해질 일만 남았네요<br>#영양제구독 #맞춤영양제추천 #종합영양제</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a ><img src="/yubeen/img/sns5.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>hone********님<br>1봉에 모~두 들어있어서 들고다니기 편리해요!<br>#mypuzzle #건강문진 #정기구독</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a><img src="/yubeen/img/sns6.png" class="img-fluid"  alt="">
                                <p class="tag">
                                    <span>dail********님<br>신랑에게 필요한 영양소들만 쏙쏙담아 배송온 마이퍼즐<br>#가족건강 #가족영양제 #건강기능식품</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a><img src="/yubeen/img/sns7.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>ride*****님<br>예쁜 보라색 박스안에 상담을 통해 처방 받은 나만의 맞춤 영양제<br>#퍼스널영양제 #월간영양제 #뉴트리원</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a><img src="/yubeen/img/sns8.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <soan>prei****님<br>다이어트에 안성맞춤 영양제. 마이 퍼즐로 다이어트 성공했어요!<br>#영양제 #마이 퍼즐 #건강다이어트</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a><img src="/yubeen/img/sns9.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>kong******님<br>뭘 구매해야 할지 복잡했는데 알아서 전문설계해서 해주니,, 이게 진짜 허니<br>#마이퍼즐 #맞춤영양제 #mypuzzle</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a><img src="/yubeen/img/sns10.png" class="img-fluid" alt="">
                                <p class="tag">
                                    <span>ssjo***님<br>벌써 3회차. 요즘 건강에 소홀해진듯해 마이 퍼즐 앱으로 관리 중~<br>#영양제앱 #간편영양제 #건강설문</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                        
                        </div>
                            </div>
                              </section>


    
<?php
include_once(G5_PATH.'/tail.php');