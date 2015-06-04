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
        
<!-- Second content box - tabbed panel portal --------------------------------------------------------------------------------------------------------------------------->
<?php

if($category_id == 156){
    display_tabbed_panel_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
}

?>
       
</section><!-- end left hand main content section ------------------------------------------------------------------------------------------------------------->
        
<!-- quick-links-sidebar ----------------------------------------------------------------------------------------------------------------------->
<?php display_quick_links_sidebar($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id); ?>

<!-- end .row 5 --></div>

<!-- FOOTER -------------------------------------------------------------------------------------------------------------------------------------------------->        
<?php require_once("includes/footer.php"); ?>