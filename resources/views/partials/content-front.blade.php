<section class="section__hero">

    <div class="container">
        <div class="left">
            <div class="one">@field("hero_text1")</div>
            <div class="two">@field("hero_text2")</div>
            <div class="three">@field("hero_text3")</div>
        </div>

        <div class="right">
            <img src="@field('hero_img')" alt="" class="hero-img">
            <img src="@field('hero_img2')" alt="" class="hero-img2">
            <img src="@field('hero_img3')" alt="" class="hero-img3">
        </div>
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
                <div class="speaker speakers__one"><img src="@field('organizing_one')" alt="" class="speaker-img"> <div class="text"> <div class="name">Florije Miftari Basholli</div>  <div class="title">Instituti Kombëtar i Shëndetësisë Publike</div></div></div>

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