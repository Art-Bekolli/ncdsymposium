<section class="section__hero">

    <div class="container">
        <div class="left">
            <div class="one">@field("hero_text1")</div>
            <div class="two">@field("hero_text2")</div>
            <div class="three">@field("hero_text3")</div>
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

        <div class="left">22-29 <div class="bold">SEPTEMBER</div> 2023</div>

    </div>

</section>
<section class="section__projects">

<div class="container">
<div class="box">
    <div class="left">@field('projects_txt')</div>
    <div class="right">
        <img src="@field('projects_image_txt')" alt="" class="projects_img">
    </div>
</div>

<div class="projects">

    <img src="@field('projects_img1')" alt="" class="project1">
    <img src="@field('projects_img2')" alt="" class="project2">
    <img src="@field('projects_img3')" alt="" class="project3">
    <img src="@field('projects_im4')" alt="" class="project4">
    <img src="@field('projects_img5')" alt="" class="project5">
    <img src="@field('projects_img6')" alt="" class="project6">

</div>

<div class="textarea">

    @field('textarea')

</div>
</div>

</section>
<section class="section__speeches">

    <div class="container">

        <div class="s-container welcome">
            @field('welcome_speech_txt')
            <div class="speakers">
                <div class="speaker speakers__one"> <img src="@field('welcome_one')" alt="" class="speaker-img"> <div class="text"> <div class="name">Dr. Arben Vitia</div>  <div class="title">Ministria of Health</div></div></div>
                <div class="speaker speakers__two"><img src="@field('welcome_two')" alt="" class="speaker-img"> <div class="text"> <div class="name">Dr. Naser Ramadani</div>  <div class="title">NIPHK</div></div></div>
                <div class="speaker speakers__three"><img src="@field('welcome_three')" alt="" class="speaker-img"> <div class="text"> <div class="name">Mr. Laurent Torche</div>  <div class="title">SDC - Swiss Embassy</div></div></div>
            </div>
        </div>

        <div class="s-container keynote">
            @field('keynote_speech_txt')
            <div class="speakers">
                <div class="speaker speakers__one"><img src="@field('keynote_one')" alt="" class="speaker-img"> <div class="text"> <div class="name">Mr. Sean Taylor</div>  <div class="title">MS, World Heart Federation</div></div></div>
                <div class="speaker speakers__two"><img src="@field('keynote_two')" alt="" class="speaker-img"> <div class="text"> <div class="name">Dr. Fatmire Mulhaxha- Kollcaku</div>  <div class="title">Chairman of the Commission for<br> health and Social Welfare</div></div></div>
                <div class="speaker speakers__three"><img src="@field('keynote_three')" alt="" class="speaker-img"> <div class="text"> <div class="name">Dr. Rushit ismaili</div>  <div class="title">Family Physician</div></div></div>
            </div>
        </div>

        <div class="s-container organizing">
            @field('organizing_speech_txt')
            <div class="speakers">
                <div class="speaker speakers__one"><img src="@field('organizing_one')" alt="" class="speaker-img"> <div class="text"> <div class="name">Florije Miftari Basholli</div>  <div class="title">NIPHK</div></div></div>

            </div>
        </div>

    </div>

</section>

<section class="section__paragraph">

<div class="container">

    <div class="paragraph">@field('paragraph2')</div>
    <div class="p-img"> <svg width="257" height="269" viewBox="0 0 257 269" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.34626 93.5102L128.5 1.85411L254.654 93.5102L206.467 241.813H50.5327L2.34626 93.5102Z" stroke="#1FE0E0" stroke-width="3"/>
        <path d="M2.65064 176.415L49.747 27.7626L205.677 26.6177L254.951 174.563L129.474 267.142L2.65064 176.415Z" stroke="#2A5DE0" stroke-width="3"/>
        </svg>
        </div>


</div>

</section>

<section class="section__registration">

    <div class="container">

        @field('textfield2')

    </div>

</section>