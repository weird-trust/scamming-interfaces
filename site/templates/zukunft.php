<?php snippet('header') ?>


<section>
  <?php snippet('navigation-zuk') ?>

  <div class="fixed bckgrnd-right w">
    <!-- <video autoplay loop class="pos-vid-1 z1" src="assets/vid/double-desk.mp4"></video> -->
    <!-- <img class="w" src="assets/img/background.png" alt="lidar-scan"> -->
  </div>
  <div class="fixed bckgrnd-right-1 w">
    <!-- <img class="w" src="assets/img/background.png" alt="lidar-scan"> -->
  </div>
  <div class="grid-future h">

    <div class="future-1 br bb">
    </div>
    <div class="future-2 wbr wbb black-bg1">
    </div>
    <div class="future-3 br bb flex flex-column items-end">
      <a id="btn-txt1" class="tc bb ph3 pv3 dib hover txt-1 w-100" href="">1.txt</a>
      <a id="btn-txt2" class="tc bb ph3 pv3 dib hover txt-2 w-100" href="">2.txt</a>
    </div>
    <div class="future-4 br bb">
      <div class="stack">
        <div class="front z-1 ">
          <h2 class="bg-white mt0 pl1 pb5 "><?= $page->text()->kirbytextinline()?></h2>
        </div>
        <div class="back">
          <h2 class="pl1 bg-white"><?= $page->text9()->kirbytextinline()?></h2>
        </div>
      </div>
    </div>
    <div class="future-5 wbr wbb black-bg1 sh">
      <video autoplay loop class="zuk-vid-1 z-0" src="assets/vid/double-desk.mp4"></video>
    </div>
    <div class="future-6 wbr wbb black-bg1">
      <div class="stack">
        <div class="front-p z-1">
          <p class="pl1 pt1 black-bg1"><?= $page->text5()->kirbytextinline()?></p>
        </div>
        <div class="back">
          <p class="pl1 pt1"><?= $page->text6()->kirbytextinline()?></p>
        </div>
      </div>
    </div>
    <div class="future-7 br bb">
    </div>
    <div class="future-8 black-bg1">
      <div class=" flex flex-column items-end">
        <a id="btn-txt-invert2" class="tc ba ph3 pv3 dib hover txt-22 w-25 " href="">2.txt</a>
        <a id="btn-txt-invert1" class="tc ba ph3 pv3 dib  hover txt-11 w-25" href="">1.txt</a>
      </div>
    </div>
  </div>

</section>

<?php snippet('footer-zuk') ?>