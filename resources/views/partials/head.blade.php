
@php
$_SESSION['lang'] = '';
    $_SESSION['lang_v'];
if(isset($_POST["language"])){
  $lang=$_POST["language"];
      if($lang == 1){
        langeng();
        header("Refresh:0");
      }else if($lang == 2){
        do_shortcode('set_lang-sq');
        langsq();
        header("Refresh:0");
      }
  
}
@endphp
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp
</head>
