
@php
    $_SESSION['lang'] = '';
    $_SESSION['lang_v'];
if(isset($_POST["language"])){
  do_shortcode('language_custom');
}
@endphp
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp
</head>
