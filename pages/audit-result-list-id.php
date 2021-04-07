<?php
$page_name = 'audit_result_list subpage';
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
        <div class="article_head article_title">
          <div class="row inner">
            <div class="col col-lg-8 d-flex align-items-center">
              <span class="label _complete">완료</span>
              <h2 class="_title">2020 제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</h2>
            </div>
            <div class="col col-lg-4 flex-wrap">
              <div class="_classify mb-2">국내장학금 / 포니정해외학술탐방단</div>
              <div class="_period">2021.02.28 - 2021.03.28</div>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col col-lg-7 flex_row filter_grp">
            <div class="search_box input-group py-2 w320">
              <input type="text" class="form-control" placeholder="지원자명을 입력해주세요" aria-label="검색어를 입력해주세요" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">검색</button>
            </div>
          </div>
          <div class="col col-lg-5 flex_row view_count">
            <div class="btn excel my-2">엑셀다운로드</div>
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
              <th>No.</th>
              <th>이름</th>
              <th>성별</th>
              <th>학사</th>
              <th>학위</th>
              <th>수료일</th>
              <th>학교</th>
              <th>분약</th>
              <th>추천서<br />(첨부파일)</th>
              <th>성적</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="_num">4</td>
              <td class="_name">
                <a href="/pages/audit-result-list-id-single-id.php">김지원</a>
              </td>
              <td class="_gender">남</td>
              <td class="_bachelor">카이스트</td>
              <td class="_bachelor">석사</td>
              <td class="_completion">2019.01</td>
              <td class="_school">서울대</td>
              <td class="_powdered_medicine">미약</td>
              <td class="_attachment">
                <a href="#"></a>
              </td>
              <td class="_score">3.9/4.5</td>
            </tr>
            <tr>
              <td class="_num">3</td>
              <td class="_name">
                <a href="#">이지원</a>
              </td>
              <td class="_gender">남</td>
              <td class="_bachelor">연세대</td>
              <td class="_bachelor">석사</td>
              <td class="_completion">2019.01</td>
              <td class="_school">이대</td>
              <td class="_powdered_medicine">여성학</td>
              <td class="_attachment">
                <a href="#"></a>
              </td>
              <td class="_score">3.9/4.5</td>
            </tr>
            <tr>
              <td class="_num">2</td>
              <td class="_name">
                <a href="#">박지원</a>
              </td>
              <td class="_gender">남</td>
              <td class="_bachelor">서울대</td>
              <td class="_bachelor">석사</td>
              <td class="_completion">2019.01</td>
              <td class="_school">연세대</td>
              <td class="_powdered_medicine">문헌정보학</td>
              <td class="_attachment">
                <a href="#"></a>
              </td>
              <td class="_score">3.9/4.5</td>
            </tr>
            <tr>
              <td class="_num">1</td>
              <td class="_name">
                <a href="#">최지원</a>
              </td>
              <td class="_gender">남</td>
              <td class="_bachelor">한예종</td>
              <td class="_bachelor">석사</td>
              <td class="_completion">2019.01</td>
              <td class="_school">경희대</td>
              <td class="_powdered_medicine">독일근대사</td>
              <td class="_attachment">
                <a href="#"></a>
              </td>
              <td class="_score">3.9/4.5</td>
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
          <a href="/pages/register-list.php" class="btn btn_box btn_light">공고 목록</a>
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