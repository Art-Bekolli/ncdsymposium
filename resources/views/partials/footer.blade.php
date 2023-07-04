<footer class="content-info">
  <div class="container">
    <div class="left">

      <div class="press"> @php echo get_field('press_txt' . $_SESSION['lang'], 279); @endphp</div>

      <div class="info1">
        @php echo get_field('press1_pos' . $_SESSION['lang'], 279); @endphp<br>
        @php echo get_field('press1_name' . $_SESSION['lang'], 279); @endphp
      </div>

      <div class="info2">
        @php echo get_field('press2_pos' . $_SESSION['lang'], 279); @endphp<br>
        @php echo get_field('press2_name' . $_SESSION['lang'], 279); @endphp
      </div>

    </div>
    <div class="right"><div class="more">@php echo get_field('information_txt' . $_SESSION['lang'], 279); @endphp</div></div>
  </div>
</footer>
