<?php
$page_name = 'public_announcement_management_editor subpage';
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
                <th>타입</th>
                <td>
                  <div class="dropdown py-2">
                    <button class="btn btn-secondary dropdown-toggle w170" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      타입
                    </button>
                    <ul class="dropdown-menu w170" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">전체</a></li>
                      <li><a class="dropdown-item" href="#">학술지원</a></li>
                      <li><a class="dropdown-item" href="#">장학</a></li>
                    </ul>
                  </div>
                </td>
                <th>구분</th>
                <td>
                  <div class="innerWrap d-flex">
                    <div class="dropdown py-2 w-100">
                      <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        구분 1
                      </button>
                      <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">전체</a></li>
                        <li><a class="dropdown-item" href="#">국내장학슴</a></li>
                        <li><a class="dropdown-item" href="#">베트남 장학금</a></li>
                        <li><a class="dropdown-item" href="#">특별 장학금</a></li>
                        <li><a class="dropdown-item" href="#">신진연구자지원</a></li>
                        <li><a class="dropdown-item" href="#">한국학 지원구분</a></li>
                      </ul>
                    </div>
                    <!-- 타입: 학술지원 -->
                    <!-- <div class="dropdown py-2 w-100">
                      <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        구분 2
                      </button>
                      <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">전체</a></li>
                        <li><a class="dropdown-item" href="#">포니정해외 학술탐방단</a></li>
                        <li><a class="dropdown-item" href="#">포니정인문연구장학</a></li>
                        <li><a class="dropdown-item" href="#">기존장학</a></li>
                      </ul>
                    </div> -->
                  </div>
                </td>
              </tr>
              <tr>
                <th>노출 여부</th>
                <td>
                  <div class="dropdown py-2 w-100">
                    <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      노출
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">전체</a></li>
                      <li><a class="dropdown-item" href="#">포니정해외 학술탐방단</a></li>
                      <li><a class="dropdown-item" href="#">포니정인문연구장학</a></li>
                      <li><a class="dropdown-item" href="#">기존장학</a></li>
                    </ul>
                  </div>
                </td>
                <th>공지기간</th>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="wrap">
                      <input type="text" name="" class="form-control">
                      <div class="button calendar">
                      </div>
                    </div>
                    <span class="range">
                      ~
                    </span>
                    <div class="wrap">
                      <input type="text" name="" class="form-control">
                      <div class="button calendar">
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th>제목</th>
                <td colspan="3"><input type="text" name="" class="form-control"></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- 에디터 영역 start -->
        <div class="row body">
          <div class="inner">
            에디터 영역
          </div>
        </div>
        <!-- 에디터 영역 end -->
        <div class="row article_foot">
          <div class="inner">
            <table class="article_table column_three">
              <tr>
                <th>첨부파일</th>
                <td><a href="#" class="link_attachment" target="_blank">지원서 양식 파일 1.xlsx</a></td>
                <td class="align_right"><a href="#" class="btn btn_border_box _write">파일첨부</a></td>
              </tr>
            </table>
          </div>
        </div>
      </article>
    </div>
    <div class="row article_btn_wrap">
      <div class="col justify-content-center">
        <a href="#" class="btn btn_box btn_red">저장</a>
        <a href="app_write-list.php" class="btn btn_box btn_light">목록보기</a>
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