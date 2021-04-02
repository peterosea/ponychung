<?php
$page_name = 'mypage member subpage';
$urlParent = '../';
?>

<!-- Head Load -->
<?php include $urlParent . 'includes/head.php' ?>
<!-- Header Load -->
<?php include $urlParent . 'includes/header.php' ?>
<!-- PageHeader Load -->
<?php include $urlParent . 'includes/header-page.php' ?>

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
                <td class="col50">
                  홍길동
                </td>
                <th class="d-none d-xl-table-cell">구분</th>
                <td class="d-none d-xl-table-cell">
                  <div class="dropdown py-2">
                    <button class="btn btn-secondary dropdown-toggle w220" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      전체
                    </button>
                    <ul class="dropdown-menu w220" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">전체</a></li>
                      <li><a class="dropdown-item" href="#">일반 사용자</a></li>
                      <li><a class="dropdown-item" href="#">심사위원</a></li>
                      <li><a class="dropdown-item" href="#">관리자</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr class="d-table-row d-xl-none">
                <th>구분</th>
                <td>
                  <div class="dropdown py-2">
                    <button class="btn btn-secondary dropdown-toggle w220" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      전체
                    </button>
                    <ul class="dropdown-menu w220" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">전체</a></li>
                      <li><a class="dropdown-item" href="#">일반 사용자</a></li>
                      <li><a class="dropdown-item" href="#">심사위원</a></li>
                      <li><a class="dropdown-item" href="#">관리자</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <th>아이디</th>
                <td colspan="3">Jewfo223</td>
              </tr>
              <tr>
                <th>비밀번호</th>
                <td colspan="3"><a href="#" class="btn btn_box btn_light">비밀번호 변경</a></td>
              </tr>
              <tr>
                <th>이메일주소</th>
                <td colspan="3" class="email"><input type="text" name="" class="form-control size-medium"> @ <input type="text" name="" class="form-control size-medium"></td>
              </tr>
              <tr>
                <th>휴대폰번호</th>
                <td colspan="3">
                  <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small"><a href="#" class="btn btn_box btn_light ml-1">본인 인증</a>
                </td>
              </tr>
              <tr>
                <th>통장사본</th>
                <td colspan="3">
                  <div class="justify-content-between">
                    <a href="#" class="link">통장사본.png</a><a href="#" class="btn btn_border_box">파일첨부</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th>증빙서류</th>
                <td colspan="3">
                  <div class="justify-content-between">
                    <a href="#" class="link">증빙서류01.png</a><a href="#" class="btn btn_border_box">파일첨부</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th>회원가입일</th>
                <td colspan="3">2021.01.02</td>
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
<?php include $urlParent . 'includes/footer.php' ?>
<!-- /.Footer Load -->
<!-- Foot Load -->
<?php include $urlParent . 'includes/foot.php' ?>