<footer class="content-info">
  <div class="container">
    <div class="left">

      <div class="press">@field('press_txt' . $_SESSION['lang'])</div>

      <div class="info1">
        @field('press1_pos' . $_SESSION['lang'])<br>
        @field('press1_name' . $_SESSION['lang'])
      </div>

      <div class="info2">
        @field('press2_pos' . $_SESSION['lang'])<br>
        @field('press2_name' . $_SESSION['lang'])
      </div>

    </div>
    <div class="right"><div class="more">@field('information_txt' . $_SESSION['lang'])</div></div>
  </div>
</footer>
