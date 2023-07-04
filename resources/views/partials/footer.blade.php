
@php
$_SESSION['lang'] = '';
    $_SESSION['lang_v'];

$langf = '';
if(isset($_POST["language"])){
  $lang=$_POST["language"];
      if($lang == 1){
        langeng();
        $langf = '';
        header("Refresh:0");
      }else if($lang == 2){
        langsq();
        $langf = '-sq';
        header("Refresh:0");
      }
  
}
echo $langf;
@endphp
<footer class="content-info">
  <div class="container">
    <div class="left">

      <div class="press"> @field('press_txt' . $langf)</div>

      <div class="info1">
        @field('press1_pos' . $langf)<br>
        @field('press1_name' . $langf)
      </div>

      <div class="info2">
        @field('press2_pos' . $langf)<br>
        @field('press2_name' . $langf) 
      </div>

    </div>
      <div class="right"><div class="more">@field('information_txt' . $langf)</div></div>
  </div>
</footer>
