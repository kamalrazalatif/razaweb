<?php

//Display Functions File OOP version

//set up file
require_once("initialize.php");

//file meta head info ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

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

// Web Page Header ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
function display_header_title($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    if ($portal_id != 10 && $topic_id == 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
            // Portal Only
            $portal = Portal::find_by_id($portal_id);
            $header_title = $portal->portal;
    
        } elseif ($portal_id != 10 && $topic_id == 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
            // Portal & Category
            $portal = Portal::find_by_id($portal_id);
            $header_title = $portal->portal;
                       
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal & Topic
            $topic = Topic::find_by_id($topic_id);
            $header_title = $topic->topic;
  
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topic & category
            $topic = Topic::find_by_id($topic_id);
            $header_title = $topic->topic;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topic & sub topic 1
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $header_title = $topic_title . " | " . $sub_topic_1_title;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topc, Sub topic 1 & Category
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $header_title = $topic_title . " | " . $sub_topic_1_title;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
           // Portal, Topic, Sub topic 1 & Sub Topic 2
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $header_title = $topic_title . " | " . $sub_topic_2_title;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2 & category
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $header_title = $topic_title . " | " . $sub_topic_2_title;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2 & Sub Topic 3
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $header_title = $topic_title . " | " . $sub_topic_2_title. " | " . $sub_topic_3_title;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2, Sub Topic 3 & Category
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;
            
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $header_title = $topic_title . " | " . $sub_topic_2_title. " | " . $sub_topic_3_title;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2, Sub Topic 3, & Sub Topic 4
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $sub_topic_4 = SubTopic4::find_by_id($sub_topic_4_id);
            $sub_topic_4_title = $sub_topic_4->sub_topic_4;
            
            $header_title = $sub_topic_2_title . " | " . $sub_topic_3_title . " | " . $sub_topic_4_title;
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2, Sub Topic 3, Sub Topic 4 & Category
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $sub_topic_4 = SubTopic4::find_by_id($sub_topic_4_id);
            $sub_topic_4_title = $sub_topic_4->sub_topic_4;
            
            $header_title = $sub_topic_2_title . " | " . $sub_topic_3_title . " | " . $sub_topic_4_title;
            
        } else {
            $header_title = "";
        }
  
    return $header_title;
    
} //  end function display_header_title



// Navigation Functions ------------------------------------------------------------------------------------------------------------------------------------------------------------->
//PORTAL NAVIGATION
function display_portal_navigation($portal_id,$category_id,$topic_id){
    
    $output = "<div class=\"row\">";
    $output .= "<nav class=\"navbar navbar-inverse navtopic\">";
    $output .= "<div class=\"container\">";
    $output .= "<div class=\"navbar-header\">";
    $output .= "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">";
    $output .= "<span class=\"sr-only\">Toggle navigation</span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "</button>";
      
    $output .= "<!-- END .NAVBAR-HEADER--></div>";
    $output .= "<!-- Collect the nav links, forms, and other content for toggling -->";
    $output .= "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">";
    $output .= "<ul class=\"nav navbar-nav\">";
    
    echo $output;
    
    // Portal Pages Navigation Bar
    $query = "SELECT * FROM portal_topic_status WHERE portal_id={$portal_id} LIMIT 1";
    global $db;
    $result = $db->query($query);
    $data = $db->fetch_assoc($result);
    $topic_status_id = $data['topic_status_id'];

                    
        if($topic_status_id == 0){ // List of Portal's Categories if relevant
            
            $query = "SELECT * FROM category,portal_category_relationship WHERE portal_id={$portal_id} AND portal_category_relationship.category_id=category.id";
            global $db;
            $result = $db->query($query);
            
            while($portal_category_data = $db->fetch_assoc($result)){
                $link_category_id = $portal_category_data['id'];
                $category_title = $portal_category_data['category_title'];
            
                if($link_category_id == $category_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
            
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            
            } // end while
            
        } // end topic status if
                $query = "SELECT * FROM topics WHERE portal_id={$portal_id} AND navbar=1";
                
                $topics = Topic::find_by_sql($query);
                
                foreach($topics as $topic){
                    $link_topic_id = $topic->id;
                    $topic_title = $topic->topic;
                    if($link_topic_id == $topic_id){
                        $active_link = " class = \"active\" ";
                    } else {
                        $active_link = null;
                    }
                    $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$link_topic_id}\">{$topic_title}</a></li>";
                    echo $output;
                }
                          
    $output = "</ul>";
    $output .= "<!-- /.navbar-collapse --></div>";
    $output .= "<!-- /.container-fluid --></div>";
    $output .= "</nav>";
    $output .= "<!-- end row 2 LOCAL NAV--></div>";
    
    echo $output;
    
} // end function display_portal_navigation

//TOPIC NAVIGATION
function display_topic_navigation($portal_id,$category_id,$topic_id,$sub_topic_1_id){
    
    $output = "<div class=\"row\">";
    $output .= "<nav class=\"navbar navbar-inverse navcat\">";
    $output .= "<div class=\"container\">";
    $output .= "<div class=\"navbar-header\">";
    $output .= "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-3\">";
    $output .= "<span class=\"sr-only\">Toggle navigation</span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "</button>";
      
    $output .= "<!-- END .NAVBAR-HEADER--></div>";
    $output .= "<!-- Collect the nav links, forms, and other content for toggling -->";
    $output .= "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-3\">";
    $output .= "<ul class=\"nav navbar-nav\">";
    
    echo $output;
    
    // List of Categories for Topic Pages
            $query = "SELECT * FROM category,category_topic_relationship WHERE topic_id={$topic_id} AND category_topic_relationship.category_id=category.id";
            global $db;
            $category_results = $db->query($query);
            
            while($category_data = $db->fetch_assoc($category_results)){
                $link_category_id = $category_data['id'];
                $category_title = $category_data['category_title'];
                if($link_category_id == $category_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
            
    // List of Sub Topic 1's for Topic pages 
            $query = "SELECT * FROM sub_topic_1 WHERE topic_id={$topic_id}";
            $sub_topic_1s = SubTopic1::find_by_sql($query);

            foreach($sub_topic_1s as $sub_topic1){
                $link_sub_topic_1_id = $sub_topic1->id;
                $link_sub_topic_1_title = $sub_topic1->sub_topic_1;
                if($link_sub_topic_1_id == $sub_topic_1_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$link_sub_topic_1_id}\">{$link_sub_topic_1_title}</a></li>";
                echo $output;
            } // end foreach loop           
                         
    $output = "</ul>";
    $output .= "<!-- /.navbar-collapse --></div>";
    $output .= "<!-- /.container-fluid --></div>";
    $output .= "</nav>";
    $output .= "<!-- end row 3 Cateogry Navigation--></div>";
    
    echo $output;
    
    
} // end function display_topic_navigation



// BREADRCUMBS
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
function display_content_box_header($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
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
function display_content_box_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
        
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