<!DOCTYPE html>
<html>
<head>
<title>Auto</title>
    <link rel="shortcut icon" type="image/png" href="images/demo/fav.png"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- header -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- lOG AND REGISTER -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a href="#">Login</a></li>
        <li><i class="fa fa-user"></i> <a href="#">Register</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- /LOG AND REGISTER -->
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Auto</a></h1>
      <i class="fa fa-map-o"></i>
      <p>Let`s go!</p>
    </div>
    <!-- MENU -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            
        <li><a class="drop" href="#">Information</a>
          <ul>
            <li><a href="music.php">Music</a></li>
            <li><a class="drop" href="#">Ratings</a>
              <ul>
                <li><a href="#">Top 13 cars 2018</a></li>
                <li><a href="top.php">Top 10 the fastest cars</a></li>
                <li><a href="#">Top rare cars</a></li>
              </ul>
            </li>
            <li><a href="news.php">Fresh news</a></li>
          </ul>
        </li>
          <li><a href="full-width.php">About us</a></li>
      </ul>
    </nav>
    <!-- /MENU-->
  </header>
</div>
<!-- /header -->