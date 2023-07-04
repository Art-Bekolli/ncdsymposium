<div class="language-button">
<form method="POST" action="">
    <select name="language" onchange="this.form.submit()">
        <option @php if ($_SESSION['lang_v'] == '1') echo ' selected="selected"'; @endphp value="1">English</option>
        <option @php if ($_SESSION['lang_v'] == '2') echo ' selected="selected"'; @endphp value="2">Shqip</option>
    </select>
</form>
</div>