<?php
$page_name = 'find-item find_id etcpage';
$urlParent = '../';
?>

<!-- Head Load -->
<?php include $urlParent . 'includes/head.php' ?>

<!-- Header Load -->
<?php include $urlParent . 'includes/header.php' ?>
<!-- /.Header Load -->

<!-- Content Container -->
<div class="content_container">
  <div class="container">
    <div class="find_id_wrap">
      <div class="inner flex_col">
        <div class="title">
          <h1>아이디 찾기</h1>
        </div>
        <form class="form_wrap">
          <table class="form_table">
            <tbody>
              <tr>
                <th class="require">성명</th>
                <td><input type="text" name="" class="form-control size-medium"></td>
              </tr>
              <tr>
                <th>이메일주소</th>
                <td><input type="text" name="" class="form-control size-medium"> @ <input type="text" name="" class="form-control size-medium"></td>
              </tr>
              <tr>
                <th>휴대전화번호</th>
                <td>
                  <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small"> - <input type="text" name="" class="form-control size-small">
                </td>
              </tr>
            </tbody>
          </table>
        </form>
        <div class="form_desc">
          이메일 또는 휴대전화번호 둘 중 하나만 입력하시면 됩니다.
        </div>
        <div class="btn_grp">
          <a href="/pages/find-id-complete.php" class="btn btn_box btn_black">찾기</a>
          <a href="#" class="btn btn_box btn_light">취소</a>
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