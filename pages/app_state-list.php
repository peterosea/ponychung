<?php
$page_name = 'app_state subpage';
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
    <div class="row">
      <div class="borad_wrap">
        <table class="table_list theme_red">
          <thead>
            <tr>
              <th>번호</th>
              <th>제목</th>
              <th>지원 구분 / 지원 기간</th>
              <th>합격여부</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="_num">6</td>
              <td class="_title">
                <a href="#"><span class="label _ing">모집중</span>제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</a>
              </td>
              <td class="_classify">
                <div>국내장학금 / 기존장학</div>
                <date>2021.02.28 - 2021.03.28</date>
              </td>
              <td class="_result">
                <span class="_result_grey">미발표</span>
              </td>
            </tr>
            <tr>
              <td class="_num">5</td>
              <td class="_title">
                <a href="#"><span class="label _ing">모집중</span>제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</a>
              </td>
              <td class="_classify">
                <div>국내장학금 / 기존장학</div>
                <date>2021.02.28 - 2021.03.28</date>
              </td>
              <td class="_result">
                <span class="_result_grey">미발표</span>
              </td>
            </tr>
            <tr>
              <td class="_num">4</td>
              <td class="_title">
                <a href="#"><span class="label _ing">모집중</span>2020 포니정재단 학술지원 연구과제 공모 (+FAQ) 안내</a>
              </td>
              <td class="_classify">
                <div>국내장학금 / 기존장학</div>
                <date>2021.02.28 - 2021.03.28</date>
              </td>
              <td class="_result">
                <span class="_result_red">합격</span>
              </td>
            </tr>
            <tr>
              <td class="_num">3</td>
              <td class="_title">
                <a href="#"><span class="label _complete">완료</span>2020 포니정 인문연구장학 모집 공고</a>
              </td>
              <td class="_classify">
                <div>국내장학금 / 기존장학</div>
                <date>2021.02.28 - 2021.03.28</date>
              </td>
              <td class="_result">
                <span class="_result_black">불합격</span>
              </td>
            </tr>
            <tr>
              <td class="_num">2</td>
              <td class="_title">
                <a href="#"><span class="label _complete">완료</span>2020 포니정 인문연구장학 모집 공고</a>
              </td>
              <td class="_classify">
                <div>국내장학금 / 기존장학</div>
                <date>2021.02.28 - 2021.03.28</date>
              </td>
              <td class="_result">
                <span class="_result_black">불합격</span>
              </td>
            </tr>
            <tr>
              <td class="_num">1</td>
              <td class="_title">
                <a href="#"><span class="label _complete">완료</span>2020 포니정재단 학술지원 연구과제 공모 (+FAQ)
              </td>
              <td class="_classify">
                <div>국내장학금 / 기존장학</div>
                <date>2021.02.28 - 2021.03.28</date>
              </td>
              <td class="_result">
                <span class="_result_black">불합격</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="pagination">
        <a href="#" class="page_link go_end">맨끝으로</a>
        <a href="#" class="page_link go_next">다음</a>
        <ul class="numbers">
          <li class="_current number">
            <span>1</span>
          </li>
          <li class="number">
            <a href="#">2</a>
          </li>
          <li class="number">
            <a href="#">3</a>
          </li>
          <li class="number">
            <a href="#">4</a>
          </li>
          <li class="number">
            <a href="#">5</a>
          </li>
          <li class="number">
            <a href="#">6</a>
          </li>
          <li class="number">
            <a href="#">7</a>
          </li>
          <li class="number">
            <a href="#">8</a>
          </li>
          <li class="number">
            <a href="#">9</a>
          </li>
          <li class="number">
            <a href="#">10</a>
          </li>
        </ul>
        <a href="#" class="page_link go_prev">이전</a>
        <a href="#" class="page_link go_first">처음으로</a>
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