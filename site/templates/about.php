<?php snippet('header') ?>
<?php snippet('navigation-about') ?>
<section>
  <div class="grid-container h">
    <div class="about-left black-bg1">
    </div>
    <div class="about-right">
    </div>
    <div class="left-bt wbr wbt about">
      <p class="white pl2"><?= $page->text2()->kirbytextinline()?></p>
    </div>
    <div class="middle-bt bt br bg-white w-100 flex mt0 about h-100">
      <p class="black ml2 w-50"><?= $page->text5()->kirbytextinline()?></p>
      <p class="black w-50 ml2"><?= $page->text()->kirbytextinline()?></p>
    </div>
    <div class="middle-third-right wbb black-bg1 about-big">
      <h2 class="white mt3"><?= $page->text4()->kirbytextinline()?></h2>
    </div>
    <div class="left-top wbb wbr"></div>
  </div>

  <div class="fixed bckgrnd-right">
    <img class="w" src="assets/img/background-right.png" alt="lidar-scan">
  </div>
  <div class="fixed bckgrnd-right2">
    <img class="w" src="assets/img/background-left.png" alt="lidar-scan">
  </div>
</section>
<?php snippet('footer-about') ?>