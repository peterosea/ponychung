<?php
$page_name = 'audit_final_single subpage';
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
        <?php include $urlParent . 'includes/article_head.php' ?>
        <div class="row article_head article_tableWrap">
          <div class="inner">
            <div class="_option">필수사항</div>
            <table class="article_table">
              <tr>
                <th>성명(한글)</th>
                <td>홍길동</td>
                <th>주민등록번호</th>
                <td>901220-3652221</td>
              </tr>
              <tr>
                <th>성명(영문)</th>
                <td>Honggildong</td>
                <th>성명(한자)</th>
                <td>홍길동</td>
              </tr>
              <tr>
                <th>학교</th>
                <td>서울대학교</td>
                <th>전공/학점</th>
                <td>4.5 / 4.5</td>
              </tr>
              <tr>
                <th>휴대폰번호</th>
                <td>010-6587-7896</td>
                <th>이메일 주소</th>
                <td>
                  sclwie543@naver.com
                </td>
              </tr>
              <tr>
                <th>주소</th>
                <td colspan="3">
                  서울시 마포구 성산동 123-1번지
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row article_divider">
          <div class="col-12">
            <div class="moreWrap">
              <button class="btn">
                <span class="me-3">
                  자세히보기
                </span>
                <div class="btn down"></div>
              </button>
            </div>
          </div>
        </div>
        <div class="row article_audit article_tableWrap">
          <div class="inner">
            <div class="_option">김정현 교수</div>
            <table class="article_table">
              <tr>
                <th>점수</th>
                <td>
                  <div class="inputWrap">
                    <input type="text" name="" class="form-control w220" placeholder="점수 1">
                    <input type="text" name="" class="form-control w220" placeholder="점수 2">
                  </div>
                </td>
              </tr>
              <tr>
                <th>첨부파일</th>
                <td class="_attachment">
                  <div class="innerWrap">
                    <div class="item">
                      <a href="#" class="link_attachment" target="_blank">지원서 양식 파일 1.xlsx</a>
                      <a href="" class="btn btn_times"></a>
                    </div>
                  </div>
                  <a href="" class="btn btn_border_box">파일첨부</a>
                </td>
              </tr>
              <tr>
                <th>심사평</th>
                <td><textarea class="form-control" id="" rows="8"></textarea></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row article_audit article_tableWrap">
          <div class="inner">
            <div class="_option">이상민 교수</div>
            <table class="article_table">
              <tr>
                <th>점수</th>
                <td>
                  <div class="inputWrap">
                    <input type="text" name="" class="form-control w220" placeholder="점수 1">
                    <input type="text" name="" class="form-control w220" placeholder="점수 2">
                  </div>
                </td>
              </tr>
              <tr>
                <th>첨부파일</th>
                <td class="_attachment">
                  <div class="innerWrap">
                    <div class="item">
                      <a href="#" class="link_attachment" target="_blank">지원서 양식 파일 1.xlsx</a>
                      <a href="" class="btn btn_times"></a>
                    </div>
                  </div>
                  <a href="" class="btn btn_border_box">파일첨부</a>
                </td>
              </tr>
              <tr>
                <th>심사평</th>
                <td><textarea class="form-control" id="" rows="8"></textarea></td>
              </tr>
            </table>
          </div>
        </div>
      </article>
    </div>
    <div class="row article_btn_wrap">
      <div class="col">
        <a href="#" class="btn btn_box btn_red">저장</a>
        <a href="/pages/audit-final-list-id.php" class="btn btn_box btn_light">지원자 목록</a>
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