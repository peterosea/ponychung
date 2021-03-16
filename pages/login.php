<?php 
    $page_name = 'login etcpage';
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
            <div class="login_wrap">
                <div class="inner flex_col">
                    <div class="title">
                        <h1>로그인</h1>
                    </div>
                    <form class="login-form">
                        <div class="col col-sm-8">
                            <input type="text" id="loginID" class="form-control" placeholder="아이디">
                            <input type="password" id="loginPW" class="form-control" placeholder="비밀번호">
                        </div>
                        <div class="col col-sm-4">
                            <button class="btn btn_border_box" type="button">로그인</button>
                        </div>
                    </form>
                    <div class="link_grp">
                        <a href="/pages/register-term.php">회원가입</a>
                        <a href="/pages/find-id.php">아이디 찾기</a>
                        <a href="/pages/find-pw.php">비밀번호 찾기</a>
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