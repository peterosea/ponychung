<?php 
$page_name = 'mypage subpage';
$urlParent = '../';
?>

<!-- Head Load -->
<?php include $urlParent . 'includes/head.php'?>
    <!-- Header Load -->
    <?php include $urlParent . 'includes/header.php'?>
    <!-- PageHeader Load -->
    <?php include $urlParent . 'includes/header-page.php'?>

    <!-- Content Container -->
    <div class="content_container">
        <div class="container con_width flex_col">
            <div class="row article_wrap">
                <article>
                    <div class="row article_body">
                        <div class="write_grp">
                            <table class="article_table">
                                <tr>
                                    <th>성명(한글)</th>
                                    <td>
                                        <div class="justify-content-between">
                                            홍길동 <a href="#" class="btn btn_box btn_red">지원현황 상세 보기</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>아이디</th>
                                    <td>Jewfo223</td>
                                </tr>
                                <tr>
                                    <th>비밀번호</th>
                                    <td><a href="#" class="btn btn_box btn_light">비밀번호 변경</a></td>
                                </tr>
                                <tr>
                                    <th>이메일주소</th>
                                    <td class="email"><input type="text" name="" class="form-control size-medium"> @ <input type="text" name="" class="form-control size-medium"></td>
                                </tr>
                                <tr>
                                    <th>휴대폰번호</th>
                                    <td>
                                    <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small"><a href="#" class="btn btn_box btn_light ml-1">본인 인증</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>통장사본</th>
                                    <td>
                                        <div class="justify-content-between">
                                            <a href="#" class="link">통장사본.png</a><a href="#" class="btn btn_border_box">파일첨부</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>증빙서류</th>
                                    <td>
                                        <div class="justify-content-between">
                                            <a href="#" class="link">증빙서류01.png</a><a href="#" class="btn btn_border_box">파일첨부</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>회원가입일</th>
                                    <td>2021.01.02</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </article>
            </div>
            <div class="article_btn_wrap">
                <a href="#" class="btn btn_box btn_dark">확인</a>
                <a href="#" class="btn btn_box btn_light">취소</a>
            </div>
        </div>
    </div>
    <!-- /.Content Container -->

    <!-- Footer Load -->
    <?php include $urlParent . 'includes/footer.php'?>
    <!-- /.Footer Load -->
<!-- Foot Load -->
<?php include $urlParent . 'includes/foot.php'?>