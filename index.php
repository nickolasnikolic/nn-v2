<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="nickolas nikolic brochure website">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>nn</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="js/vendor/slick/slick.css">
    <link href='http://fonts.googleapis.com/css?family=Flamenco:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body data-scroll-index="0"
    data-0="background-color: rgba( 231, 123, 24, 0.7 ); padding-left: 1em;"
    data-2000="background-color: rgba( 255, 255, 255, 0.9 ); padding-left: 18em;">
    <header>
      <h1 data-scroll-nav="0">Nickolas Nikolic</h1>
      <nav>
        <a data-scroll-nav="1">about</a>
        <a data-scroll-nav="2">professional</a>
        <a data-scroll-nav="3">portfolio</a>
        <a data-scroll-nav="4">academic</a>
        <a data-scroll-nav="5">personal</a>
        <a data-scroll-nav="6">contact</a>
      </nav>
  </header>
    <section id="content">
      <section id="about" data-scroll-index="1">
        <h2>about</h2>
        <article id="bio">
          <h3>who is this guy?</h3>
          <p>Nickolas Nikolic is a developer of mobile and web from Milwaukee, WI USA.</p>
          <p>Also a graduate student at the time of this writing, he runs a 3.75 GPA.</p>
          <p>A very nice guy, he has earned over 30 awards for customer relations
            and has been part of over 60 open source projects through the years</p>
        </article>
      </section>
      <section id="professional" data-scroll-index="2">
        <article id="profile">
          <h3>profile</h3>
          <p>Nickolas Nikolic is a developer of mobile and web from Milwaukee, WI USA.</p>
          <p>He is ravenously curious and deeply committed to the empowering effects of
            technology in the world.</p>
        </article>
        <article id="experience">
          <h3>experience</h3>
          <p>He has both volunteered and worked in many industries and is familiar with
          many more than the average developer.</p>
        </article>
      </section>
      <section id="portfolio" data-scroll-index="3">
        <h2>portfolio</h2>
        <section id="carousel" class="portfolio">
          <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
            <div><h3>1</h3></div>
            <div><h3>2</h3></div>
            <div><h3>3</h3></div>
            <div><h3>4</h3></div>
            <div><h3>5</h3></div>
            <div><h3>6</h3></div>
          </div>
        </section>
      </section>
      <section id="academic" data-scroll-index="4">
        <h2>academics</h2>
        <article id="miad">
          <h3>miad (no degree)</h3>
          <p>content</p>
        </article>
        <article id="uwm">
          <h3>university of wisconsin-milwaukee (bfa 2004)</h3>
          <p>content</p>
        </article>
        <article id="du">
          <h3>university of denver: graduate work (mas expected 2018)</h3>
          <p>content</p>
        </article>
      </section>
      <section id="personal" data-scroll-index="5">
        <h2>personal</h2>
        <article>
          <h3>Open Source</h3>
            <p>I graduated from art school with a BFA in 2004. Around the time that I
              graduated I tripped across PHP and the open-source paradigm.</p>

            <p>I was hooked. I was so enamored by the social utility of the
              open-source process that it made my head spin.</p>

            <p>I wanted to contribute, so I created my first icon set for KDE
              in 2003. I got a job in support that offered free training in
              virtually any technology and took over 400 credit hours of training
              in technology ranging from programming languages, encryption, server
              technologies, and applications. I took the job mostly for this
              training benefit, alone.</p>

            <p>Over the course of the last 10 years I have been involved in
              open-source software continually, and have been involved in more
              than 60 projects as of the time of this writing.</p>
        </article>
        <article>
          <p>He is also an
            internationally published photojournalist/photographer specializing in
            Creative Commons media for niche publications such as
            Marxist.com,TreeHugger.com, DeliberateLife Magazine and hundreds of
            others. I have taken assignments through Demotix.com as a local
            photojournalist as well as through the Center for Media Change and
            American Public Media.</p>
        </article>
      </section>
      <section id="contact" data-scroll-index="6">
        <article>
          <h3>contact</h3>
          <form>
            <p>name:</p><p><input type="text" /></p>
            <p>phone:</p><p><input type="text" /></p>
            <p>email:</p><p><input type="text" /></p>
            <p>message</p><p><textarea></textarea></p>
            <p><button>send</button></p>
          </form>
        </article>
      </section>
    </section>
    <footer>
      <nav>
        <a data-scroll-goto="0">top</a>
      </nav>
      <p><small>public domain: all rights preserved.</small></p>
    </footer>

    <script src="js/vendor/jquery-2.1.4.js"></script>
    <script src="js/vendor/underscore.js"></script>
    <script src="js/vendor/scrollReveal/dist/scrollReveal.js"></script>
    <script src="js/vendor/scrollIt.js"></script>
    <script src="js/vendor/slick/slick.js"></script>
    <script src="js/vendor/skrollr.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58159204-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>
