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
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Flamenco:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body data-scroll-index="0"
    data-0="background-color: rgba( 231, 123, 24, 0.7 );"
    data-2000="background-color: rgba(18, 76, 89, 0.2 );">
    <header>
      <h1 data-scroll-nav="0">Nickolas Nikolic</h1>
      <nav>
        <a data-scroll-nav="3"><i data-0="color: rgb(255, 165, 0);" data-1000="color: rgb(255, 255, 255 );" class="fa fa-dot-circle-o"></i>portfolio</a>
        <a data-scroll-nav="4"><i data-0="color: rgb(255, 165, 0);" data-1000="color: rgb(255, 255, 255 );" class="fa fa-dot-circle-o"></i>academic</a>
        <a data-scroll-nav="5"><i data-0="color: rgb(255, 165, 0);" data-1000="color: rgb(255, 255, 255 );" class="fa fa-dot-circle-o"></i>personal</a>
        <a data-scroll-nav="6"><i data-0="color: rgb(255, 165, 0);" data-1000="color: rgb(255, 255, 255 );" class="fa fa-dot-circle-o"></i>contact</a>
      </nav>
  </header>
    <section id="content">
      <section id="about" data-scroll-index="1">
        <h2>about</h2>
        <article id="bio">
          <h3><i class="fa fa-circle"></i>who is this guy?</h3>
          <p>Nickolas Nikolic is a developer of mobile and web from Milwaukee, WI USA.</p>
          <p>Also a graduate student at the time of this writing, he runs a 3.75 GPA.</p>
          <p>A very nice guy, he has earned over 30 awards for customer relations
            and has been part of over 60 open source projects through the years</p>
          <p>He is ravenously curious and deeply committed to the empowering effects of
            technology in the world.</p>
        </article>
      </section>

      <section id="portfolio" data-scroll-index="3">
        <h2>portfolio</h2>
        <article id="carousel" class="portfolio">
          <div>
            <!--add more as they appear in your life...-->
            <div><iframe id="portfolio1" src="yo/portfolio/1/300x250/index.html"></iframe><button>restart animation</button></div>
          </div>
        </article>
      </section>

      <section id="academic" data-scroll-index="4">
        <h2>academics</h2>
        <article id="miad">
          <h3><i class="fa fa-circle"></i>miad (no degree)</h3>
          <p>He attended miad as a draghtsman. A good many experiences in creativity came from this experience.</p>
        </article>
        <article id="uwm">
          <h3><i class="fa fa-circle"></i>university of wisconsin-milwaukee (bfa 2004)</h3>
          <p>He attended uwm to finish his dual degree in the fine arts. Here, he was enthralled by the community. He learned most from his lessons here.</p>
        </article>
        <article id="du">
          <h3><i class="fa fa-circle"></i>university of denver: graduate work (mas expected 2018)</h3>
          <p>Currently attending, Nick is focusing in mobile, web design, and development.</p>
        </article>
      </section>
      <section id="personal" data-scroll-index="5">
        <h2>personal</h2>
        <article>
          <h3><i class="fa fa-circle"></i>Open Source</h3>
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

          <p>I am
            internationally published photojournalist/photographer specializing in
            Creative Commons media for niche publications such as
            Marxist.com,TreeHugger.com, DeliberateLife Magazine and hundreds of
            others. I have taken assignments through Demotix.com as a local
            photojournalist as well as through the Center for Media Change and
            American Public Media.</p>
        </article>
      </section>
      <section id="contact" data-scroll-index="6">
        <h2>contact</h2>
        <article>
          <!--<form>
            <p>name:</p><p><input type="text" /></p>
            <p>phone:</p><p><input type="text" /></p>
            <p>email:</p><p><input type="text" /></p>
            <p>message</p><p><textarea></textarea></p>
            <p><button>send</button></p>
          </form>-->
          <p>Nickolas Nikolic</p>
          <p>6135 West Howard Ave<p>
          <p>unit 8<p>
          <p>nick [at] nick [dot] cool<p>
          <p>414-628-8575<p>
        </article>
      </section>
    </section>
    <footer>
      <nav>
        <a data-scroll-goto="0"><i class="fa fa-arrow-up"></i>top</a>
      </nav>
      <p><small>public domain: all rights preserved.</small></p>
    </footer>
    <div id="spinner"

    data-0="transform: scale(5.0) rotate(0deg); color: rgba(255, 165, 0, 0.5);"
    data-2500="transform: scale(30) rotate(1234deg); color: rgba(13, 79, 144, 0.75);"

    ><i id="flair" class="fa fa-refresh fa-5x" ></i><span id="spinnerText"></span></div>
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
