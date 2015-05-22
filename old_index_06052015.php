<?php

require_once("includes/header.php");
$portal_id = !empty($_GET['p']) ? (int)$_GET['p'] : 156;
$topic_id = !empty($_GET['t']) ? (int)$_GET['t'] : 156;
$category_id = !empty($_GET['c']) ? (int)$_GET['c'] : 156;
if($portal_id != 156){
    $query = "SELECT * FROM portals WHERE id={$portal_id}";
    $result = mysqli_query($connection,$query);
    while($data = mysqli_fetch_assoc($result)){
    $header_title = $data['portal'];
    $portal_title = $data['portal'];
    }
    $query = "SELECT * FROM topics WHERE portal_id={$portal_id} AND navbar=1";
    $topic_result = mysqli_query($connection,$query);
} else {
    $header_title = "RazaWeb";
}
if($topic_id != 156){
    $query = "SELECT * FROM sub_topic_1 WHERE topic_id={$topic_id}";
    $sub_topic_result = mysqli_query($connection,$query);
    $query = "SELECT * FROM category,category_topic_relationship WHERE topic_id={$topic_id} AND category_topic_relationship.category_id=category.id";
    $category_results = mysqli_query($connection,$query);
}



// run find_sql select query to pull out links & content relevant to this page

?>
    <!-- bootstrap wrapper -->
    <div class="container main-container">
        <!-- row 1 -->
        <?php
        
            if($topic_id != 156){
                $query = "SELECT * FROM topics WHERE id={$topic_id} LIMIT 1";
                $result = mysqli_query($connection, $query);
                $data = mysqli_fetch_assoc($result);
                $header_title = $data['topic'];
                
            }
        ?>
        <?php if( $portal_id != 156 ): ?>
        <header class="row">
            <h1><?php echo $header_title; ?></h1>
        <!-- end row 1 --></header>

        <!-- row 2 topic navigation-->
        <div class="row">
            <nav class="navbar navbar-inverse navtopic">
  <div class="container">
                <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
                <?php if($portal_id != 156){
                    while($topic_data = mysqli_fetch_assoc($topic_result)){
                        $link_topic_id = $topic_data['id'];
                        $topic_title = $topic_data['topic'];
                        if($link_topic_id == $topic_id){
                            $active_link = " class = \"active\" ";
                        } else {
                            $active_link = null;
                        }
                        $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$link_topic_id}\">{$topic_title}</a></li>";
                        echo $output;
                    }
                }
                ?>
                </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end row 2 --></div>
        
        <?php if (!empty($_GET['t'])): ?>
        <!-- row 3 Category navigation-->
        <div class="row">
            <nav class="navbar navbar-inverse navcat">
  <div class="container">
                <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
      <ul class="nav navbar-nav">
                <?php if($topic_id != 156){
                    while($category_data = mysqli_fetch_assoc($category_results)){
                        $category_id = $category_data['id'];
                        $category_title = $category_data['category_title'];
                        $output = "<li><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;c={$category_id}\">{$category_title}</a></li>";
                        echo $output;
                    }
                }
                ?>
                </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end row 3 Cateogry Navigation --></div>
        <?php endif; ?>
    
        <!-- row 3 -->
        <!-- breadcrumb div -->
        <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a> <span class="glyphicon glyphicon-circle-arrow-right"></span></li>
              <?php if($topic_id == 156) : ?>
              <li class="active"><?php echo $portal_title; ?></li>
              <?php elseif($topic_id != 156) : ?>
              <li><a href="index.php?p=<?php echo $portal_id; ?>"><?php echo $portal_title; ?></a> <span class="glyphicon glyphicon-circle-arrow-right"></span></li>
              <li class="active"><?php echo $header_title; ?></li>
              <?php endif; ?>
            </ol>
        <!-- end row 3 --></div>
        <?php elseif($portal_id == 156) : ?>
        <div>
            <p>Welcome To RazaWeb Slide Show Div</p>
        </div>
        <?php endif; ?>
        
        <!-- row 4 -->
        <div class="row">
        <!-- main content -->
        <section class="col-sm-9">
            <div class="row">
            <!-- First Content Box - This Week -->
            <div class="section-box">
                <div class="intro-box">
                    <div class="row">
                    <header>
                        <h2><a href="tw/index.html">This week in <?php echo $header_title; ?></a></h2>
                    </header>
                    <!-- end header .row --></div>
                    <div class="row">
                    <div id="this-week-summary">
                      	  <div id="this-week-slideshow">
    <img src="assets/images/culture/INSA-space-gif-smll.jpg" class="img-responsive" width="190" height="114" alt="Insa Space Gif Brazil" />
<!-- end #this-week-slideshow --></div>
  	<p><span class="bold">Website news:</span> Here at RazaWeb Culture we have updated the website with a new design, look and feel. We have added a new This Week in Culture blog which will include our pick of the top 5 links from the world of culture.</p>
    <p>In <span class="bold">culture news</span>, British street artist  Insa, who specialises in gif-iti, has made media waves by creating “the world’s largest gif” in Brazil. He has painted a repetitive horizontal graphic image large enough to be seen from space, which was filmed over two days from a satellite to create an animated gif.</p>
    <p>Labour leader Ed Miliband has set out Labour's "10-year plan" for the NHS including longer home visits by social care worker as the parties step up their campaigning 100 days before the general election.</p>
<p><a href="tw/index.html">More...</a></p>
   	      <!-- end #this-week-summary --></div>
    <br class="clearfloat" />
                    <!-- end this-week-summary .row --></div>
    
    <!-- toplinks row--><div class="row">
    <h3>Top Links</h3>
            <div class="col-sm-3 tw-bottom-box">
              <img src="assets/images/health/top_links_logo.jpg" width="200" height="112" alt="magnifying glass with porcelin head health logo" />
                <p>Top Link 1 Culture</p>
            <!-- end .tw-bottom-box --></div>
            <div class="col-sm-3 tw-bottom-box">
              <img src="assets/images/health/top_links_logo.jpg" width="200" height="112" alt="magnifying glass with porcelin head health logo" />
                <p>Top Link 1 Culture</p>
            <!-- end .tw-bottom-box --></div>
            <div class="col-sm-3 tw-bottom-box">
              <img src="assets/images/health/top_links_logo.jpg" width="200" height="112" alt="magnifying glass with porcelin head health logo" />
                <p>Top Link 1 Culture</p>
            <!-- end .tw-bottom-box --></div>
            <div class="col-sm-3 tw-bottom-box">
              <img src="assets/images/health/top_links_logo.jpg" width="200" height="112" alt="magnifying glass with porcelin head health logo" />
                <p>Top Link 1 Culture</p>
            <!-- end .tw-bottom-box --></div>
    <!-- end toplinks .row --></div>
    
    <br class="clearfloat" />
    <!-- end .intro-box --></div>
  <br class="clearfloat" />
  <!-- end .section-box --></div>
<!-- end section-box .row --></div> 
            
            <!-- Secodn content box - tabbed panel portal -->
            <div class="section-box">
                
<div class="bs-example">
	  <ul class="nav nav-tabs" id="myTab">
            <li><a data-toggle="tab" href="#sectionA">TV</a></li>
            <li><a data-toggle="tab" href="#sectionB">Film</a></li>
            <li><a data-toggle="tab" href="#sectionC">Art</a></li>
            <li><a data-toggle="tab" href="#sectionD">Architecture</a></li>
            <li><a data-toggle="tab" href="#sectionE">Literature</a></li>
            <li><a data-toggle="tab" href="#sectionF">Photography</a></li>
            <li><a data-toggle="tab" href="#sectionG">Radio</a></li>
            <li><a data-toggle="tab" href="#sectionH">Music</a></li>
            <li><a data-toggle="tab" href="#sectionI">Theatre</a></li>
	</ul>
<div class="tab-content">
<div id="sectionA" class="tab-pane fade in active">
<div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
    
    <!-- dynamically generated from Database Link list -->
    <ul>
        <?php
        
        // OOP foreach loop through objects - foreach($links as $link){ echo link->link_href}
        
        // (1.database connection and seleciton in conneciton.php file)
        // 2. SQL Query:
        $query = "SELECT * FROM links WHERE portal_id=1 AND topic_id=3 AND category_id=1";
        $result_set = mysqli_query($connection,$query);
        
        while ($link = mysqli_fetch_assoc($result_set)){
            $href = $link['link_href'];
            $text = $link['link_text'];
            
            $output = "<li><a href=\"{$href}\" target=\"_blank\">{$text}</a></li>";
            echo $output;
        }
        
        ?>
  <!-- end dynamically generated link list --></ul>
    
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel1 --></div>
<div id="sectionB" class="tab-pane fade">
<div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel2 --></div>
<div id="sectionC" class="tab-pane fade">
  <div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel3 --></div>

<div id="sectionD" class="tab-pane fade">
  <div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel4 --></div>
<div id="sectionE" class="tab-pane fade">
  <div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel5 --></div>
<div id="sectionF" class="tab-pane fade">
  <div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel6 --></div>
<div id="sectionG" class="tab-pane fade">
  <div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel7 --></div>
<div id="sectionH" class="tab-pane fade">
  <div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel8 --></div>
<div id="sectionI" class="tab-pane fade">
  <div class="panel-block">
  <div class="panel-img"><img src="../Assets/images/culture/tv/reviews/drwho/2014/11nov2014/ep12/death_in_heaven_ss_smll.jpg" width="250" height="150" alt="Dr Who Death in Heaven Screen Shot" /></div>
  <div class="panel-summary">
  <ul>
    <li><a href="http://www.digitalspy.co.uk/tv/s7/doctor-who/news/a531254/paul-mcgann-returns-to-doctor-who-in-new-50th-anniversary-mini-episode.html" target="_blank">Paul McGann returns to 'Doctor Who' in new 50th anniversary mini-episode</a></li>
    <li><a href="http://www.bbc.co.uk/mediacentre/proginfo/2013/46/the-science-of-doctor-who.html" target="_blank">The Science Of Doctor Who on BBC 2 9pm Tonight - Thursday 14th November</a></li>
    <li><a href="http://www.bbc.co.uk/blogs/doctorwho/articles/Steven-Moffat-on-The-Night-Of-The-Doctor" target="_blank">Steven Moffat on The Night Of The Doctor</a></li>
    <li><a href="articles/index.html">More TV Articles</a></li>
  </ul>
  </div>
  <br class="clearfloat" />
  <!-- end .panel-block--></div>
  <div class="panel-block">
  <div class="panel-block-icon">
    <p><a href="TV/index.html"><img src="../Assets/images/culture/homepage/tv_homepage_icon_link.jpg" alt="TV Homepage Icon Link" /></a></p>
    </div>
  	<div class="panel-block-icon"><p><a href="TV/articles/index.html"><img src="../Assets/images/culture/homepage/tv_articles_icon_link.jpg" width="120" height="108" alt="TV Articles Link" /></a></p>
  	</div>
    <div class="panel-block-icon"><p><a href="TV/reviews/index.html"><img src="../Assets/images/culture/homepage/tv_reviews_icon_link.jpg" width="120" height="108" alt="TV Reviews Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/myshows/index.html"><img src="../Assets/images/culture/homepage/tv_myshows_icon_link.jpg" width="120" height="108" alt="TV My Top Shows Icon Link" /></a></p>
    </div>
    <div class="panel-block-icon"><p><a href="TV/top5s/index.html"><img src="../Assets/images/culture/homepage/tv_top5s_icon_link.jpg" width="120" height="108" alt="TV Top 5s Icon Link" /></a></p>
    </div>
    <br class="clearfloat" />
  <!-- end .panel-block--></div>
<!-- end #panel9 --></div>


<br class="clearfloat" />
<!-- end#panelcontainer--></div>
<br class="clearfloat" />
<!-- end .tabbedpanels--></div>
<br class="clearfloat" />
  </div>
          
        </section>
        <!-- quick-links-sidebar-->
        <aside class="col-sm-3">
            <div id="quick-links-sidebar">
                <h2>Quick Links</h2>
                <p>Places</p>
      <ul>
        <li><a href="http://www.southbankcentre.co.uk/" target="_blank">Southbank Centre</a></li>
        <li><a href="http://www.tate.org.uk/visit/tate-modern" target="_blank">Tate Modern</a></li>
    <li><a href="http://www.tate.org.uk/visit/tate-britain" target="_blank">Tate Britain</a></li>
        <li><a href="http://www.royalacademy.org.uk/" target="_blank">Royal Academy of Arts</a></li>
        <li><a href="http://www.somersethouse.org.uk/" target="_blank">Somerset House</a></li>
    <li><a href="http://www.nationalgallery.org.uk/" target="_blank">National Gallery</a></li>
        <li><a href="http://www.britishmuseum.org/" target="_blank">British Museum</a></li>
        <li><a href="http://www.bl.uk/" target="_blank">British Library</a></li>
        <li><a href="http://www.barbican.org.uk/" target="_blank">Barbican</a></li>
        <li><a href="http://www.ica.org.uk/" target="_blank">ICA</a></li>
        <li><a href="places/index.html">More Places ...</a></li>
        <li></li>
        </ul>
      <p>Events</p>
      <ul>
        <li><a href="http://www.alchemyfestival.co.uk/">Alchemy Festival</a></li>
        <li><a href="https://www.edfringe.com/">Edinburgh Fringe</a></li>
        <li><a href="http://www.edinburghfestivals.co.uk/">Edinburgh Festival</a></li>
        <li><a href="http://www.bbc.co.uk/proms">The Proms</a></li>
        <li><a href="events/index.html">More Events ......</a></li>
        <li></li>
      </ul>
<p>&nbsp;</p>
      <p>In Media</p>
      <ul>
        <li><a href="http://www.bbc.co.uk/arts/" target="_blank">BBC Arts &amp; Culture</a></li>
        <li><a href="http://www.bbc.co.uk/radio4/" target="_blank">BBC Radio 4</a></li>
        <li><a href="http://www.bbc.co.uk/bbcfour/best-of">BBC 4</a></li>
        <li><a href="http://www.guardian.co.uk/culture" target="_blank">Guardian Culture</a></li>
        <li><a href="http://www.avclub.com/" target="_blank">A.V. Club</a></li>
        </ul>
      <p>Organisations</p>
      <ul>
        <li><a href="http://www.artscouncil.org.uk/">Arts Council England</a></li>
      </ul>
            <!-- end #quick-links-sidebar --></div>
        </aside>
        <!-- end .row 5 --></div>
        <!-- row 5 -->
        <footer class="row">
            <ul class="list-inline">
                <li><a href="../index.html">Home</a> | </li>
  		<li><a href="../about/index.html">About Us</a> | </li>
                <li><a href="index.html">Culture</a> | </li>
                <li><a href="../Humanities/index.html">Humanities</a> | </li>
                <li><a href="../food/index.html">Food</a> | </li>
                <li><a href="../parenting/index.html">Parenting</a> | </li>
                <li><a href="../Health/index.html">Health</a> | </li>
                <li><a href="../Careers/index.html">Careers</a> | </li>
                <li><a href="../Technology/index.htm">Technology</a> | </li>
                <li><a href="../Technology/index.htm">Science</a> | </li>
                <li><a href="../contact.html">Contact</a></li>
          </ul>
            <p>&copy; Kamal Raza Latif 2015</p>
        </footer>
    <!-- end .container--></div>
</body>
</html>
<?php

  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}

?>