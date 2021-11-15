<?php snippet('header') ?>

<section>
  <?php snippet('navigation-systems') ?>
  <img class="doppelganger" src="assets/img/cursor.png" alt="" />
  <div class="grid-systems h">

    <div class="one bb br flex items-end">
      <div class="w-25 bg-black"></div>
      <a id="btn-txt1" class="tc ba ph3 pv3 dib white hover txt-1 w-25" href="">1.txt</a>
      <a id="btn-txt2" class="tc ba ph3 pv3 dib white hover txt-2 w-25 " href="">2.txt</a>
      <a id="btn-txt3" class="tc ba ph3 pv3 dib white hover txt-3 w-25" href=""> 3.txt</a>
    </div>

    <div class="two wbb black-bg1">
    </div>

    <div class="three wbb black-bg1">
    </div>

    <div class="five bb br sh">
      <div class="stack">
        <div class="front z-1">
          <h2 class="pl1 bg-white"><?= $page->text()->kirbytextinline()?></h2>
        </div>
        <div class="back">
          <h2 class="pl1 "><?= $page->text9()->kirbytextinline()?></h2>
        </div>
      </div>
    </div>

    <div class="six wbb black-bg1">


      <div class="sixup wbb">
        <div class="sixupone bb br overflow-y-scroll">
        </div>

        <div class="sixuptwo bb">

          <div class="stack">
            <div class="front-h1 z-1">
              <h2 class=" white black-bg1 pl1"><?= $page->text2()->kirbytextinline()?></h2>
            </div>
            <div class="back">
              <h2 class="white pl1"><?= $page->text7()->kirbytextinline()?></h2>
            </div>
          </div>
        </div>

        <div class="sixdownthree br">

        </div>

        <div class="sixdownfour bg-green-placeholder br">
          <video autoplay loop class="sys-vid-1" src="assets/vid/desktop-01-720p.mp4"></video>
        </div>

        <div class="sixdownfive bg-green-placeholder">
          <video autoplay loop class="sys-vid-3" src="assets/vid/desktop-03-720p.mp4"></video>
        </div>
      </div>
    </div>

    <div class="seven wbl wbb black-bg1">
      <div class="stack">
        <div class="front-p z-1">
          <p class="white pl1 black-bg1"><?= $page->text5()->kirbytextinline()?></p>
        </div>
        <div class="back">
          <p class="white pl1 black-bg1"><?= $page->text6()->kirbytextinline()?></p>
        </div>
      </div>
    </div>

    <div class="four br">
    </div>

    <div class="eight br">
      <div class="stack">
        <div class="front-p2 z-1">
          <p class="black pl1 bg-white"><?= $page->text4()->kirbytextinline()?></p>
        </div>
      </div>
    </div>

    <div class="nine black-bg1">
      <div class="flex items-end ">
        <a id="btn-txt-invert3" class="tc br bb  ph3 pv3 dib white hover txt-33 w-25" href=""> 3.txt</a>
        <a id="btn-txt-invert2" class="tc br bb ph3 pv3 dib white hover txt-22 w-25 " href="">2.txt</a>
        <a id="btn-txt-invert1" class="tc br bb ph3 pv3 dib white hover txt-11 w-25" href="">1.txt</a>
        <div class="w-25"></div>

      </div>
    </div>

    <div class="ten bl black-bg1">
    </div>

  </div>

</section>

<?php snippet('footer-systems') ?>