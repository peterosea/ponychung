<?php
$page_name = 'app_write subpage';
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
        <div class="row article_body">
          <div class="write_grp">
            <div class="_option">필수사항</div>
            <table class="article_table">
              <tr>
                <th>성명(한글)</th>
                <td>홍길동</td>
                <th>주민등록번호</th>
                <td>
                  <input type="text" name="" class="form-control">
                </td>
              </tr>
              <tr>
                <th>성명(영문)</th>
                <td><input type="text" name="" class="form-control"></td>
                <th>성명(한자)</th>
                <td><input type="text" name="" class="form-control"></td>
              </tr>
              <tr>
                <th>학교</th>
                <td><input type="text" name="" class="form-control"></td>
                <th>전공/학점</th>
                <td>
                  <div class="flex_row">
                    <input type="text" name="" class="form-control">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" name="" class="form-control">
                  </div>
                </td>
              </tr>
              <tr>
                <th>휴대폰번호</th>
                <td colspan="3">010-6587-7896</td>
              </tr>
              <tr>
                <th>이메일주소</th>
                <td colspan="3">sclwie543@naver.com</td>
              </tr>
              <tr>
                <th>주소</th>
                <td colspan="3">
                  <div class="flex_row _address">
                    <input type="text" name="" class="form-control"><a href="#" class="btn btn_light btn_box">주소찾기</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th>상세주소</th>
                <td colspan="3"><input type="text" name="" class="form-control"></td>
              </tr>
            </table>
          </div>
          <div class="write_grp">
            <div class="_option">추가사항</div>
            <table class="article_table column_two">
              <tr>
                <th>자기소개</th>
                <td><textarea class="form-control" id="" rows="8"></textarea></td>
              </tr>
              <tr>
                <th>경력</th>
                <td><textarea class="form-control" id="" rows="8"></textarea></td>
              </tr>
              <tr>
                <th>연구실적</th>
                <td><textarea class="form-control" id="" rows="8"></textarea></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row guide">
          <p>
            가이드 멘트가 들어갈 자리입니다. 가이드 멘트가 들어갈 자리입니다. 가이드 멘트가 들어갈 자리입니다.
            가이드 멘트가 들어갈 자리입니다. 가이드 멘트가 들어갈 자리입니다.
          </p>
        </div>
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
      <div class="col">
        <a href="#" class="btn btn_box btn_dark">저장</a>
        <a href="#" class="btn btn_box btn_red">지원하기</a>
        <a href="/pages/app_write-list.php" class="btn btn_box btn_light">목록보기</a>
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