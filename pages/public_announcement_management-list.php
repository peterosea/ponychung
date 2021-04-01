<?php
$page_name = 'public_announcement_management_list subpage';
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
      <div class="filter_wrap">
        <div class="row">
          <div class="col col-lg-9 flex_row filter_grp justify-content-start">
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
            <div class="dropdown py-2">
              <button class="btn btn-secondary dropdown-toggle w170" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                구분 1
              </button>
              <ul class="dropdown-menu w170" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">전체</a></li>
                <li><a class="dropdown-item" href="#">국내장학슴</a></li>
                <li><a class="dropdown-item" href="#">베트남 장학금</a></li>
                <li><a class="dropdown-item" href="#">특별 장학금</a></li>
                <li><a class="dropdown-item" href="#">신진연구자지원</a></li>
                <li><a class="dropdown-item" href="#">한국학 지원구분</a></li>
              </ul>
            </div>
            <div class="dropdown py-2">
              <button class="btn btn-secondary dropdown-toggle w170" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                구분 2
              </button>
              <ul class="dropdown-menu w170" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">전체</a></li>
                <li><a class="dropdown-item" href="#">포니정해외 학술탐방단</a></li>
                <li><a class="dropdown-item" href="#">포니정인문연구장학</a></li>
                <li><a class="dropdown-item" href="#">기존장학</a></li>
              </ul>
            </div>
            <div class="search_box input-group py-2">
              <input type="text" class="form-control" placeholder="검색어를 입력해주세요" aria-label="검색어를 입력해주세요" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">검색</button>
            </div>
          </div>
          <div class="col col-lg-3 flex_row justify-content-end">
            <div class="dropdown py-2">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                항목 갯수
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">20개씩 보기</a></li>
                <li><a class="dropdown-item" href="#">50개씩 보기</a></li>
                <li><a class="dropdown-item" href="#">100개씩 보기</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="borad_wrap">
        <table class="table_list theme_red">
          <thead>
            <tr>
              <th>번호</th>
              <th>타입</th>
              <th>구분</th>
              <th>상태</th>
              <th>제목</th>
              <th>지원 기간</th>
            </tr>
          </thead>
          <tbody>
            <tr class="tr_notice">
              <td class="_num">3</td>
              <td class="_type">학술지원</td>
              <td class="_classify">한국학 지원</td>
              <td class="_state">모집중</td>
              <td class="_title">
                <a href="/pages/public_announcement_management-single.php">제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</a>
              </td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">2</td>
              <td class="_type">학술지원</td>
              <td class="_classify">국내장학금 - 포니정해외학술탐방안</td>
              <td class="_state">완료</td>
              <td class="_title">
                <a href="/pages/public_announcement_management-single.php">제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</a>
              </td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">1</td>
              <td class="_type">학술지원</td>
              <td class="_classify">신진연구자 지원</td>
              <td class="_state">완료</td>
              <td class="_title">
                <a href="/pages/public_announcement_management-single.php">2020 포니정재단 학술지원 연구과제 공모 (+FAQ) 안내</a>
              </td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="pagination with_button">
        <div class="inner flex_row">
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
        <div class="btn_wrap">
          <a href="/pages/board-write.php" class="btn btn_box btn_dark">글쓰기</a>
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