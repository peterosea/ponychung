<?php
$page_name = 'audit_result_single subpage';
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
                <td>홍길동 <span class="unit">|</span>
                  <span class="point">합격자</span>
                </td>
                <th>주민등록번호</th>
                <td>901220-3652221</td>
              </tr>
              <tr>
                <th>성명(영문)</th>
                <td>Honggildong</td>
                <th>성명(한자)</th>
                <td>홍길동</td>
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
        <div class="row">
          <div class="col">
            <div class="resultTitle">
              1차 채점 결과
            </div>
          </div>
        </div>
        <div class="row article_audit article_tableWrap">
          <div class="inner">
            <div class="_option">김정현 교수</div>
            <table class="article_table">
              <tr>
                <th>점수 1</th>
                <td>
                  4.5
                </td>
                <th>점수 2</th>
                <td>
                  4.5
                </td>
              </tr>
              <tr>
                <th>첨부파일</th>
                <td colspan="3">
                  <div class="item">
                    <a href="#" class="link_attachment" target="_blank">지원서 양식 파일 1.xlsx</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th>심사평</th>
                <td colspan="3">
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.<br />
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.<br />
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row article_audit article_tableWrap">
          <div class="inner">
            <div class="_option">김정현 교수</div>
            <table class="article_table">
              <tr>
                <th>점수 1</th>
                <td>
                  4.5
                </td>
                <th>점수 2</th>
                <td>
                  4.5
                </td>
              </tr>
              <tr>
                <th>첨부파일</th>
                <td colspan="3">
                  <div class="item">
                    <a href="#" class="link_attachment" target="_blank">지원서 양식 파일 1.xlsx</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th>심사평</th>
                <td colspan="3">
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.<br />
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.<br />
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="resultTitle">
              2차 채점 결과
            </div>
          </div>
        </div>
        <div class="row article_audit article_tableWrap">
          <div class="inner">
            <div class="_option">김정현 교수</div>
            <table class="article_table">
              <tr>
                <th>점수 1</th>
                <td>
                  4.5
                </td>
                <th>점수 2</th>
                <td>
                  4.5
                </td>
              </tr>
              <tr>
                <th>첨부파일</th>
                <td colspan="3">
                  <div class="item">
                    <a href="#" class="link_attachment" target="_blank">지원서 양식 파일 1.xlsx</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th>심사평</th>
                <td colspan="3">
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.<br />
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.<br />
                  심사평이 들어갈 자리입니다. 심사평이 들어갈 자리입니다.
                </td>
              </tr>
            </table>
          </div>
        </div>
      </article>
    </div>
    <div class="row article_btn_wrap">
      <div class="col">
        <a href="/pages/audit-result-list-id.php" class="btn btn_box btn_light">지원자 목록</a>
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