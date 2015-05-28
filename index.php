<?php

//header file - global navigation bar and logo
require_once("includes/header.php");

//set up url query strign variables that drive what appears on page
$portal_id = !empty($_GET['p']) ? (int)$_GET['p'] : 156;
$topic_id = !empty($_GET['t']) ? (int)$_GET['t'] : 156;
$sub_topic_1_id = !empty($_GET['st1']) ? (int)$_GET['st1'] : 156;
$sub_topic_2_id = !empty($_GET['st2']) ? (int)$_GET['st2'] : 156;
$sub_topic_3_id = !empty($_GET['st3']) ? (int)$_GET['st3'] : 156;
$sub_topic_4_id = !empty($_GET['st4']) ? (int)$_GET['st4'] : 156;
$category_id = !empty($_GET['c']) ? (int)$_GET['c'] : 156;



// run find_sql select query to pull out links & content relevant to this page

?>
<!-- bootstrap wrapper --------------------------------------------------------------------------------->
<div class="container main-container">
<!-- row 1 HEADER TITLE--------------------------------------------------------------------------->
<?php if( $portal_id != 156 ): ?>
        <header class="row">
            <h1>
            <?php
                $header_title = display_header_title($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
                echo $header_title;
            ?>
            </h1>
        <!-- end row 1 --></header>
<?php endif; ?>

<!-- row 2 LOCAL/TOPIC navigation------------------------------------------------------------------------------->
<?php if( $portal_id != 156 ): ?>
<?php display_portal_navigation($portal_id,$category_id,$topic_id); ?>
<?php endif; ?>

<!-- row 3 LOCAL/Category navigation--------------------------------------------------------------------------------------->

<?php if (!empty($_GET['t'])): ?>
<?php display_topic_navigation($portal_id,$category_id,$topic_id,$sub_topic_1_id); ?>
<?php endif; ?>
    
<!-- row 4 breadcrumb div------------------------------------------------------------------------------------------------------>
<?php display_breadcrumbs($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id); ?>
        
<!-- row 5 CONTENT - main content section AND Quicklinks sidebar ------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<div class="row"><!-- row 5 - left content div and quick links side bar -->
    <!-- main content - left side div - content box and/or tabbed panel -------------------------------------------------------------------------->
    <section class="col-sm-9">
            <!-- upper/ 1st main-content-box ----------------------------------------------------------------------->
            <div class="wrap-box">
<!-- main-content-box header ----------------------------------------------------------------->
            <header class="row">        
                <?php
                
                $box_title = display_content_box_header($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
                echo $box_title;
                
                ?>                         
            </header>
<!-- main-content-box content ------------------------------------------------------------------------->
            <div class="row link-box">
            <!-- First Content Box - This Week -->
                <?php
            
                $content_box_content = display_content_box_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
                echo $content_box_content;
                
                ?>
            <br class="clearfloat" />
            <!-- end link-box .row --></div>
<!-- end . wrap-box END MAIN CONTENT BOX--></div>

      
<?php if($category_id == 156) : ?>
          
<!-- Second content box - tabbed panel portal --------------------------------------------------------------------------------------------------------------------------->
<div class="row"><!-- row ? - tabbed pannel content box row -->  
<div class="section-box">                
<div class="bs-example">
	  <ul class="nav nav-tabs" id="myTab">
            <?php if($portal_id == 156) : ?>
                <?php
                    
                    $query = "SELECT * FROM portals WHERE tabpanel=1";
                    $result = mysqli_query($connection,$query);
                    while($data = mysqli_fetch_assoc($result)){
                        $href = "#" . $data['portal'];
                        $tab = $data['portal'];
                        $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                        echo $output;
                    }
                    
                ?>
            <?php elseif($portal_id == 1) : ?>
                <?php
                    
                    $query = "SELECT * FROM topics WHERE portal_id={$portal_id}";
                    $result = mysqli_query($connection,$query);
                    while($data = mysqli_fetch_assoc($result)){
                        $href = "#" . $data['topic'];
                        $tab = $data['topic'];
                        $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                        echo $output;
                    }
                    
                ?>
                
            <?php endif; ?>        
	</ul>
<div class="tab-content">
    <?php if($portal_id == 156) : ?>   
        <?php
                    
            $query = "SELECT * FROM portals WHERE tabpanel=1";
            $result = mysqli_query($connection,$query);
            while($data = mysqli_fetch_assoc($result)){
                $tab_portal_id = $data['id'];
                $div_id = $data['portal'];
                $tab = $data['portal'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in active\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                
                    $query = "SELECT * FROM topics WHERE portal_id={$tab_portal_id} AND navbar=1";
                    $intro_topic_result = mysqli_query($connection,$query);
                        while($topic_data = mysqli_fetch_assoc($intro_topic_result)){
                            $link_topic_id = $topic_data['id'];
                            $topic_title = $topic_data['topic'];
                            $topic_pic = $topic_data['topic_pic'];
                            $link_portal_id = $topic_data['portal_id'];

                            $output = "<div class=\"col-lg-2\"><a href=\"index.php?p={$link_portal_id}&amp;t={$link_topic_id}\"><img class=\"img-responsive\" src=\"assets/images/homepage/tabbedpanel/{$div_id}/{$topic_pic}\" /></a></div>";
                            echo $output;
                        }
                        
                echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";        
            }
                    
        ?>
<?php endif; ?>
<br class="clearfloat" />
<!-- end .tab-content--></div>
<br class="clearfloat" />
<!-- end .bs-example--></div>
<br class="clearfloat" />
  <!-- end .section-box --></div>
<!-- end section-box .row --></div>
<?php endif; ?>          
</section><!-- end left hand main content section ------------------------------------------------------------------------------------------------------------->
        
<!-- quick-links-sidebar ----------------------------------------------------------------------------------------------------------------------->
<?php display_quick_links_sidebar($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id); ?>

<!-- end .row 5 --></div>

<!-- FOOTER -------------------------------------------------------------------------------------------------------------------------------------------------->        
<?php require_once("includes/footer.php"); ?>