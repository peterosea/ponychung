<?php
$page_name = 'app_management subpage';
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
        <div class="article_head article_title">
          <div class="row inner">
            <div class="col col-lg-8 d-flex align-items-center">
              <span class="label _ing">모집중</span>
              <h2 class="_title">2020 제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</h2>
            </div>
            <div class="col col-lg-4 flex-wrap">
              <div class="_classify mb-2">국내장학금 / 포니정해외학술탐방단</div>
              <div class="_period">2021.02.28 - 2021.03.28</div>
            </div>
          </div>
        </div>
        <div class="row article_body">
          <div class="write_grp">
            <div class="_option">추가사항</div>
            <table class="article_table">
              <colgroup>
                <col span="1" style="width: 180px">
                <col span="1">
              </colgroup>
              <tr>
                <th>자기소개</th>
                <td>
                  <div class="checkboxWrap">
                    <input id="c1" type="checkbox">
                    <label for="c1">화면 출력</label>
                  </div>
                  <div class="checkboxWrap">
                    <input id="c2" type="checkbox">
                    <label for="c2">필수 입력 체크</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th>경력</th>
                <td>
                  <div class="checkboxWrap">
                    <input id="c1" type="checkbox">
                    <label for="c1">화면 출력</label>
                  </div>
                  <div class="checkboxWrap">
                    <input id="c2" type="checkbox">
                    <label for="c2">필수 입력 체크</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th>연구실적</th>
                <td>
                  <div class="checkboxWrap">
                    <input id="c1" type="checkbox">
                    <label for="c1">화면 출력</label>
                  </div>
                  <div class="checkboxWrap">
                    <input id="c2" type="checkbox">
                    <label for="c2">필수 입력 체크</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th>소득분위</th>
                <td>
                  <div class="checkboxWrap">
                    <input id="c1" type="checkbox">
                    <label for="c1">화면 출력</label>
                  </div>
                  <div class="checkboxWrap">
                    <input id="c2" type="checkbox">
                    <label for="c2">필수 입력 체크</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th>첨부파일</th>
                <td>
                  <div class="checkboxWrap">
                    <input id="c1" type="checkbox">
                    <label for="c1">화면 출력</label>
                  </div>
                  <div class="checkboxWrap">
                    <input id="c2" type="checkbox">
                    <label for="c2">필수 입력 체크</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th>가이드 멘트</th>
                <td><textarea class="form-control" id="" rows="8"></textarea></td>
              </tr>
            </table>
          </div>
        </div>
      </article>
    </div>
    <div class="row article_btn_wrap">
      <div class="col">
        <a href="#" class="btn btn_box btn_dark">저장</a>
        <a href="/pages/app-management-list.php" class="btn btn_box btn_light">목록보기</a>
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