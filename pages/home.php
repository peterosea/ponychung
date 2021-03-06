<?php $page_name = 'home'; ?>

<!-- Head Load -->
<?php include 'includes/head.php' ?>

<!-- Header Load -->
<?php include 'includes/header.php' ?>
<!-- /.Header Load -->

<!-- Content Container -->
<div class="content_container home_content">
  <div class="container main_width flex_row">
    <div class="col_1_3 col_3 sect_announce">
      <div class="inner_col flex_col">
        <!-- 카테고리 표시/선택 영역 -->
        <div class="_top flex_row title_wrap">
          <h3 class="title_section">
            <span>진행중인 공고</span>
          </h3>
          <div class="btn btn_burger">
            <a href="#">
              <span class="bar1"></span>
              <span class="bar2"></span>
              <span class="bar3"></span>
            </a>
          </div>
        </div>
        <!-- 슬라이드 내용 영역 -->
        <div class="announce_wrap flex_col">
          <div class="cat flex_row slider-nav">
            <div class="_nav_btn">장학</div>
            <!-- <div class="bar_vert"></div> -->
            <div class="_nav_btn">주거지원장학</div>
          </div>
          <div class="_contents flex_col slider-for">
            <div class="_slide">
              <a href="#" class="text_wrap">
                <div class="_title">
                  <h1>2021 포니정 인문연구장학 모집</h1>
                </div>
                <p class="_parag">
                  포니정재단은 기초학문 진흥과 인문학 인재 양성을 위해, 2020년 인문학 전공 대학원생을 위한 장학금을 신설했습니다. 2021 제2회 &#60;포니정 인문연구장학&#62;에 우수한 인문학 전공자의 많은 지원을 바랍니다.
                </p>
                <date class="_date">2021.01.13 - 2021.02.28</date>
                <span class="btn btn_more">자세히 보기</span>
              </a>
            </div>
            <div class="_slide">
              <a href="#" class="text_wrap">
                <div class="_title">
                  <h1>2020 학술지원 연구과제 공모</h1>
                </div>
                <p class="_parag">
                  포니정재단은 국가 발전의 밑거름이 되는 기초학문 분야의 진흥과 세계 학문의 선진화를 이끌 인재의 발굴 및 양성을 목표로 인문학 분야에 대한 학술지원을 2008년부터 이어오고 있습니다.
                </p>
                <date class="_date">2021.03.21 - 2021.04.28</date>
                <span href="#" class="btn btn_more">자세히 보기</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 공지사항 -->
    <div class="col_2_3 col_3 sect_notice">
      <div class="inner_col">
        <div class="_top flex_row title_wrap">
          <h3 class="title_section">
            <span>공지사항</span>
          </h3>
          <a href="#" class="btn btn_burger">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
          </a>
        </div>
        <div class="notice_wrap">
          <ul class="notice_list flex_col">
            <li class="item">
              <a href="#" class="_title">
                <h5>2020 제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</h5>
              </a>
              <date class="_date">2021.02.28</date>
            </li>
            <li class="item">
              <a href="#" class="_title">
                <h5>2021 포니정 인문연구장학 모집공고</h5>
              </a>
              <date class="_date">2021.02.28</date>
            </li>
            <li class="item">
              <a href="#" class="_title">
                <h5>포니정재단, 제1회 포니정 영리더상 시상식 개최</h5>
              </a>
              <date class="_date">2021.02.28</date>
            </li>
            <li class="item">
              <a href="#" class="_title">
                <h5>포니정재단, 제1회 포니정 영리더상 수상자에 ‘김슬아 대표’ 선정</h5>
              </a>
              <date class="_date">2021.02.28</date>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- 오른쪽 배너 영역 -->
    <div class="col_3_3 col_3 sect_banners flex_col">
      <!-- 내 지원현황 -->
      <div class="banner _status">
        <a href="#" class="_link flex_col">
          <div class="icon ic_status">
             <!--- 06.02 svg 코드를 svg 파일로 교체. --->
            <img src="/public/img/ic_status.svg" style="height: 41px;">
          </div>
          <span>내 지원현황</span>
        </a>
      </div>
      <!-- 장학생 게시판 -->
      <div class="banner _board">
        <a href="#" class="_link flex_col">
          <div class="icon ic_board">
            <!--- 06.02 svg 코드를 svg 파일로 교체. --->
            <img src="/public/img/ic_board.svg" style="height: 41px;">
          </div>
          <span>장학생 게시판</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- /.Content Container -->

<!-- Footer Load -->
<?php include 'includes/footer.php' ?>
<!-- /.Footer Load -->

<!-- Foot Load -->
<?php include 'includes/foot.php' ?>