<?php snippet('header') ?>

<section>
  <?php snippet('navigation-scam') ?>
  <div class="grid-scam h">
    <div class="one wbr wbb black-bg1 flex items-end z-5">
      <div class="w-25"></div>
      <a id="btn-txt1" class="tc bt br bl ph3 pv3 dib white hover txt-1 w-25" href="">1.txt</a>
      <a id="btn-txt2" class="tc bt br ph3 pv3 dib white hover txt-2 w-25 " href="">2.txt</a>
      <a id="btn-txt3" class="tc bt ph3 pv3 dib white hover txt-3 w-25" href="">3.txt</a>
    </div>
    <div class="two bb">
    </div>
    <div class="three black-bg1">

    </div>
    <div class="four wbr wbl black-bg1">
      <div class="stack">
        <div class="front z-1">
          <h2 class="white pl1 black-bg1 mt0"><?= $page->text()->kirbytextinline()?></h2>
        </div>
        <div class="back">
          <h2 class="white pl1 black-bg1 mt-0"><?= $page->text9()->kirbytextinline()?></h2>
        </div>
      </div>
    </div>
    <div class="five">
      <div class="stack">
        <div class="front-h1 z-1">
          <h1 class="h1-big bg-white pl1"><?= $page->text2()->kirbytextinline()?></h1>
        </div>
        <div class="back">
          <h1 class="h1-big pl1 bg-white"><?= $page->text7()->kirbytextinline()?></h1>
        </div>
      </div>
    </div>
    <div class="six wbt wbl wbr flex justify-bewteen flex-column black-bg1 z-1">
      <div class="stack">
        <div class="front-p z-1">
          <p class="white pl1 black-bg1"><?= $page->text4()->kirbytextinline()?></p>
        </div>
        <div class="back">
          <p class="white pl1 black-bg1"><?= $page->text8()->kirbytextinline()?></p>
        </div>
      </div>
    </div>
    <div class="seven bt pl2 f7">
      <div class="wbr wbb flex items-end ">
        <a id="btn-txt-invert3" class="tc ba ph3 pv3 dib white hover txt-33 w-25" href=""> 3.txt</a>
        <a id="btn-txt-invert2" class="tc ba ph3 pv3 dib white hover txt-22 w-25 " href="">2.txt</a>
        <a id="btn-txt-invert1" class="tc ba ph3 pv3 dib white hover txt-11 w-25" href="Def">1.txt</a>
        <div class="w-25"></div>
      </div>
    </div>
  </div>
  <div class="fixed imgleft">
    <img class="mw-100" src="assets/img/scam.png" alt="">
  </div>
</section>

<?php snippet('footer-scam') ?>