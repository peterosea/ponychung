<?php
$page_name = 'audit_list subpage';
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
      <div class="col">
        <?php include $urlParent . 'includes/article_head.php' ?>
      </div>
    </div>
    <div class="row content_wrap">
      <div class="col-7">
        <div class="row tableRow">
          <div class="borad_wrap">
            <div class="_option">지원자 선택</div>
            <table class="table_list theme_layout">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>이름</th>
                  <th>학사</th>
                  <th>학교/분약</th>
                  <th class="point _first_audit">1차 심사</th>
                  <th class="point _second_audit">2차 심사</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="_num">1</td>
                  <td class="_name">김지원 / 남</td>
                  <td class="_bachelor">카이스트</td>
                  <td class="_school _powdered_medicine">서울대 / 미학</td>
                  <td class="_first_audit">
                    <ul>
                      <li>
                        <div class="professorItem">
                          <span>김정현 교수</span>
                          <button class="btn btn_times"></button>
                        </div>
                      </li>
                      <li>
                        <div class="professorItem">
                          <span>김정현 교수</span>
                          <button class="btn btn_times"></button>
                        </div>
                      </li>
                    </ul>
                  </td>
                  <td class="_second_audit">
                    <ul>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="_num">1</td>
                  <td class="_name">김지원 / 남</td>
                  <td class="_bachelor">카이스트</td>
                  <td class="_school _powdered_medicine">서울대 / 미학</td>
                  <td class="_first_audit">
                    <ul>
                    </ul>
                  </td>
                  <td class="_second_audit">
                    <ul>
                      <li>
                        <div class="professorItem">
                          <span>김정현 교수</span>
                          <button class="btn btn_times"></button>
                        </div>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="_num">2</td>
                  <td class="_name">이지원 / 여</td>
                  <td class="_bachelor">연세대</td>
                  <td class="_school _powdered_medicine">이대 / 여성학</td>
                  <td class="_first_audit">
                    <ul>
                    </ul>
                  </td>
                  <td class="_second_audit">
                    <ul>
                      <li>
                        <div class="professorItem">
                          <span>김정현 교수</span>
                          <button class="btn btn_times"></button>
                        </div>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="_num">3</td>
                  <td class="_name">박지원 / 여</td>
                  <td class="_bachelor">서울대</td>
                  <td class="_school _powdered_medicine">연세대 / 문헌정보학</td>
                  <td class="_first_audit">
                    <ul>
                    </ul>
                  </td>
                  <td class="_second_audit">
                    <ul>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="_num">4</td>
                  <td class="_name">최지원 / 남</td>
                  <td class="_bachelor">한예종</td>
                  <td class="_school _powdered_medicine">경희대 / 독일근대사</td>
                  <td class="_first_audit">
                    <ul>
                    </ul>
                  </td>
                  <td class="_second_audit">
                    <ul>
                    </ul>
                  </td>
                </tr>
                <?php for ($i = 1; $i <= 4; $i++) {
                  echo <<<HTML
                <tr>
                  <td class="_num"></td>
                  <td class="_name"></td>
                  <td class="_bachelor"></td>
                  <td class="_school _powdered_medicine"></td>
                  <td class="_first_audit">
                    <ul>
                    </ul>
                  </td>
                  <td class="_second_audit">
                    <ul>
                    </ul>
                  </td>
                </tr>
HTML;
                } ?>
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
              </ul>
              <a href="#" class="page_link go_prev">이전</a>
              <a href="#" class="page_link go_first">처음으로</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-5">

        <div class="row tableRow">
          <div class="borad_wrap">
            <div class="_option">심사위원 선택</div>
            <table class="table_list theme_layout">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>이름</th>
                  <th>학교/분약</th>
                  <th class="point _first_audit">1차 심사</th>
                  <th class="point _second_audit">2차 심사</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="_num">4</td>
                  <td class="_name">김지원 / 남</td>
                  <td class="_school _powdered_medicine">서울대 / 미학</td>
                  <td class="_first_audit">
                    <div class="btn btn_add">추가</div>
                  </td>
                  <td class="_second_audit">
                    <div class="btn btn_add">추가</div>
                  </td>
                </tr>
                <?php for ($i = 1; $i <= 9; $i++) {
                  echo <<<HTML
                <tr>
                  <td class="_num"></td>
                  <td class="_name"></td>
                  <td class="_school _powdered_medicine"></td>
                  <td class="_first_audit">
                  </td>
                  <td class="_second_audit">
                  </td>
                </tr>
HTML;
                } ?>
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
              </ul>
              <a href="#" class="page_link go_prev">이전</a>
              <a href="#" class="page_link go_first">처음으로</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row btnRow">
      <div class="btn_wrap">
        <a href="#" class="btn btn_box btn_red">심사진 연결 완료</a>
        <a href="/pages/audit-list.php" class="btn btn_box btn_light">공고 목록</a>
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