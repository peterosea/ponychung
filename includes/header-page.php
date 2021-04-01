<?php
$parentMenu = '';
$currentCat = '';
$currentDesc = '';
$backgroundImg = '';
$imgURL = '../public/img/';

if (strpos($page_name, 'application') !== false) {
  $parentMenu = '지원공고';
  $currentCat = '학술지원';
  $currentDesc = '혁신과 도전정신을 후원하며 미래를 만들어갑니다';
  $backgroundImg = 'headerbg-application.jpg';
}
if (strpos($page_name, 'app_write') !== false) {
  $parentMenu = '지원서 작성';
  $currentCat = '장학';
  $currentDesc = '혁신과 도전정신을 후원하며 미래를 만들어갑니다';
  $backgroundImg = 'headerbg-app_write.jpg';
}
if (strpos($page_name, 'app_state') !== false) {
  $parentMenu = '지원현황';
  $currentCat = '지원현황';
  $currentDesc = '혁신과 도전정신을 후원하며 미래를 만들어갑니다';
  $backgroundImg = 'headerbg-app_state.jpg';
}
if (strpos($page_name, 'community') !== false) {
  $parentMenu = '커뮤니티';
  $currentCat = '공지사항';
  $currentDesc = '혁신과 도전정신을 후원하며 미래를 만들어갑니다';
  $backgroundImg = 'headerbg-community.jpg';
}
if (strpos($page_name, 'board') !== false) {
  $parentMenu = '커뮤니티';
  $currentCat = '게시판';
  $currentDesc = '혁신과 도전정신을 후원하며 미래를 만들어갑니다';
  $backgroundImg = 'headerbg-board.jpg';
}
if (strpos($page_name, 'mypage') !== false) {
  $currentCat = '마이페이지';
  $currentDesc = '계정에 대한 기본 정보 확인 및 수정이 가능합니다.';
  $backgroundImg = 'headerbg-mypage.jpg';
}
if (strpos($page_name, 'member') !== false) {
  $parentMenu = '회원관리';
  $currentCat = '회원리스트';
  $currentDesc = '모든 회원을 등록하고 검색할 수 있습니다.';
  $backgroundImg = 'member.jpg';
}
if (strpos($page_name, 'public_announcement_management') !== false) {
  $parentMenu = '공고관리';
  $currentCat = '지원공고';
  $currentDesc = '혁신과 도전정신을 후원하며 미래를 만들어갑니다';
  $backgroundImg = 'headerbg-application.jpg';
}
?>

<div class="page_header" style="background-image:url(<?php echo $imgURL . $backgroundImg; ?>);">
  <div class="container con_width align-items-center justify-content-center flex_col">
    <div class="parent_menu">
      <span><?php echo $parentMenu; ?></span>
    </div>
    <h1><?php echo $currentCat; ?></h1>
    <span><?php echo $currentDesc; ?></span>
  </div>
</div>