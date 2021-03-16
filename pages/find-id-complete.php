<?php 
    $page_name = 'find-item find_id complete etcpage';
    $urlParent = '../';
?>

<!-- Head Load -->
<?php include $urlParent . 'includes/head.php'?>

    <!-- Header Load -->
    <?php include $urlParent . 'includes/header.php'?>
    <!-- /.Header Load -->

    <!-- Content Container -->
    <div class="content_container">
        <div class="container">
            <div class="find_id_wrap">
                <div class="inner flex_col">
                    <div class="title">
                        <h1>아이디 찾기</h1>
                    </div>
                    <div class="post_wrap">
                        <p>
                        회원님의 아이디는 <b class="point">TEST</b> 로 등록되어 있습니다.<br>
                        비밀번호를 분실한 경우 <a href="/pages/find-pw.php">비밀번호 찾기</a>에서 확인하시기 바랍니다.
                        </p>
                    </div>
                    <div class="btn_grp">
                        <a href="#" class="btn btn_box btn_black">로그인</a>
                        <a href="#" class="btn btn_box btn_light">비밀번호 찾기</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Content Container -->

    <!-- Footer Load -->
    <?php include $urlParent . 'includes/footer.php'?>
    <!-- /.Footer Load -->

<!-- Foot Load -->
<?php include $urlParent . 'includes/foot.php'?>