<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
    <link rel="stylesheet" href="/resources/styles/carousel.css">
    <link rel="stylesheet" href="/resources/styles/bootstrap.min.css">
    <title>Main</title>
</head>
    <header class="site-header">
        <div class="site-identity">
            <h1><a href="#">Power Rangers™</a></h1>
        </div>  
        <nav class="site-navigation">
            <ul class="nav">
                <li><a href="/User/index">Login</a></li> 
            </ul>
        </nav>
    </header>

    <style>

    body {
      font-family: Comic Sans;
      margin: 0;
      background-color: lightblue;
    }
    a {
      text-decoration: none;
      color: #000;
    }
    .site-header { 
      border-bottom: 1px solid #ccc;
      padding: .5em 1em;
      display: flex;
      justify-content: space-between;
    }

    .site-identity h1 {
      font-size: 1.5em;
      margin: .6em 0;
      display: inline-block;
    }


    .site-navigation ul, 
    .site-navigation li {
      margin: 0; 
      padding: 0;
    }

    .site-navigation li {
      display: inline-block;
      margin: 1.4em 1em 1em 1em;
    }
    </style>

	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .text-color h1, .text-color p{
            color: white;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/resources/images/m.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-start text-color">
                            <h1>Mice</h1>
                            <p>
                                Shop the best mouse in town
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/resources/images/h.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption" style="color: white;">
                            <h1>Headphones</h1>
                            <p>
                                Newest headphone for gamers
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/resources/images/k.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-color text-end">
                            <h1>Keyboards</h1>
                            <p>
                                Latest keyboard with the most advanced features                          
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->


            <?php $this->view('Main/Scripts'); ?>
    </main>
<?php
$this->view('shared/footer');
?>