
<section class="section__hero">
    <div class="container">
        <div class="left">
            <div class="one">@field("hero_text1" . $_SESSION['lang'])</div>
            <div class="two">@field("hero_text2" . $_SESSION['lang'])</div>
            <div class="three">@field("hero_text3" . $_SESSION['lang'])</div>
        </div>
        <div class="right">
            <svg width="738" height="295" viewBox="0 0 738 295" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="147" width="148" height="148" fill="#5357A1"/>
                <path d="M148 295L0 147H148V295Z" fill="#D2D3EF"/>
                <circle cx="74" cy="221" r="41.7293" fill="#76D0D9"/>
                <rect x="442" width="148" height="148" fill="#5357A1"/>
                <path d="M590 148L442 0H590V148Z" fill="#D2D3EF"/>
                <circle cx="516" cy="74" r="41.7293" fill="#76D0D9"/>
                <rect x="590" y="147" width="148" height="148" fill="#A5A9D8"/>
                <path d="M738 295L590 147H738V295Z" fill="#76D0D9"/>
                <rect x="295" y="147" width="148" height="148" fill="#A5A9D8"/>
                <ellipse cx="184.5" cy="185" rx="36.5" ry="37" fill="#D2D3EF"/>
                <circle cx="258" cy="185" r="37" fill="#D2D3EF"/>
                <ellipse cx="479.5" cy="185" rx="36.5" ry="37" fill="#76D0D9"/>
                <circle cx="553" cy="185" r="37" fill="#D2D3EF"/>
                <ellipse cx="701" cy="110.5" rx="37" ry="36.5" fill="#76D0D9"/>
                <ellipse cx="627.5" cy="37" rx="36.5" ry="37" fill="#5357A1"/>
                <ellipse cx="627.5" cy="110" rx="36.5" ry="37" fill="#A5A9D8"/>
                <circle cx="701" cy="37" r="37" fill="#D2D3EF"/>
                </svg>                                    
        </div>
    </div>

</section>
<section class="section__date">

    <div class="container">

        <div class="left">@field('stripe-txt' . $_SESSION['lang'])</div>

    </div>

</section>
<section class="section__projects">

<div class="container">
<div class="box">
    <div class="left">@field('projects_txt' . $_SESSION['lang'])</div>
    <div class="right">
        <img src="@field('projects_image_txt')" alt="" class="projects_img">
    </div>
</div>

<div class="projects">

    <img src="@field('projects_img2')" alt="" class="project2">
    <img src="@field('projects_im4')" alt="" class="project4">

</div>

<div class="textarea">

    @field('textarea' . $_SESSION['lang'])

</div>
</div>

</section>
<section class="section__speeches">

    <div class="container">

        <div class="s-container welcome">
            @field('welcome_speech_txt' . $_SESSION['lang'])
            <div class="speakers">
                <div class="speaker speakers__one"> <img src="@field('welcome_one')" alt="" class="speaker-img"> <div class="text"> <div class="name">@field('welcome_one_name' . $_SESSION['lang'])</div>  <div class="title">@field('welcome_one_pos' . $_SESSION['lang'])</div></div></div>
                <div class="speaker speakers__two"><img src="@field('welcome_two')" alt="" class="speaker-img"> <div class="text"> <div class="name">@field('welcome_two_name' . $_SESSION['lang'])</div>  <div class="title">@field('welcome_two_pos' . $_SESSION['lang'])</div></div></div>
                <div class="speaker speakers__three"><img src="@field('welcome_three')" alt="" class="speaker-img"> <div class="text"> <div class="name">@field('welcome_three_name' . $_SESSION['lang'])</div>  <div class="title">@field('welcome_three_pos' . $_SESSION['lang'])</div></div></div>
            </div>
        </div>

        <div class="s-container keynote">
            @field('keynote_speech_txt' . $_SESSION['lang'])
            <div class="speakers">
                <div class="speaker speakers__one"><img src="@field('keynote_one')" alt="" class="speaker-img"> <div class="text"> <div class="name notranslate">@field('keynote_one_name' . $_SESSION['lang'])</div>  <div class="title">@field('keynote_one_pos' . $_SESSION['lang'])</div></div></div>
                <div class="speaker speakers__two"><img src="@field('keynote_two')" alt="" class="speaker-img"> <div class="text"> <div class="name">@field('keynote_two_name' . $_SESSION['lang'])</div>  <div class="title">@field('keynote_two_pos' . $_SESSION['lang'])</div></div></div>
                <div class="speaker speakers__three"><img src="@field('keynote_three')" alt="" class="speaker-img"> <div class="text"> <div class="name">@field('keynote_three_name' . $_SESSION['lang'])</div>  <div class="title">@field('keynote_three_pos' . $_SESSION['lang'])</div></div></div>
            </div>
        </div>

        <div class="s-container organizing">
            @field('organizing_speech_txt' . $_SESSION['lang'])
            <div class="speakers">
                <div class="speaker speakers__one"><img src="@field('organizing_one')" alt="" class="speaker-img"> <div class="text"> <div class="name">@field('organizing_one_name' . $_SESSION['lang'])</div>  <div class="title">@field('organizing_one_pos' . $_SESSION['lang'])</div></div></div>

            </div>
        </div>

    </div>

</section>

<section class="section__paragraph">

<div class="container">

    <div class="paragraph">@field('paragraph2' . $_SESSION['lang'])
        @field('textfield2' . $_SESSION['lang'])
    </div>

</div>

</section>

