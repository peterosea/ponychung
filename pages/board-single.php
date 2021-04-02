<?php
$page_name = 'board subpage';
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
        <div class="row article_head">
          <div class="inner">
            <table class="article_table">
              <tr>
                <th>제목</th>
                <td>2020 제5회 민연 젊은 한국학 아카데미 온라인 개최 안내</td>
                <th>작성자 / 작성일</th>
                <td>홍길동 / 2021.02.28</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row article_body _content">
          <div class="content_inner">
            <p>
              포니정재단은 국가 발전의 밑거름이 되는 기초학문 분야의 진흥과 세계 학문의 선진화를 이끌 인재의 발굴 및 양성을 목표로 인문학 분야에 대한 학술지원을 2008년부터 이어오고 있습니다.
            </p>
            <p>
              이는 도약과 발전이라는 기회를 만들 수 있는 저력인 기초학문 분야에 대한 투자가 더 나은 미래를 만든다는 믿음에 따른 것입니다. 포니정재단은 국가 발전의 밑거름이 되는 기초학문 분야의 진흥과 세계 학문의 선진화를 이끌 인재의 발굴 및 양성을 목표로 인문학 분야에 대한 학술지원을 2008년부터 이어오고 있습니다.
            </p>
            <p>
              이는 도약과 발전이라는 기회를 만들 수 있는 저력인 기초학문 분야에 대한 투자가 더 나은 미래를 만든다는 믿음에 따른 것입니다.
            </p>

          </div>
        </div>
        <div class="row article_foot">
          <div class="inner">
            <table class="article_table">
              <tr>
                <th>첨부파일</th>
                <td><a href="#" class="link_attachment" target="_blank">지원서 양식 파일 1.xlsx</a></td>
              </tr>
            </table>
          </div>
        </div>
      </article>
    </div>
    <div class="comment_wrap">
      <div class="inner">
        <div class="comment_write">
          <textarea class="form-control" id="" rows="3"></textarea><a href="#" class="btn btn_box btn_light">댓글작성</a>
        </div>
        <div class="comment_list">
          <ul class="flex_col">
            <li class="comment">
              <span class="_author">김정현</span>
              <span class="_text">기초학문 분야에 대한 투자가 더 나은 미래를 만든다는 믿음에 따른 것입니다.</span>
              <a href="#" class="ic_button"><span class="ic_write icon"></span>댓글작성</a>
            </li>
            <li class="comment">
              <span class="_author">작성자</span>
              <span class="_text">기초학문 분야에 대한 투자가 더 나은 미래를 만든다는 믿음에 따른 것입니다.</span>
              <a href="#" class="ic_button"><span class="ic_edit icon"></span>수정</a> <a href="#" class="ic_button"><span class="ic_del icon"></span>삭제</a>
            </li>
            <li class="comment reply _write">
              <span class="_author">김정현</span>
              <span class="_text_edit"><textarea class="form-control" id="" rows="2">기초학문 분야에 대한 투자가 더 나은 미래를 만든다는 믿음에 따른 것입니다.</textarea><a href="#" class="btn btn_box btn_light">수정완료</a></span>
            </li>
            <li class="comment">
              <span class="_author">김정현</span>
              <span class="_text">기초학문 분야에 대한 투자가 더 나은 미래를 만든다는 믿음에 따른 것입니다.</span>
              <a href="#" class="ic_button"><span class="ic_write icon"></span>댓글작성</a>
            </li>
            <li class="comment reply">
              <span class="_author">김정현</span>
              <span class="_text">기초학문 분야에 대한 투자가 더 나은 미래를 만든다는 믿음에 따른 것입니다.</span>
              <a href="#" class="ic_button"><span class="ic_edit icon"></span>수정</a> <a href="#" class="ic_button"><span class="ic_del icon"></span>삭제</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row article_btn_wrap">
      <div class="col col-md-6">
        <a href="#" class="btn btn_box btn_light">이전</a>
        <a href="#" class="btn btn_box btn_light">다음</a>
      </div>
      <div class="col col-md-6">
        <a href="community-list.php" class="btn btn_box btn_dark">목록</a>
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