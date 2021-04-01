<?php
$page_name = 'member subpage';
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
                전체
              </button>
              <ul class="dropdown-menu w220" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">전체</a></li>
                <li><a class="dropdown-item" href="#">일반 사용자</a></li>
                <li><a class="dropdown-item" href="#">심사위원</a></li>
                <li><a class="dropdown-item" href="#">관리자</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle w220" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                사용자 ID
              </button>
              <ul class="dropdown-menu w220" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">User0988</a></li>
                <li><a class="dropdown-item" href="#">User0988</a></li>
                <li><a class="dropdown-item" href="#">User0988</a></li>
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
              <th>구분</th>
              <th>고객 ID</th>
              <th>고객명</th>
              <th>사용여부</th>
              <th>전화번호</th>
              <th>이메일</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="_cat">일반 사용자</td>
              <td class="_userId">
                <a href="/pages/member-single.php">User0988</a>
              </td>
              <td class="_name">테스터</td>
              <td class="_isUse">사용</td>
              <td class="_tel">010-2223-2547</td>
              <td class="_email">user@test.com</td>
            </tr>
            <tr>
              <td class="_cat">심사위원</td>
              <td class="_userId">
                <a href="/pages/member-single.php">User0988</a>
              </td>
              <td class="_name">김교수</td>
              <td class="_isUse">미사용</td>
              <td class="_tel">010-2223-2547</td>
              <td class="_email">user@test.com</td>
            </tr>
            <tr>
              <td class="_cat">관리자</td>
              <td class="_userId">
                <a href="/pages/member-single.php">User0988</a>
              </td>
              <td class="_name">관리자</td>
              <td class="_isUse">사용</td>
              <td class="_tel">010-2223-2547</td>
              <td class="_email">user@test.com</td>
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