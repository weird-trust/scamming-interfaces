<?php snippet('header') ?>


<section>
  <?php snippet('navigation-pos') ?>
  <div class="grid-position h">
    <div class="position-1 wbr wbb black-bg1">
    </div>
    <div class="position-3 wbr wbb black-bg1">
      <div class="stack">
        <div class="front-p z-1">
          <p class="white pl1 pt1 black-bg1 pb5i"><?= $page->text4()->kirbytextinline()?></p>
        </div>
        <div class="back">
          <p class="white pl1 pt1 black-bg1"><?= $page->text8()->kirbytextinline()?></p>
        </div>
      </div>
    </div>
    <div class="position-4 br wbb black-bg1 sh">
      <div class="stack">
        <div class="front-h1 z-1">
          <h2 class="white pl1 black-bg1 pb7"><?= $page->text()->kirbytextinline()?></h2>
        </div>
        <div class="back">
          <h2 class="white pl1 "><?= $page->text9()->kirbytextinline()?></h2>
        </div>
      </div>
    </div>
    <div class="position-2 bb flex items-end ">

      <a id="btn-txt-invert2" class="tc ba ph3 pv3 dib white hover txt-22 w-50 " href="">2.txt</a>
      <a id="btn-txt-invert1" class="tc ba ph3 pv3 dib white hover txt-11 w-50" href="">1.txt</a>

    </div>
    <div class="position-21 br bb">
    </div>
    <div class="position-5 bb">
      <video autoplay loop class="pos-vid-1" src="assets/vid/double-desktop.mp4"></video>
    </div>
    <div class="position-6 wbr wbb black-bg1">
      <div class="one black-bg1 flex">
        <a id="btn-txt1" class="tc bb br ph3 pv3 dib white hover txt-1 w-50 " href="">1.txt</a>
        <a id="btn-txt2" class="tc bb ph3 pv3 dib white hover txt-2 w-50 " href="">2.txt</a>
      </div>
    </div>
  </div>


</section>

<?php snippet('footer-position') ?>