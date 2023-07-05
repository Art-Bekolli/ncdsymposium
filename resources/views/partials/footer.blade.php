
@php
$langf;
if(isset($_POST["language"])){
  $lang=$_POST["language"];
      if($lang == 1){
        $langf = 'wdsa';
        langeng();
        header('refresh:0');
      }else if($lang == 2){
        $langf = '-sq';
        langsq();
        header('refresh:0');
      }
  
}
@endphp
<footer class="content-info">
  <div class="container">
    <div class="left">

      <div class="press"> @field('press_txt' . $_SESSION['lang'])</div>

      <div class="info1">
        @field('press1_pos' . $_SESSION['lang'])<br>
        @field('press1_name' . $_SESSION['lang'])
      </div>

      <div class="info2">
        @field('press2_pos' . $_SESSION['lang'])<br>
        @field('press2_name' . $_SESSION['lang']) 
      </div>

    </div>
      <div class="right"><div class="more">@field('information_txt' . $langf)</div></div>
  </div>
</footer>
