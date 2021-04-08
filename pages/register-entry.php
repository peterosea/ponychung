<?php
$page_name = 'register entry_form etcpage';
$urlParent = '../';
?>

<!-- Head Load -->
<?php include $urlParent . 'includes/head.php' ?>

<!-- Header Load -->
<?php include $urlParent . 'includes/header.php' ?>
<!-- /.Header Load -->

<!-- Content Container -->
<div class="content_container">
  <div class="container">
    <div class="register_wrap">
      <div class="inner flex_col">
        <div class="title">
          <span class="parent_title">회원가입</span><span class="_arrow"></span>
          <h1>개인정보 입력</h1>
        </div>
        <form class="entry_wrap">
          <table class="form_table">
            <tbody>
              <tr>
                <th class="require">아이디</th>
                <td>
                  <div class="inputWrap">
                    <input type="text" name="" class="form-control size-medium"><a href="#" class="btn btn_light btn_box">중복확인</a>
                  </div>
                  <span class="_desc">5~12자까지 영문/숫자만 허용</span>
                </td>
              </tr>
              <tr>
                <th class="require">비밀번호</th>
                <td>
                  <input type="text" name="" class="form-control size-medium">
                  <div class="_desc bottom"><b>8~20자</b>까지 모든 <b>문자+숫자+특수문자</b> (영문 대소문자는 구별하여 입력)</div>
                </td>
              </tr>
              <tr>
                <th class="require">비밀번호 확인</th>
                <td>
                  <input type="text" name="" class="form-control size-medium"><span class="_desc">비밀번호를 다시 한번 입력하세요</span>
                </td>
              </tr>
              <tr>
                <th class="require">한글성명</th>
                <td><input type="text" name="" class="form-control size-medium"></td>
              </tr>
              <tr>
                <th class="require">이메일주소</th>
                <td class="email"><input type="text" name="" class="form-control size-medium"> <span class="symbol">@</span> <input type="text" name="" class="form-control size-medium"></td>
              </tr>
              <tr>
                <th>휴대전화번호</th>
                <td class="tel">
                  <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small">
                </td>
              </tr>
            </tbody>
          </table>
        </form>
        <div class="btn_grp">
          <a href="#" class="btn btn_box btn_red">가입</a>
          <a href="#" class="btn btn_box btn_light">취소</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.Content Container -->

<!-- Footer Load -->
<?php include $urlParent . 'includes/footer.php' ?>
<!-- /.Footer Load -->

<!-- Foot Load -->
<?php include $urlParent . 'includes/foot.php' ?>