<?php
$page_name = 'application_list subpage';
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
        <div class="row align-items-center">
          <div class="col col-lg-9 flex_row filter_grp">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle w220" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                구분
              </button>
              <ul class="dropdown-menu w220" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">전체</a></li>
                <li><a class="dropdown-item" href="#">신진연구자지원</a></li>
                <li><a class="dropdown-item" href="#">한국학지원 구분</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle w220" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                공고 상태
              </button>
              <ul class="dropdown-menu w220" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">전체</a></li>
                <li><a class="dropdown-item" href="#">모집중</a></li>
                <li><a class="dropdown-item" href="#">완료</a></li>
              </ul>
            </div>
            <div class="search_box input-group">
              <input type="text" class="form-control" placeholder="검색어를 입력해주세요" aria-label="검색어를 입력해주세요" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">검색</button>
            </div>
          </div>
          <div class="col col-lg-3 flex_row justify-content-end">
            <div class="dropdown">
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
              <th>제목</th>
              <th>지원 구분</th>
              <th>지원 기간</th>
            </tr>
          </thead>
          <tbody>
            <tr class="tr_notice">
              <td class="_num">11</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _notice">공지</span>제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</a>
              </td>
              <td class="_classify"></td>
              <td class="_date">작성일 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">10</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _ing">모집중</span>제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</a>
              </td>
              <td class="_classify">국내장학금 / 포니정해외학술탐방단</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">9</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _ing">모집중</span>2020 포니정재단 학술지원 연구과제 공모 (+FAQ) 안내</a>
              </td>
              <td class="_classify">국내장학금 / 포니정해외학술탐방단</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">8</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _complete">완료</span>2020 포니정 인문연구장학 모집 공고</a>
              </td>
              <td class="_classify">국내장학금 / 기존장학</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">7</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _complete">완료</span>2020 포니정 인문연구장학 모집 공고</a>
              </td>
              <td class="_classify">국내장학금 / 기존장학</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">6</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _complete">완료</span>2020 포니정재단 학술지원 연구과제 공모 (+FAQ)
              </td>
              <td class="_classify">국내장학금 / 포니정해외학술탐방단</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">5</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _complete">완료</span>2020 포니정 인문연구장학 모집 공고</a>
              </td>
              <td class="_classify">국내장학금 / 기존장학</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">4</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _complete">완료</span>2020 포니정 인문연구장학 모집 공고</a>
              </td>
              <td class="_classify">국내장학금 / 기존장학</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">3</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _complete">완료</span>2020 포니정재단 학술지원 연구과제 공모 (+FAQ)</a>
              </td>
              <td class="_classify">국내장학금 / 포니정해외학술탐방단</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
            </tr>
            <tr>
              <td class="_num">2</td>
              <td class="_title">
                <a href="/pages/application-single.php"><span class="label _complete">완료</span>2020 포니정 인문연구장학 모집 공고</a>
              </td>
              <td class="_classify">국내장학금 / 기존장학</td>
              <td class="_period">2021.02.28 - 2021.03.28</td>
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