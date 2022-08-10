<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <div id="aside">
        <?php echo outlogin(); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll(); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    
    <div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            <div>
               <a href="https://map.naver.com/v5/search/%EC%84%9C%EC%9A%B8%20%EC%86%A1%ED%8C%8C%EA%B5%AC%20%EC%98%AC%EB%A6%BC%ED%94%BD%EB%A1%9C35%EB%8B%A4%EA%B8%B8%2042,%20%ED%95%9C%EA%B5%AD%EB%A3%A8%ED%84%B0%ED%9A%8C%EA%B4%80%2011%EC%B8%B5/address/14149039.123227093,4511176.610360632,%EC%84%9C%EC%9A%B8%ED%8A%B9%EB%B3%84%EC%8B%9C%20%EC%86%A1%ED%8C%8C%EA%B5%AC%20%EC%98%AC%EB%A6%BC%ED%94%BD%EB%A1%9C35%EB%8B%A4%EA%B8%B8%2042,new?c=14149014.5327516,4511175.9507444,19,0,0,0,dh&isCorrectAnswer=true">
               <img src="/yubeen/img/map.png" alt="지도"></a>
                <h3></h3>
                <span>에서 더 간편하게 건강 한 조각을 맞춰보세요!</span>
                <p>*운영 시간 : 매일 10:00~17:00  (주말 및 공휴일 휴점)<br>
                   *위치: 서울 송파구 올림픽로35다길 42, 한국루터회관 11층               
                </p>
            </div>
            <div class="snsBox">
                <ul>
                    <li><a href="https://m.facebook.com/official.mypuzzle.kr/?locale2=ms_MY&__tn__=%2Cg"><img src="/yubeen/img/facebook.png" alt="페이스북"></a></li>
                    <li><a href="https://www.instagram.com/official.mypuzzle.kr/"><img src="/yubeen/img/insta.png" alt="인스타그램"></a></li>
                    <li><a href="https://pf.kakao.com/_JxkxcFK"><img src="/yubeen/img/kakao.png" alt="카카오톡"></a></li>
                </ul>

                <a href="https://www.mypuzzle.co.kr/cs/faq">고객센터></a>
                <h4>1833-8781</h4>
                <p>평일 오전 9시 - 오후 6시 (점심시간 12:00 - 13:30)
                                           mypuzzle@nutrione.co.kr</p>
            </div>
            
            <!-- <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a> -->
        </div>
        <!-- <div id="ft_company" class="ft_cnt">
        	<h2>사이트 정보</h2>
	        <p class="ft_info">
	        	회사명 : 회사명 / 대표 : 대표자명<br>
				주소  : OO도 OO시 OO구 OO동 123-45<br>
				사업자 등록번호  : 123-45-67890<br>
				전화 :  02-123-4567  팩스  : 02-123-4568<br>
				통신판매업신고번호 :  제 OO구 - 123호<br>
				개인정보관리책임자 :  정보책임자명<br>
			</p>
	    </div> -->
        
    </div>
    <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
    <div id="ft_copy">Copyright &copy; <b>SeoYubin</b> All rights reserved.</div>

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");