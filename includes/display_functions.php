<?php

//Display Functions File OOP version

//set up file
require_once("initialize.php");

//file meta head info
function generate_meta_keywords($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    if ($portal_id != 10 && $topic_id == 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
            $keywords_portal = KeywordsPortal::find_by_id($portal_id);
            $keywords = $keywords_portal->keywords;
    
        } elseif ($portal_id != 10 && $topic_id == 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
            $keywords_portal = KeywordsPortal::find_by_id($portal_id);
            $keywords = $keywords_portal->keywords;
            
            $keywords_category = KeywordsCategory::find_by_id($category_id);
            $keywords .= " " . $keywords_category->keywords;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            $keywords_topic = KeywordsTopic::find_by_id($topic_id);
            $keywords = $keywords_topic->keywords;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            $keywords_topic = KeywordsTopic::find_by_id($topic_id);
            $keywords = $keywords_topic->keywords;
            
            $keywords_category = KeywordsCategory::find_by_id($category_id);
            $keywords .= " " . $keywords_category->keywords;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            $keywords_subtopic1 = KeywordsSubtopic1::find_by_id($sub_topic_1_id);
            $keywords = $keywords_subtopic1->keywords;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
           $keywords_subtopic1 = KeywordsSubtopic1::find_by_id($sub_topic_1_id);
            $keywords = $keywords_subtopic1->keywords;
            
            $keywords_category = KeywordsCategory::find_by_id($category_id);
            $keywords .= " " . $keywords_category->keywords;

            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
           $keywords_subtopic2 = KeywordsSubtopic2::find_by_id($sub_topic_2_id);
            $keywords = $keywords_subtopic2->keywords;

        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
           $keywords_subtopic2 = KeywordsSubtopic2::find_by_id($sub_topic_2_id);
            $keywords = $keywords_subtopic2->keywords;

            $keywords_category = KeywordsCategory::find_by_id($category_id);
            $keywords .= " " . $keywords_category->keywords;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            $keywords_subtopic3 = KeywordsSubtopic3::find_by_id($sub_topic_3_id);
            $keywords = $keywords_subtopic3->keywords;

            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            $keywords_subtopic3 = KeywordsSubtopic3::find_by_id($sub_topic_3_id);
            $keywords = $keywords_subtopic3->keywords;
            
            $keywords_category = KeywordsCategory::find_by_id($category_id);
            $keywords .= " " . $keywords_category->keywords;

            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            $keywords_subtopic4 = KeywordsSubtopic4::find_by_id($sub_topic_4_id);
            $keywords = $keywords_subtopic4->keywords;

            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            $keywords_subtopic4 = KeywordsSubtopic4::find_by_id($sub_topic_4_id);
            $keywords = $keywords_subtopic4->keywords;
            
            $keywords_category = KeywordsCategory::find_by_id($category_id);
            $keywords .= " " . $keywords_category->keywords;
            
        } else { // $portal_id == 10
            
            $keywords_portal = KeywordsPortal::find_by_id($portal_id);
            $keywords = $keywords_portal->keywords;
        }
        
        return $keywords;
}


function display_page_title($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    if ($portal_id != 10 && $topic_id == 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
            $portal = Portal::find_by_id($portal_id);
            $portal_title = $portal->portal;
            $display_title = "Razaweb | " . $portal_title . " Page";
    
        } elseif ($portal_id != 10 && $topic_id == 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
            $portal = Portal::find_by_id($portal_id);
            $portal_title = $portal->portal;
            
            $category = Category::find_by_id($category_id);
            $category_title = $category->category_title;
            
            $display_title = "Razaweb | " . $portal_title . " | " . $category_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $display_title = "Razaweb | " . $topic_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $category = Category::find_by_id($category_id);
            $category_title = $category->category_title;
            
            $display_title = "Razaweb | " . $topic_title . " | " . $category_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $display_title = "Razaweb | " . $topic_title . " | " . $sub_topic_1_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
           
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $category = Category::find_by_id($category_id);
            $category_title = $category->category_title;
            
            $display_title = "Razaweb | " . $sub_topic_1_title . " | " . $category_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
           
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $display_title = "Razaweb | " . $topic_title . " | " . $sub_topic_2_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $category = Category::find_by_id($category_id);
            $category_title = $category->category_title;
            
            $display_title = "Razaweb | " . $sub_topic_2_title . " | " . $category_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $display_title = "Razaweb | " . $sub_topic_2_title . " | " . $sub_topic_3_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $category = Category::find_by_id($category_id);
            $category_title = $category->category_title;
            
            $display_title = "Razaweb | " . $sub_topic_2_title . " | " . $sub_topic_3_title . " | " . $category_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $sub_topic_4 = SubTopic4::find_by_id($sub_topic_4_id);
            $sub_topic_4_title = $sub_topic_4->sub_topic_4;
            
            $display_title = "Razaweb | " . $sub_topic_2_title . " | " . $sub_topic_3_title . " | " . $sub_topic_4_title . " Page";
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $sub_topic_4 = SubTopic4::find_by_id($sub_topic_4_id);
            $sub_topic_4_title = $sub_topic_4->sub_topic_4;
            
            $category = Category::find_by_id($category_id);
            $category_title = $category->category_title;
            
            $display_title = "Razaweb | " . $sub_topic_2_title . " | " . $sub_topic_3_title . " | " . $sub_topic_4_title . " | " . $category_title . " Page";
            
        } else {
            $display_title = "RazaWeb Home Page";
        }
        
        return $display_title;
    
} // end function display_page_title

// Navigation Functions ------------------------------------------------------------------------------------------------------------------------------------------------------------->
function display_breadcrumbs($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    if($portal_id != 156){ //only portal selected
        
        $portal = Portal::find_by_id($portal_id);
        $bc_portal_title = $portal->portal;
        
        $output = "<div class=\"row\">";
        $output .= "<ol class=\"breadcrumb\">";
        $output .= "<li><a href=\"index.php\">Home</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
        
        if($topic_id == 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){ // portal & category only
            
            $category = Category::find_by_id($category_id);
            $bc_category_title = $category->category_title;
            
            $output .="<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_category_title}</li>";
            
        } elseif($topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){ // portal and topic selected only
            
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $output .="<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_topic_title}</li>";
            
        } elseif($topic_id != 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){ // portal, topic and category selected
            
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $category = Category::find_by_id($category_id);
            $bc_category_title = $category->category_title;

            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_category_title}</li>";
            
        } elseif($topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){ // portal, topic & sub_topic_1 selected only
            
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_sub_topic_1_title}</li>";
            
            
        } elseif($topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){ // portal, topic, sub_topic_1 & category selected only
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $category = Category::find_by_id($category_id);
            $bc_category_title = $category->category_title;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}\">{$bc_sub_topic_1_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_category_title}</li>";
            
        } elseif($topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){ // portal, topic, sub_topic_1 & sub_topic_2 selected only
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $bc_sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}\">{$bc_sub_topic_1_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_sub_topic_2_title}</li>";
    
        } elseif($topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){ // portal,topic,sub_topic_1,sub_topic_2 & category selected only
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $bc_sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $category = Category::find_by_id($category_id);
            $bc_category_title = $category->category_title;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}\">{$bc_sub_topic_1_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\">{$bc_sub_topic_2_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_category_title}</li>";
    
        } elseif($topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){ // portal, topic, sub_topic_1,sub_topic_2 & sub_topic_3 selected only
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $bc_sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $bc_sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}\">{$bc_sub_topic_1_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\">{$bc_sub_topic_2_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_sub_topic_3_title}</li>";
    
        } elseif($topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){ // portal, topic, sub_topic_1,sub_topic_2,sub_topic_3 & category selected only
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $bc_sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $bc_sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $category = Category::find_by_id($category_id);
            $bc_category_title = $category->category_title;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}\">{$bc_sub_topic_1_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\">{$bc_sub_topic_2_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}&st3={$sub_topic_3_id}\">{$bc_sub_topic_3_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_category_title}</li>";
    
        } elseif($topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){ // portal, topic, sub_topic_1,sub_topic_2,sub_topic_3 & sub_topic_4 selected only
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $bc_sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $bc_sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $sub_topic_4 = SubTopic4::find_by_id($sub_topic_4_id);
            $bc_sub_topic_4_title = $sub_topic_4->sub_topic_4;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}\">{$bc_sub_topic_1_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\">{$bc_sub_topic_2_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}&st3={$sub_topic_3_id}\">{$bc_sub_topic_3_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_sub_topic_4_title}</li>";
    
        } elseif($topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){ // portal, topic, sub_topic_1,sub_topic_2,sub_topic_3,sub_topic_4 & category selected
            $topic = Topic::find_by_id($topic_id);
            $bc_topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $bc_sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $bc_sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $bc_sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $sub_topic_4 = SubTopic4::find_by_id($sub_topic_4_id);
            $bc_sub_topic_4_title = $sub_topic_4->sub_topic_4;
            
            $category = Category::find_by_id($category_id);
            $bc_category_title = $category->category_title;
            
            $output .= "<li><a href=\"index.php?p={$portal_id}\">{$bc_portal_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}\">{$bc_topic_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}\">{$bc_sub_topic_1_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\">{$bc_sub_topic_2_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}&st3={$sub_topic_3_id}\">{$bc_sub_topic_3_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}&st3={$sub_topic_3_id}&st4={$sub_topic_4_id}\">{$bc_sub_topic_4_title}</a> <span class=\"glyphicon glyphicon-circle-arrow-right\"></span></li>";
            $output .="<li class=\"active\">{$bc_category_title}</li>";
    
        } else {
            $output .="<li class=\"active\">{$bc_portal_title}</li>";
        }
        

        echo $output;

        echo "</ol><!-- end row 4 breadcrumb div --></div>";
        
    } else {
        echo "<div><p>Welcome To RazaWeb Slide Show Div</p></div>";
    }
    
} // end display_breadcrumbs function

// Content-Box Functions --------------------------------------------------------------------------------------------------------------------------------------------------->

// display_content_box_header function
/*
 *parameters are db conneciton, portal_id, ........
 *return String
 *
 *
 */
function display_content_box_header($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    if ($category_id != 156){
            $query = "SELECT * FROM category WHERE id={$category_id} LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $category_title = $data['category_title'];
            
            $output= "<h2>{$category_title}</h2>";
            
        } elseif ($sub_topic_4_id != 156){
            
            $query = "SELECT * FROM sub_topic_4 WHERE id={$sub_topic_4_id} LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $sub_topic_4_title = $data['sub_topic_4'];
            
            $output= "<h2>{$sub_topic_4_title}</h2>";
            
        } elseif ($sub_topic_3_id != 156){
            
            $query = "SELECT * FROM sub_topic_3 WHERE id={$sub_topic_3_id} LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $sub_topic_3_title = $data['sub_topic_3'];
            
            $output= "<h2>{$sub_topic_3_title}</h2>";
            
        } elseif($sub_topic_2_id != 156){
            $query = "SELECT * FROM sub_topic_2 WHERE id={$sub_topic_2_id} LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $sub_topic_2_title = $data['sub_topic_2'];
            
            $output= "<h2>{$sub_topic_2_title}</h2>";
            
        } elseif ($sub_topic_1_id != 156){
            $query = "SELECT * FROM sub_topic_1 WHERE id={$sub_topic_1_id} LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $sub_topic_1_title = $data['sub_topic_1'];
            
            $output= "<h2>{$sub_topic_1_title}</h2>";
            
        } elseif ($topic_id != 156){
               
            $query = "SELECT * FROM topics WHERE id={$topic_id} LIMIT 1";
            $result = mysqli_query($connection, $query);
            $data = mysqli_fetch_assoc($result);
            $topic_title = $data['topic'];

            $output= "<h2><a href=\"tw/index.html\">This week in {$topic_title}</a></h2>";
            
        } elseif ($portal_id != 156){
            
            $query = "SELECT * FROM portals WHERE id={$portal_id} LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $portal_title = $data['portal'];
            
            $output= "<h2><a href=\"tw/index.html\">This week in {$portal_title}</a></h2>";
    
            
        } else {
            $output= "<h2><a href=\"tw/index.html\">This week in RazaWeb</a></h2>";
        }
        
        return $output;
    
} // end function display_content_box_header


// function display_content_box_content
function display_content_box_content($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
        
        if ($category_id != 156){
            //Top Links
            
            // need to return an array or array of objects - oop?
            top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($sub_topic_4_id != 156){
            //Top Links
            // display tabbed panel not links here - and no tabbed panel below in html file!
            top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);

            
        } elseif ($sub_topic_3_id != 156){
            //Top Links
            top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);

            
        } elseif($sub_topic_2_id != 156){
            //Top Links
            top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($sub_topic_1_id != 156){
            // Sub Topic 1 Intro Content Box
            
            //Top Links
            // No - show sub_topic_2 links top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
            //sub_topic_2_links
            $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
                            $result_set = mysqli_query($connection,$query);
                            
                            while ($link = mysqli_fetch_assoc($result_set)){
                                $sub_topic_2_id = $link['id'];
                                $sub_topic_2_title = $link['sub_topic_2'];
                                $sub_topic_2_pic = $link['sub_topic_2_pic'];
                                
                                $output = "<div class=\"col-sm-3\"><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\" target=\"_blank\"><img class=\"img-responsive\" src=\"assets/images/uploads/topicpic/{$sub_topic_2_pic}\" /></a><p><a href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\" target=\"_blank\">{$sub_topic_2_title}</a></p></div>";
                                echo $output;
                            }
            
        } elseif ($topic_id != 156){
            // Topics Welcome Div
            
            //Blog Post
            $query = "SELECT * FROM blog_posts WHERE portal_id={$portal_id} AND topic_id=0 LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $blog_post = $data['post_content'];
                        
            $output= "<div class=\"row\"><p>{$blog_post}</p></div>";   
            
            //Top Links
            top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 156){
            // Portal Welcome Div
            
            //Blog Post
            $query = "SELECT * FROM blog_posts WHERE portal_id={$portal_id} AND topic_id=0 LIMIT 1";
            $result = mysqli_query($connection,$query);
            $data = mysqli_fetch_assoc($result);
            $blog_post = $data['post_content'];
                        
            $output= "<div class=\"row\"><p>{$blog_post}</p></div>";
    
            
        } else {
                        
                        //Welcome
                        $welcome_box = welcome_box($connection);
                        
                        //Blog Post
                        $query = "SELECT * FROM blog_posts WHERE portal_id=10 LIMIT 1";
                        $result = mysqli_query($connection,$query);
                        $data = mysqli_fetch_assoc($result);
                        $blog_post = $data['post_content'];
            
            
            $output= "{$welcome_box}<div class=\"row\"><p>{$blog_post}</p></div>";
        }
        
        return $output;
}

function welcome_box($connection){
    
            echo "<div class=\"row\">";
            
            $welcome_text = "<p>Welcome to Razaweb.com, a content aggregation site with links to multimedia content such as articles, websites, videos and resources, from a diverse range of sources, for the following topics:</p>";
            echo $welcome_text;
            echo "<!-- end .row --></div>";
            
            echo "<div class=\"row\">";
            
            $query = "SELECT * FROM portals WHERE tabpanel=1";
        
            $result = mysqli_query($connection,$query);
            while($data = mysqli_fetch_assoc($result)){
                $link_portal_id = $data['id'];
                $link_portal_title = $data['portal'];
                $link_portal_pic = $data['portal_pic'];
                
                $output = "<div class=\"col-sm-3\"><a href=\"index.php?p={$link_portal_id}\"><p class=\"port-pic-p\">{$link_portal_title}</p><img class=\"img-responsive\" src=\"assets/images/uploads/portpic/{$link_portal_pic}\" /></a></div>";
                
                echo $output;
            }
            
            echo "<!-- end .row --></div>";
            
            echo "<div class=\"row\">";
            echo "<p><a href=\"about.php\">To find out About Us, our history, our mission and what RazaWeb is all about, click here</a></p>";
            echo "<p><a href=\"contact.php\">To Contact Us, click here</a></p>";
            echo "<!-- end .row --></div>";
            
           
}

function top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    // portal level Top links
                $query = "SELECT * FROM links ";
                $query .= "WHERE portal_id={$portal_id} ";
                if($topic_id != 156){
                    $query .= "AND topic_id={$topic_id} ";
                }
                if($sub_topic_1_id != 156){
                    $query .= "AND sub_topic_1_id={$sub_topic_1_id} ";
                }
                if($sub_topic_2_id != 156){
                    $query .= "AND sub_topic_2_id={$sub_topic_2_id} ";
                }
                if($sub_topic_3_id != 156){
                    $query .= "AND sub_topic_3_id={$sub_topic_3_id} ";
                }
                if($sub_topic_4_id != 156){
                    $query .= "AND sub_topic_4_id={$sub_topic_4_id} ";
                }
                if($category_id != 156)
                $query .= "AND category_id={$category_id} ";
                $query .= "LIMIT 4";
                $result_set = mysqli_query($connection,$query);
                
                while ($link = mysqli_fetch_assoc($result_set)){
                    $href = $link['link_href'];
                    $text = htmlentities($link['link_text']);
                    $link_pic = $link['link_pic'];
                    
                    $output = "<div class=\"col-sm-3 \"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"top-link-text\"><p><a href=\"{$href}\" target=\"_blank\">{$text}</a></p></div></div>";
                    echo $output;
                }
}

function display_links_list($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
                            echo "<div class=\"row\">";
                        // REST OF LINKS 5 OR MORE:
                                                // Toplinks at Topic level
                        // OOP foreach loop through objects - foreach($links as $link){ echo link->link_href}
        
                        // (1.database connection and seleciton in conneciton.php file)
                        // 2. SQL Query:
                        $query = "SELECT * FROM links WHERE portal_id={$portal_id} AND topic_id={$topic_id} AND category_id=1 LIMIT 5,10";
                        $result_set = mysqli_query($connection,$query);
                        
                        while ($link = mysqli_fetch_assoc($result_set)){
                            $href = $link['link_href'];
                            $text = htmlentities($link['link_text']);
                            $link_pic = $link['link_pic'];
                            
                            $output = "<li><a href=\"{$href}\" target=\"_blank\">{$text}</a></li>";
                            echo $output;
                        }
                        echo "</div>";
                        if($topic_id != 156){
                            echo "<div class=\"row\"><p><a href=\"index.php?p={$portal_id}&t={$topic_id}&c=1\">More Articles and News</a></p></div>";
                        }
    
}

// quick-links-sidebar functions ------------------------------------------------------------------------------------------------------------------->

function display_quick_links_sidebar($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    $output = "<aside class=\"col-sm-3\">";
    $output .= "<div id=\"quick-links-sidebar\">";
    $output .= "<h2>Quick Links</h2>";
    $output .= "<ul class=\"quick-links-ul\">";
    
    echo $output;
  
        if($portal_id == 156){
            $query_portal_id = 10;
        } else {
            $query_portal_id = $portal_id;
        }
        
        if($topic_id == 156){
            $query_topic_id = 0;
            $query = "SELECT * FROM links WHERE portal_id={$query_portal_id} AND quicklink=1";
            $result_set = mysqli_query($connection,$query);
        
            while ($link = mysqli_fetch_assoc($result_set)){
                $href = $link['link_href'];
                $text = $link['link_text'];
            
                $output = "<li><a href=\"{$href}\" target=\"_blank\">{$text}</a></li>";
                echo $output;
            }
        } else {
            $query_topic_id = $topic_id;
            $query = "SELECT * FROM links WHERE portal_id={$query_portal_id} AND topic_id={$query_topic_id} AND quicklink=1";
            $result_set = mysqli_query($connection,$query);
        
            while ($link = mysqli_fetch_assoc($result_set)){
                $href = $link['link_href'];
                $text = $link['link_text'];
            
                $output = "<li><a href=\"{$href}\" target=\"_blank\">{$text}</a></li>";
                echo $output;
            }
        }

    $output = "<!-- end dynamically generated link list --></ul>";    
    $output .= "<!-- end #quick-links-sidebar --></div>";
    $output .= "</aside>";
    echo $output;
  
} // end display_quick_links_sidebar function


?>