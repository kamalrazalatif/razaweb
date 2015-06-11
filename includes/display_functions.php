<?php

//Display Functions File OOP version

//set up file
require_once("initialize.php");

//file META HEAD info ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
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


//WEB PAGE FUNCTIONS
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
function display_local_navigation($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
        if ($portal_id != 10 && $topic_id == 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
            // Portal & Category
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
                       
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal & Topic
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
  
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topic & category
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topic & sub topic 1
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            display_local_nav_2($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topic, Sub topic 1 & Category
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
           // Portal, Topic, Sub topic 1 & Sub Topic 2
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            display_local_nav_2($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2 & category
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            display_local_nav_2($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2 & Sub Topic 3
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2, Sub Topic 3 & Category
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id); 
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2, Sub Topic 3, & Sub Topic 4
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 10 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){  
            // Portal, Topic, Sub topic 1, Sub Topic 2, Sub Topic 3, Sub Topic 4 & Category
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } else {
            // Portal Only
            display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        }
}

function display_local_nav_1($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
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
    
    if ($portal_id != 156 && $topic_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
     // Local Nav 1 is list of Sub Topic 1s and Categories for Topics or Topic & Category Only
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
            
   }elseif ($portal_id != 156 && $topic_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Local Nav 1 is list of Sub Topic 2s and Categories for Sub Topic 1s Only
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
   } elseif ($portal_id != 156 && $topic_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Local Nav 1 is list of Sub Topic 3s and Categories for Sub Topic 2s Only
            // List of Categories for Sub_Topic_2 Pages
            $query = "SELECT * FROM category,category_sub_topic_1_relationship WHERE sub_topic_1_id={$sub_topic_1_id} AND category_sub_topic_1_relationship.category_id=category.id";
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
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
            
    //List of Sub Topic 2's for sub_Topic_1 pages 
            $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id} LIMIT 10";
            $sub_topic_2s = SubTopic2::find_by_sql($query);

            foreach($sub_topic_2s as $sub_topic2){
                $link_sub_topic_2_id = $sub_topic2->id;
                $link_sub_topic_2_title = $sub_topic2->sub_topic_2;
                if($link_sub_topic_2_id == $sub_topic_2_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;st2={$link_sub_topic_2_id}\">{$link_sub_topic_2_title}</a></li>";
                echo $output;
            } // end foreach loop       
   } elseif ($portal_id != 156 && $topic_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id == 156){
        // Local Nav 1 is list of Sub Topic 4s and Categories for Sub Topic 3s Only
            // List of Categories for Sub_Topic Pages
            $query = "SELECT * FROM category,category_sub_topic_3_relationship WHERE sub_topic_3_id={$sub_topic_3_id} AND category_sub_topic_3_relationship.category_id=category.id";
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
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
            
    // List of Sub Topic 2's for Topic pages 
            $query = "SELECT * FROM sub_topic_4 WHERE sub_topic_3_id={$sub_topic_3_id}";
            $sub_topic_4s = SubTopic4::find_by_sql($query);

            foreach($sub_topic_4s as $sub_topic4){
                $link_sub_topic_4_id = $sub_topic4->id;
                $link_sub_topic_4_title = $sub_topic4->sub_topic_4;
                if($link_sub_topic_4_id == $sub_topic_4_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;st2={$link_sub_topic_2_id}&amp;st2={$link_sub_topic_3_id}&amp;st2={$link_sub_topic_4_id}\">{$link_sub_topic_4_title}</a></li>";
                echo $output;
            } // end foreach loop           
   } elseif ($portal_id != 156 && $topic_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id != 156 && $sub_topic_4_id != 156){
        // Local Nav 1 is list of Categories for Sub Topic 4s Only
            // List of Categories for Sub_Topic Pages
            $query = "SELECT * FROM category,category_sub_topic_4_relationship WHERE sub_topic_4_id={$sub_topic_4_id} AND category_sub_topic_4_relationship.category_id=category.id";
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
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
        
   } else {
        // Portal AND Portal & Category only Pages Navigation Bar
        // Local Nav 1 is list of Topics and Categories for Portal Only
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
            
            } // end CATEGORY while Loop
            
        }// end topic status if
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
                } // END TOPICS FOREACH LOOP
    
   } // end if
                      
    $output = "</ul>";
    $output .= "<!-- /.navbar-collapse --></div>";
    $output .= "<!-- /.container-fluid --></div>";
    $output .= "</nav>";
    $output .= "<!-- end row 2 LOCAL NAV--></div>";
    
    echo $output;
}

function display_local_nav_2($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    
        
    $output = "<div class=\"row\">";
    $output .= "<nav class=\"navbar navbar-inverse navcat\">";
    $output .= "<div class=\"container\">";
    $output .= "<div class=\"navbar-header\">";
    $output .= "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-4\">";
    $output .= "<span class=\"sr-only\">Toggle navigation</span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "</button>";
      
    $output .= "<!-- END .NAVBAR-HEADER--></div>";
    $output .= "<!-- Collect the nav links, forms, and other content for toggling -->";
    $output .= "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-4\">";
    $output .= "<ul class=\"nav navbar-nav\">";
    
    echo $output;
    
    if ($portal_id != 156 && $topic_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
    // List of Categories for Sub_Topic Pages
            $query = "SELECT * FROM category,category_sub_topic_1_relationship WHERE sub_topic_1_id={$sub_topic_1_id} AND category_sub_topic_1_relationship.category_id=category.id";
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
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
            
    // List of Sub Topic 2's for Topic pages 
            $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id} LIMIT 10";
            $sub_topic_2s = SubTopic2::find_by_sql($query);

            foreach($sub_topic_2s as $sub_topic2){
                $link_sub_topic_2_id = $sub_topic2->id;
                $link_sub_topic_2_title = $sub_topic2->sub_topic_2;
                if($link_sub_topic_2_id == $sub_topic_2_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;st2={$link_sub_topic_2_id}\">{$link_sub_topic_2_title}</a></li>";
                echo $output;
            } // end foreach loop
            
            
    } elseif ($portal_id != 156 && $topic_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Local Nav 1 is list of Sub Topic 3s and Categories for Sub Topic 2s Only
            // List of Categories for Sub_Topic_2 Pages
            $query = "SELECT * FROM category,category_sub_topic_2_relationship WHERE sub_topic_2_id={$sub_topic_2_id} AND category_sub_topic_2_relationship.category_id=category.id";
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
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;st2={$sub_topic_2_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
            
    /*List of Sub Topic 3's for sub_Topic_2 pages 
            $query = "SELECT * FROM sub_topic_3 WHERE sub_topic_2_id={$sub_topic_2_id}";
            $sub_topic_3s = SubTopic3::find_by_sql($query);

            foreach($sub_topic_3s as $sub_topic3){
                $link_sub_topic_3_id = $sub_topic3->id;
                $link_sub_topic_3_title = $sub_topic3->sub_topic_3;
                if($link_sub_topic_3_id == $sub_topic_3_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;st2={$link_sub_topic_2_id}&amp;st3={$link_sub_topic_3_id}\">{$link_sub_topic_3_title}</a></li>";
                echo $output;
            } // end foreach loop   */         
    }
    
    $output = "</ul>";
    $output .= "<!-- /.navbar-collapse --></div>";
    $output .= "<!-- /.container-fluid --></div>";
    $output .= "</nav>";
    $output .= "<!-- end row 3 Cateogry Navigation--></div>";
    
    echo $output;
    
} // END FUNCTION DISPLAY_LOCAL_NAVIGATION_2

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
    
    if($portal_id != 156 && $topic_id == 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal Pages Navigation Bar
        // Local Nav 1 is list of Topics and Categories for Portal Only
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
            
            } // end CATEGORY while Loop
            
        }// end topic status if
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
                } // END TOPICS FOREACH LOOP
   } elseif ($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
     // Local Nav 1 is list of Sub Topic 1s and Categories for Topics Only
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
   }elseif ($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Local Nav 1 is list of Sub Topic 2s and Categories for Sub Topic 1s Only
            // List of Categories for Sub_Topic Pages
            $query = "SELECT * FROM category,category_sub_topic_1_relationship WHERE sub_topic_1_id={$sub_topic_1_id} AND category_sub_topic_1_relationship.category_id=category.id";
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
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
            
    // List of Sub Topic 2's for Topic pages 
            $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
            $sub_topic_2s = SubTopic2::find_by_sql($query);

            foreach($sub_topic_2s as $sub_topic2){
                $link_sub_topic_2_id = $sub_topic2->id;
                $link_sub_topic_2_title = $sub_topic2->sub_topic_2;
                if($link_sub_topic_2_id == $sub_topic_2_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;st2={$link_sub_topic_2_id}\">{$link_sub_topic_2_title}</a></li>";
                echo $output;
            } // end foreach loop           
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
    $output .= "<nav class=\"navbar navbar-inverse navtopic\">";
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



//SUB TOPIC 1 NAVIGATION
function display_sub_topic_1_navigation($portal_id,$category_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id){
    
    $output = "<div class=\"row\">";
    $output .= "<nav class=\"navbar navbar-inverse navcat\">";
    $output .= "<div class=\"container\">";
    $output .= "<div class=\"navbar-header\">";
    $output .= "<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-4\">";
    $output .= "<span class=\"sr-only\">Toggle navigation</span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "<span class=\"icon-bar\"></span>";
    $output .= "</button>";
      
    $output .= "<!-- END .NAVBAR-HEADER--></div>";
    $output .= "<!-- Collect the nav links, forms, and other content for toggling -->";
    $output .= "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-4\">";
    $output .= "<ul class=\"nav navbar-nav\">";
    
    echo $output;
    
    // List of Categories for Sub_Topic Pages
            $query = "SELECT * FROM category,category_sub_topic_1_relationship WHERE sub_topic_1_id={$sub_topic_1_id} AND category_sub_topic_1_relationship.category_id=category.id";
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
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;c={$link_category_id}\">{$category_title}</a></li>";
                echo $output;
            } // end while
            
    // List of Sub Topic 2's for Topic pages 
            $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
            $sub_topic_2s = SubTopic2::find_by_sql($query);

            foreach($sub_topic_2s as $sub_topic2){
                $link_sub_topic_2_id = $sub_topic2->id;
                $link_sub_topic_2_title = $sub_topic2->sub_topic_2;
                if($link_sub_topic_2_id == $sub_topic_2_id){
                    $active_link = " class = \"active\" ";
                } else {
                    $active_link = null;
                }
                $output = "<li{$active_link}><a href=\"index.php?p={$portal_id}&amp;t={$topic_id}&amp;st1={$sub_topic_1_id}&amp;st2={$link_sub_topic_2_id}\">{$link_sub_topic_2_title}</a></li>";
                echo $output;
            } // end foreach loop           
                         
    $output = "</ul>";
    $output .= "<!-- /.navbar-collapse --></div>";
    $output .= "<!-- /.container-fluid --></div>";
    $output .= "</nav>";
    $output .= "<!-- end row 3 Cateogry Navigation--></div>";
    
    echo $output;
    
    
} // end function display_sub_topic_1_navigation


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
        echo "<br />";
    }
    
} // end display_breadcrumbs function


//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
//MAIN CONTENT DISPLAY FUNCTIONS
function display_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    if($category_id !=156){
        // We are on a Category Page
        // Only display Main Content area - full screen width - don't display quick linsk sidebar
        echo "<section class=\"col-sm-12\">";
        display_main_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        echo "</section><!-- end main content section ------------------------------------------------------------------------------------------------------------->";
    } else {
        echo "<section class=\"col-sm-9\">";
        display_main_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        echo "</section><!-- end left hand main content section ------------------------------------------------------------------------------------------------------------->";
        display_quick_links_sidebar($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    }
} // end function display_content

function display_main_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){

    if($portal_id != 156 && $topic_id == 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal Home Pages Only
        echo display_blog_post($portal_id);
        //display_links_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        display_tabbed_panel_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } elseif($portal_id != 156 && $topic_id == 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal & Category Page Only
        display_links_in_category($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156) {
        // Portal & Topic Page Only
        display_tabbed_panel_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal, Topic & Category Page Only
        display_links_in_category($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal, Topic, Sub Topic 1 Only
        display_sub_topic_2_list($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal, Topic, Sub Topic 1 & Category Only
        top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        display_links_list($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal, Topic, Sub Topic 1 & Sub Topic 2 Only
        display_tabbed_panel_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal, Topic, Sub Topic 1, Sub Topic 2 & Category Only
        display_links_in_category($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    } else {
        // Website Root Home Page - $portal_id == 156
        welcome_box();
        echo display_blog_post($portal_id);
        display_tabbed_panel_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    }

} // end function display_main_content

// WELCOME BOX
function welcome_box(){
            
            echo "<div class=\"wrap-box\">";
            echo "<div class=\"row link-box\">";
            echo "<div class=\"row\">";
            
            $welcome_text = "<h2>Welcome to Razaweb.com, Knowledge sharing on the web.</h2><p>Razaweb is a content categorisation and aggregation site with links to multimedia content such as articles, websites, videos and resources, from a diverse range of sources, for the following topics:</p>";
            echo $welcome_text;
            echo "<!-- end .row --></div>";
            
            echo "<div class=\"row\">";
            
            $query = "SELECT * FROM portals WHERE tabpanel=1 LIMIT 4";
        
            global $db;
            $result = $db->query($query);
            while($data = $db->fetch_assoc($result)){
                $link_portal_id = $data['id'];
                $link_portal_title = $data['portal'];
                $link_portal_pic = $data['portal_pic'];
                
                $output = "<div class=\"col-sm-3\"><a href=\"index.php?p={$link_portal_id}\" class=\"thumbnail port-pic\"><p class=\"port-pic-p\">{$link_portal_title}</p><img class=\"img-responsive\" src=\"assets/images/uploads/portpic/{$link_portal_pic}\" /></a></div>";
                
                echo $output;
            } // END WHILE LOOP
            
            echo "<!-- end .row --></div>";
            echo "<div class=\"row\">";
            
            $query = "SELECT * FROM portals WHERE tabpanel=1 LIMIT 4 OFFSET 4";
            global $db;
            $result = $db->query($query);
            while($data = $db->fetch_assoc($result)){
                $link_portal_id = $data['id'];
                $link_portal_title = $data['portal'];
                $link_portal_pic = $data['portal_pic'];
                
                $output = "<div class=\"col-sm-3\"><a href=\"index.php?p={$link_portal_id}\" class=\"thumbnail port-pic\"><p class=\"port-pic-p\">{$link_portal_title}</p><img class=\"img-responsive\" src=\"assets/images/uploads/portpic/{$link_portal_pic}\" /></a></div>";
                
                echo $output;
            } // END WHILE LOOP
            
            echo "<!-- end .row --></div>";
            
            echo "<div class=\"row\">";
            echo "<br />";
            echo "<p><a href=\"about.php\">To find out About Us, our history, our mission and what RazaWeb is all about, click here</a></p>";
            echo "<p><a href=\"contact.php\">To Contact Us, click here</a></p>";
            echo "<!-- end .row --></div>";
            echo "<!-- end .row link-box--></div>";
            echo "<!-- end .wrap-box--></div>";
            
           
} // end function welcome_box()

// Content-Box Functions --------------------------------------------------------------------------------------------------------------------------------------------------->
// BLOG POST Box
function display_blog_post($portal_id){
    global $db;
    if($portal_id == 156){
        // Website Root Home Page - $portal_id == 156
        $query = "SELECT * FROM blog_posts WHERE portal_id=10 LIMIT 1";
        $result = $db->query($query);
        $data = $db->fetch_assoc($result);
        $blog_post = $data['post_content'];
        
        $output = "<div class=\"wrap-box\">";
        $output .= "<header class=\"row\">";
        $output .= "<h2>This week in RazaWeb</h2>";
        $output .= "</header>";
        $output .= "<div class=\"row link-box\">";
        $output .= "<div class=\"row\"><p>{$blog_post}</p></div>";
        $output .= "<br class=\"clearfloat\" />";
        $output .= "<!-- end link-box .row --></div>";
        $output .= "<!-- end . wrap-box END MAIN CONTENT BOX--></div>";
        
        
    } else {
        // Portal Home Pages Only
        $query = "SELECT * FROM blog_posts WHERE portal_id={$portal_id} AND topic_id=0 LIMIT 1";
        $result = $db->query($query);
        $data = $db->fetch_assoc($result);
        $blog_post = $data['post_content'];
        
        $portal = Portal::find_by_id($portal_id);
        $portal_title = $portal->portal;
                    
        $output = "<div class=\"wrap-box\">";
        $output .= "<header class=\"row\">";
        $output .= "<h2>This week in {$portal_title}</h2>";
        $output .= "</header>";
        $output .= "<div class=\"row link-box\">";
        $output .= "<div class=\"row\"><p>{$blog_post}</p></div>";
        $output .= "<br class=\"clearfloat\" />";
        $output .= "<!-- end link-box .row --></div>";
        $output .= "<!-- end . wrap-box END MAIN CONTENT BOX--></div>"; 
    }
    
    return $output;

} // end function display_blog_post

function display_links_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    if($portal_id != 156 && $topic_id == 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Portal & Category Page Only
        $output = "<div class=\"wrap-box\">";
        $output .= "<header class=\"row\">";
        echo $output;
        $box_title = display_content_box_header($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        echo $box_title;
        $output = "</header>";
        $output .= "<div class=\"row link-box\">";
        echo $output;
        top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        display_links_list($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        $output = "<br class=\"clearfloat\" />";
        $output .= "<!-- end link-box .row --></div>";
        $output .= "<!-- end . wrap-box END MAIN CONTENT BOX--></div>";
        echo $output;
    }else {
        // Portal Home Pages only
        $output = "<div class=\"wrap-box\">";
        $output .= "<div class=\"row link-box\">";
        echo $output;
        top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        display_links_list($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
        $output = "<br class=\"clearfloat\" />";
        $output .= "<!-- end link-box .row --></div>";
        $output .= "<!-- end . wrap-box END MAIN CONTENT BOX--></div>";
        echo $output;
    }
} // end function display_links_box

// display_content_box_header function
function display_content_box_header($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    if ($category_id != 156){
        
            $category = Category::find_by_id($category_id);
            $category_title = $category->category_title;
            
            $output= "<h2>{$category_title}</h2>";
            
        } elseif ($sub_topic_4_id != 156){
            
            $sub_topic_4 = SubTopic4::find_by_id($sub_topic_4_id);
            $sub_topic_4_title = $sub_topic_4->sub_topic_4;
            
            $output= "<h2>{$sub_topic_4_title}</h2>";
            
        } elseif ($sub_topic_3_id != 156){
            
            $sub_topic_3 = SubTopic3::find_by_id($sub_topic_3_id);
            $sub_topic_3_title = $sub_topic_3->sub_topic_3;
            
            $output= "<h2>{$sub_topic_3_title}</h2>";
            
        } elseif($sub_topic_2_id != 156){
            $sub_topic_2 = SubTopic2::find_by_id($sub_topic_2_id);
            $sub_topic_2_title = $sub_topic_2->sub_topic_2;
            
            $output= "<h2>{$sub_topic_2_title}</h2>";
            
        } elseif ($sub_topic_1_id != 156){
            $sub_topic_1 = SubTopic1::find_by_id($sub_topic_1_id);
            $sub_topic_1_title = $sub_topic_1->sub_topic_1;
            
            $output= "<h2>{$sub_topic_1_title}</h2>";
            
        } elseif ($topic_id != 156){
            $topic = Topic::find_by_id($topic_id);
            $topic_title = $topic->topic;

            $output= "<h2>This week in {$topic_title}</h2>";
            
        } elseif ($portal_id != 156){
            $portal = Portal::find_by_id($portal_id);
            $portal_title = $portal->portal;
            
            $output= "<h2>This week in {$portal_title}</h2>";
    
            
        } else {
            $output= "<h2>This week in RazaWeb</h2>";
        }
        
        return $output;
    
} // end function display_content_box_header

//display sub topic 2s list
function display_sub_topic_2_list($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    // Sub Topic 1 Intro Content Box
    
    $output = "<div class=\"wrap-box\">";
    $output .= "<header class=\"row\">";
    echo $output;
    $box_title = display_content_box_header($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    echo $box_title;
    $output = "</header>";
    $output .= "<div class=\"row link-box\">";
    echo $output;
    //sub_topic_2_links
        $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
        global $db;
        $result = $db->query($query);
                        
                        while ($link = $db->fetch_assoc($result)){
                            $sub_topic_2_id = $link['id'];
                            $sub_topic_2_title = $link['sub_topic_2'];
                            $sub_topic_2_pic = $link['sub_topic_2_pic'];
                            
                            $output = "<div class=\"col-sm-3\"><a class=\"thumbnail\" href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$sub_topic_1_id}&st2={$sub_topic_2_id}\" target=\"_blank\"><img class=\"img-responsive\" src=\"assets/images/uploads/topicpic/{$sub_topic_2_pic}\" /><div class=\"tn-link-text\"><p>{$sub_topic_2_title}</p></div></a></div>";
                            echo $output;
                        }// end while loop
    $output = "<br class=\"clearfloat\" />";
    $output .= "<!-- end link-box .row --></div>";
    $output .= "<!-- end . wrap-box END MAIN CONTENT BOX--></div>";
    echo $output;
           
} // end function display_sub_topic_2_list

// function display_content_box_content
function display_content_box_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
        
        if ($category_id != 156){
            //Top Links
            
            // need to return an array or array of objects - oop?
            top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($sub_topic_4_id != 156){
            //Top Links
            // display tabbed panel not links here - and no tabbed panel below in html file!
            top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);

            
        } elseif ($sub_topic_3_id != 156){
            //Top Links
            top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);

            
        } elseif($sub_topic_2_id != 156){
            //Top Links
            top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($sub_topic_1_id != 156){
            // Sub Topic 1 Intro Content Box
            
            //Top Links
            // No - show sub_topic_2 links top_links($connection,$portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
            //sub_topic_2_links
            $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
            global $db;
            $result = $db->query($query);
                            
                            while ($link = $db->fetch_assoc($result)){
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
            global $db;
            $result = $db->query($query);
            $data = $db->fetch_assoc($result);
            $blog_post = $data['post_content'];
                        
            $output= "<div class=\"row\"><p>{$blog_post}</p></div>";   
            
            //Top Links
            top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
            
        } elseif ($portal_id != 156){
            // Portal Welcome Div
            
            //Blog Post
            $query = "SELECT * FROM blog_posts WHERE portal_id={$portal_id} AND topic_id=0 LIMIT 1";
            global $db;
            $result = $db->query($query);
            $data = $db->fetch_assoc($result);
            $blog_post = $data['post_content'];
                        
            $output= "<div class=\"row\"><p>{$blog_post}</p></div>";
    
            
        } else {
                        
            //Blog Post
            $query = "SELECT * FROM blog_posts WHERE portal_id=10 LIMIT 1";
            global $db;
            $result = $db->query($query);
            $data = $db->fetch_assoc($result);
            $blog_post = $data['post_content'];

            $output= "<div class=\"row\"><p>{$blog_post}</p></div>";
        }
        
        return $output;
}



function top_links($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
                echo "<div class=\"row\">";
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
                global $db;
                $result_set = $db->query($query);
                
                while ($link = $db->fetch_assoc($result_set)){
                    $href = $link['link_href'];
                    $text = htmlentities($link['link_text']);
                    $link_pic = $link['link_pic'];
                    
                    $output = "<div class=\"col-sm-3 \"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"top-link-text\"><p><a href=\"{$href}\" target=\"_blank\">{$text}</a></p></div></div>";
                    echo $output;
                } // end while loop
                
                echo "<!-- end .row --></div>";
} //end function top_links

function display_links_list($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
                        echo "<div class=\"row\">";
                        // REST OF LINKS 5 OR MORE:
                                                // Toplinks at Topic level
                        // OOP foreach loop through objects - foreach($links as $link){ echo link->link_href}
        
                        // (1.database connection and seleciton in conneciton.php file)
                        // 2. SQL Query:
                        $query = "SELECT * FROM links WHERE portal_id={$portal_id} AND topic_id={$topic_id} AND category_id=1 LIMIT 5,10";
                        global $db;
                        $result_set = $db->query($query);
                        
                        while ($link = $db->fetch_assoc($result_set)){
                            $href = $link['link_href'];
                            $text = htmlentities($link['link_text']);
                            $link_pic = $link['link_pic'];
                            
                            $output = "<li><a href=\"{$href}\" target=\"_blank\">{$text}</a></li>";
                            echo $output;
                        }
                        echo "<!-- end .row --></div>";
                        if($topic_id != 156){
                            echo "<div class=\"row\"><p><a href=\"index.php?p={$portal_id}&t={$topic_id}&c=1\">More Articles and News</a></p></div>";
                        }
    
} // end function display_links_list

function display_links_in_category($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
      
                    $output = "<div class=\"wrap-box\">";
                    $output .= "<header class=\"row\">";
                    echo $output;
                    $box_title = display_content_box_header($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
                    echo $box_title;
                    $output = "</header>";
                    $output .= "<div class=\"row link-box\">";
                    echo $output;
                    
                    $query = "SELECT * FROM links WHERE portal_id={$portal_id}";
                    if($topic_id != 156){
                    $query .= " AND topic_id={$topic_id}";
                    }
                    if($sub_topic_1_id !=156){
                    $query .= " AND sub_topic_1_id={$sub_topic_1_id}";    
                    }
                    if($sub_topic_2_id !=156){
                    $query .= " AND sub_topic_2_id={$sub_topic_2_id}";    
                    }
                    if($category_id != 156){
                    $query .= " AND category_id={$category_id}";
                    }
                    if($category_id == 1){
                    $query .= " ORDER BY link_date DESC";           
                    }
                    global $db;
                    $result_set = $db->query($query);
                    
                    while ($link = $db->fetch_assoc($result_set)){
                        $href = $link['link_href'];
                        $text = htmlentities($link['link_text']);
                        $link_pic = $link['link_pic'];
                        
                        $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"tn-link-text\"><p>{$text}</p></div></a></div>";
                        echo $output;
                    } // END WHILE LOOP
        
                        /*if($portal_id != 156 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
                        // // Portal, Topic & Category Page Only
                            $query = "SELECT * FROM links WHERE portal_id={$portal_id} ";
                            $query .= "AND topic_id={$topic_id} ";
                            $query .= "AND category_id={$category_id}";
                            global $db;
                            $result_set = $db->query($query);
                            
                            while ($link = $db->fetch_assoc($result_set)){
                                $href = $link['link_href'];
                                $text = htmlentities($link['link_text']);
                                $link_pic = $link['link_pic'];
                                
                                $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"top-link-text\"><p>{$text}</p></div></a></div>";
                                echo $output;
                            } // END WHILE LOOP
                        } elseif($portal_id != 156 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
                        // Portal, Topic, Sub Topic 1 & Category Only
                            $query = "SELECT * FROM links WHERE portal_id={$portal_id} ";
                            $query .= "AND topic_id={$topic_id} ";
                            $query .= "AND sub_topic_1_id={$sub_topic_1_id} ";
                            $query .= "AND category_id={$category_id}";
                            global $db;
                            $result_set = $db->query($query);
                            
                            while ($link = $db->fetch_assoc($result_set)){
                                $href = $link['link_href'];
                                $text = htmlentities($link['link_text']);
                                $link_pic = $link['link_pic'];
                                
                                $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"top-link-text\"><p>{$text}</p></div></a></div>";
                                echo $output;
                            } // END WHILE LOOP
                        } elseif($portal_id != 156 && $topic_id != 156 && $category_id != 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
                        // Portal, Topic, Sub Topic 1, Sub Topic 2 & Category Only
                            $query = "SELECT * FROM links WHERE portal_id={$portal_id} ";
                            $query .= "AND topic_id={$topic_id} ";
                            $query .= "AND sub_topic_1_id={$sub_topic_1_id} ";
                            $query .= "AND sub_topic_2_id={$sub_topic_2_id} ";
                            $query .= "AND category_id={$category_id}";
                            global $db;
                            $result_set = $db->query($query);
                            
                            while ($link = $db->fetch_assoc($result_set)){
                                $href = $link['link_href'];
                                $text = htmlentities($link['link_text']);
                                $link_pic = $link['link_pic'];
                                
                                $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"top-link-text\"><p>{$text}</p></div></a></div>";
                                echo $output;
                            } // END WHILE LOOP
                        } else {
                            // Portal & Category Page Only
                            $query = "SELECT * FROM links WHERE portal_id={$portal_id} ";
                            $query .= "AND category_id={$category_id}";
                            global $db;
                            $result_set = $db->query($query);
                            
                            while ($link = $db->fetch_assoc($result_set)){
                                $href = $link['link_href'];
                                $text = htmlentities($link['link_text']);
                                $link_pic = $link['link_pic'];
                                
                                $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"top-link-text\"><p>{$text}</p></div></a></div>";
                                echo $output;
                            } // END WHILE LOOP
                            
                        }// end if*/
                        
                        echo "<!-- end .row link-box--></div>";
                        echo "<!-- end .wrap-box--></div>";
} // end function display_links_in_category
function display_topic_links_in_category($portal_id,$topic_id,$category_id){
    $query = "SELECT * FROM links WHERE portal_id={$portal_id} AND topic_id={$topic_id} AND category_id={$category_id}";
    global $db;
    $result_set = $db->query($query);
                    
            while ($link = $db->fetch_assoc($result_set)){
                $href = $link['link_href'];
                $text = htmlentities($link['link_text']);
                $link_pic = $link['link_pic'];
                
                $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"tn-link-text\"><p>{$text}</p></div></a></div>";
                echo $output;
            } // END WHILE LOOP
} //display_topic_links_in_category
// TABBED PANEL BOX ------------------------------------------------------------------------------------------------------------------------------------------->
function display_tabbed_panel_box($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    $output = "<div class=\"row\"><!-- row ? - tabbed pannel content box row -->";  
    $output .= "<div class=\"section-box\">";                
    $output .= "<div class=\"bs-example\">";
    echo $output;
    
    nav_tabs($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    
    tab_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id);
    
    $output = "<br class=\"clearfloat\" />";
    $output .= "<!-- end .bs-example--></div>";
    $output .= "<br class=\"clearfloat\" />";
    $output .= "<!-- end .section-box --></div>";
    $output .= "<!-- end section-box .row --></div>";
    echo $output;
    
} // end display_tabbed_panel_box

function nav_tabs($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    
    global $db;
    
    echo "<ul class=\"nav nav-tabs\" id=\"myTab\">";
    
    if($portal_id == 156){
        // Index Home Page - No Portals - - List of PORTALS as Nav Tabs
                    $query = "SELECT * FROM portals WHERE tabpanel=1";
                    $result = $db->query($query);
                    while($data = $db->fetch_assoc($result)){
                        $href = "#" . $data['portal'];
                        $tab = $data['portal'];
                        $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                        echo $output;
                    } // end while loop
                    
    } elseif($portal_id != 156 && $topic_id == 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // PORTAL Home Pages - List of TOPICS and/ or CATEGORIES as Nav Tabs
        
                // List of CATEGORIES for Topic Pages
                $query = "SELECT * FROM category,portal_category_relationship WHERE portal_id={$portal_id} AND portal_category_relationship.category_id=category.id";
                global $db;
                $results = $db->query($query);
                while($data = $db->fetch_assoc($results)){
                    $str = $data['category_title'];
                    $href = "#" . preg_replace('/\s+/', '', $str);
                    $tab = $data['category_title'];
                    $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                    echo $output;
                } // end while
                
                //TOPICS
                $query = "SELECT * FROM topics WHERE portal_id={$portal_id} AND tabpanel=1";
                $result = $db->query($query);
                while($data = $db->fetch_assoc($result)){
                    $href = "#" . $data['topic'];
                    $tab = $data['topic'];
                    $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                    echo $output;
                } // end while loop
      
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Topic Home Pages - List of SUB-TOPIC-1S and/or CATEGORIES as Nav Tabs
        // SUB TOPIC 1'S
        $query = "SELECT * FROM sub_topic_1 WHERE topic_id={$topic_id}";
        $sub_topic_1s = SubTopic1::find_by_sql($query);

            foreach($sub_topic_1s as $sub_topic1){
                $str = $sub_topic1->sub_topic_1;
                $href = "#" . preg_replace('/\s+/', '', $str);
                $tab = $sub_topic1->sub_topic_1;
                $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                echo $output;
            } // END FOREACH LOOP
        // Categories    
        $query = "SELECT * FROM category,category_topic_relationship WHERE topic_id={$topic_id} AND category_topic_relationship.category_id=category.id";
        $category_results = $db->query($query);
            
            while($category_data = $db->fetch_assoc($category_results)){
                $link_category_id = $category_data['id'];
                $str = $category_data['category_title'];
                $category_title = preg_replace('/\s+/', '', $str);
                $href = "#" . $category_title;
                $tab = $category_data['category_title'];
                $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                echo $output;
            } // end while
   
    
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // SUB TOPIC 1 Home Pages - List of SUB-TOPIC-2S and/or CATEGORIES as Nav Tabs
        // SUB TOPIC 2'S
        $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
        $sub_topic_2s = SubTopic2::find_by_sql($query);

            foreach($sub_topic_2s as $sub_topic2){
                $str = $sub_topic2->sub_topic_2;
                $href = "#" . preg_replace('/\s+/', '', $str);
                $tab = preg_replace('/\s+/', '', $str);
                $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                echo $output;
            } // END FOREACH LOOP
        // Categories    
        $query = "SELECT * FROM category,category_sub_topic_1_relationship WHERE sub_topic_1_id={$sub_topic_1_id} AND category_sub_topic_1_relationship.category_id=category.id";
        $category_results = $db->query($query);
            
            while($category_data = $db->fetch_assoc($category_results)){
                $link_category_id = $category_data['id'];
                $str = $category_data['category_title'];
                $category_title = preg_replace('/\s+/', '', $str);
                $href = "#" . $category_title;
                $tab = $category_title;
                $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                echo $output;
            } // end while
   
    
    } elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // SUB TOPIC 2 Home Pages - List of SUB-TOPIC-3S and/or CATEGORIES as Nav Tabs
        /* SUB TOPIC 3'S
        $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
        $sub_topic_2s = SubTopic2::find_by_sql($query);

            foreach($sub_topic_2s as $sub_topic2){
                $href = "#" . $sub_topic2->sub_topic_2;
                $tab = $sub_topic2->sub_topic_2;
                $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                echo $output;
            } // END FOREACH LOOP*/
        // Categories    
        $query = "SELECT * FROM category,category_sub_topic_2_relationship WHERE sub_topic_2_id={$sub_topic_2_id} AND category_sub_topic_2_relationship.category_id=category.id";
        $category_results = $db->query($query);
            
            while($category_data = $db->fetch_assoc($category_results)){
                $link_category_id = $category_data['id'];
                $category_title = $category_data['category_title'];
                $href = "#" . $category_title;
                $tab = $category_title;
                $output = "<li><a data-toggle=\"tab\" href=\"{$href}\">{$tab}</a></li>";
                echo $output;
            } // end while
   
    
    }else {
        
        $output = "work in progress";
        
    } // end if statement    
        
      
    echo "</ul>";        
    
} // end function nav_tabs

function tab_content($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
    global $db;
    
    echo "<div class=\"tab-content\">";
    
    if($portal_id == 156){ 
         // Index Home Page - No Portals - - List of PORTALS as Nav Tabs
         
            $query = "SELECT * FROM portals WHERE tabpanel=1";
            $result = $db->query($query);
            while($data = $db->fetch_assoc($result)){
                $tab_portal_id = $data['id'];
                $div_id = $data['portal'];
                $tab = $data['portal'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in active\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                
                
                $query2 = "SELECT * FROM portal_topic_status WHERE portal_id={$tab_portal_id} LIMIT 1";
                $result2 = $db->query($query2);
                $data2 = $db->fetch_assoc($result2);
                $topic_status_id = $data2['topic_status_id'];

                    
                if($topic_status_id == 0){ // List of Portal's Categories if relevant 
                    
                    $tab_category_query = "SELECT * FROM category,portal_category_relationship WHERE portal_id={$tab_portal_id} AND portal_category_relationship.category_id=category.id";
                    $tab_category_result = $db->query($tab_category_query);
                    while($portal_category_data = $db->fetch_assoc($tab_category_result)){
                        $link_category_id = $portal_category_data['id'];
                        $category_title = $portal_category_data['category_title'];
                        $category_pic = $portal_category_data['category_pic'];
        
                        $output = "<div class=\"col-lg-2\"><a href=\"index.php?p={$tab_portal_id}&amp;c={$link_category_id}\"><img class=\"img-responsive\" src=\"assets/images/uploads/categories/tabbedpanel/{$category_pic}\" /></a></div>";
                        echo $output;
        
                    
                    } // end category while loop
                    
                } // end topic status if
                
                    $query = "SELECT * FROM topics WHERE portal_id={$tab_portal_id} AND navbar=1";
                    $intro_topic_result = $db->query($query);
                        while($topic_data = $db->fetch_assoc($intro_topic_result)){
                            $link_topic_id = $topic_data['id'];
                            $topic_title = $topic_data['topic'];
                            $topic_pic = $topic_data['topic_pic'];
                            $link_portal_id = $topic_data['portal_id'];

                            $output = "<div class=\"col-lg-2\"><a href=\"index.php?p={$link_portal_id}&amp;t={$link_topic_id}\"><img class=\"img-responsive\" src=\"assets/images/homepage/tabbedpanel/{$div_id}/{$topic_pic}\" /></a></div>";
                            echo $output;
                        } // end topic while loop
                        
                echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";        
            } // end tab-panel-content for portal while loop
                    
    } elseif($portal_id != 156 && $topic_id == 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // PORTAL Home Pages - List of TOPICS and CATEGORIES as Tab Content

            $portal = Portal::find_by_id($portal_id);
            $portal_title = $portal->portal;
            
            //CATEGORIES Tab Content
            $query = "SELECT * FROM category,portal_category_relationship WHERE portal_id={$portal_id} AND portal_category_relationship.category_id=category.id";
            $category_results = $db->query($query);
            while($data = $db->fetch_assoc($category_results)){
                $tab_category_id = $data['id'];
                $str = $data['category_title'];
                $div_id = preg_replace('/\s+/', '', $str);
                $tab = $data['category_title'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in active\">";
                $output .= "<div class=\"panel-block\">";
                $output .= "<div class=\"row panel-summary\">";
                $output .= "<ul class=\"list-inline\">";
                echo $output;
                    
                    // Display list of 4/5 most recent links for this category in this topic from links_tbl
                    $cat_query = "SELECT * FROM links WHERE portal_id={$portal_id} AND category_id={$tab_category_id}";
                    $category_result = $db->query($cat_query);
                    while($link = $db->fetch_assoc($category_result)){
                        $href = $link['link_href'];
                        $text = htmlentities($link['link_text']);
                        $link_pic = $link['link_pic'];
                    
                        $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"tn-link-text\"><p>{$text}</p></div></a></div>";
                        echo $output;
                        } // end while loop
                        
                $output = "<!-- end dynamically generated link list --></ul>";
                $output .= "<!-- end .row panel-summary--></div>";
                $output .= "<br class=\"clearfloat\" />";
                $output .= "<!-- end .panel-block--></div>";
                $output .= "<!-- end TAB #{$div_id} --></div>";
                echo $output;    
            } // end CATEGORIES while loop
            
            
            // TOPICS Tab Content - lIST OF Category and Sub Topic 1 Links header
            $query = "SELECT * FROM topics WHERE portal_id={$portal_id} AND tabpanel=1";
            $result = $db->query($query);
            while($data = $db->fetch_assoc($result)){
                $tab_topic_id = $data['id'];
                $div_id = $data['topic'];
                $tab = $data['topic'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in active\">";
                //$output .= "<div class=\"row panel-block\">";
                //$output .= "<div class=\"col-md-12 panel-summary\">";
                $output .= "<div class=\"row\">";
                $output .= "<div class=\"col-md-12\">";
                $output .= "<ul class=\"list-inline tab-list\">";
                echo $output;
                
                    //List of CATEGORIES for each TOPIC Tab    
                    $query = "SELECT * FROM category,category_topic_relationship WHERE topic_id={$tab_topic_id} AND category_topic_relationship.category_id=category.id";
                    $category_results = $db->query($query);
                    while($data = $db->fetch_assoc($category_results)){
                        $link_category_id = $data['id'];
                        $category_title = $data['category_title'];
                        $output = "<li><a href=\"index.php?p={$portal_id}&amp;t={$tab_topic_id}&amp;c={$link_category_id}\">{$category_title}</a> |</li>";
                        echo $output;
                    } // end CATEGORIES in Topic while loop
                        
                    //List of SUB TOPIC 1s for each TOPIC Tab
                    $query = "SELECT * FROM sub_topic_1 WHERE topic_id={$tab_topic_id}";
                    $sub_topic_result = $db->query($query);
                        while($sub_topic_data = $db->fetch_assoc($sub_topic_result)){
                            $link_sub_topic_1_id = $sub_topic_data['id'];
                            $sub_topic_1_title = $sub_topic_data['sub_topic_1'];
                            $link_portal_id = $portal_id;
                            $link_topic_id = $sub_topic_data['topic_id'];

                            $output = "<li><a href=\"index.php?p={$link_portal_id}&amp;t={$link_topic_id}&amp;st1={$link_sub_topic_1_id}\">{$sub_topic_1_title}</a> |</li>";
                            echo $output;
                        } // end SUB TOPIC 1s in Topic while loop
                        
                $output = "<!-- end dynamically generated link list --></ul>";
                $output .= "<!-- end .col-md-12 tab-list--></div>";
                $output .= "<!-- end .row --></div>";
                echo $output;
                //DISPLAY List of 4 top articles on TOPIC tab
                $output = "<div class=\"row panel-block\">";
                $output .= "<div class=\"col-md-12 panel-summary\">";
                echo $output;
                //Links Loop
                $tab_content_category_id = 1; //articles and news
                display_topic_links_in_category($portal_id,$tab_topic_id,$tab_content_category_id);
                $output = "<!-- end .col-md-12 panel-summary--></div>";
                $output .= "<br class=\"clearfloat\" />";
                $output .= "<!-- end .panel-block--></div>";
                $output .= "<!-- end TAB #{$div_id} --></div>";
                echo $output;       
            } // end TOPICs while loop
            
    }elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id == 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // Topic Home Pages - List of SUB-TOPIC-1S and/or CATEGORIES as Nav Tabs
        // SUB TOPIC 1'S
        $portal = Portal::find_by_id($portal_id);
        $portal_title = $portal->portal;
        
        $topic = Topic::find_by_id($topic_id);
        $topic_title = $topic->topic;
        
        $query = "SELECT * FROM sub_topic_1 WHERE topic_id={$topic_id}";
            $result = $db->query($query);
            while($data = $db->fetch_assoc($result)){
                $tab_topic_id = $data['id'];
                $str = $data['sub_topic_1'];
                $div_id = preg_replace('/\s+/', '', $str);
                $tab = $data['sub_topic_1'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in active\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                
                    $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$tab_topic_id}";
                    $sub_topic_result = $db->query($query);
                        while($sub_topic_data = $db->fetch_assoc($sub_topic_result)){
                            $link_sub_topic_2_id = $sub_topic_data['id'];
                            $sub_topic_2_title = $sub_topic_data['sub_topic_2'];
                            $sub_topic_2_pic = $sub_topic_data['sub_topic_2_pic'];
                            $link_portal_id = $portal_id;
                            $link_sub_topic_1_id = $sub_topic_data['sub_topic_1_id'];
                            $output = "<div class=\"col-sm-3\"><a class=\"thumbnail\" href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$link_sub_topic_1_id}&st2={$link_sub_topic_2_id}\" target=\"_blank\"><img class=\"img-responsive\" src=\"assets/images/uploads/topicpic/{$sub_topic_2_pic}\" /><div class=\"tn-link-text\"><p>{$sub_topic_2_title}</p></div></a></div>";
                            echo $output;
                        } // end while loop
            echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";                  
            } // end while loop
            
            //CATEGORIES
            $query = "SELECT * FROM category,category_topic_relationship WHERE topic_id={$topic_id} AND category_topic_relationship.category_id=category.id";
            $category_results = $db->query($query);
            while($data = $db->fetch_assoc($category_results)){
                $tab_category_id = $data['id'];
                $str = $data['category_title'];
                $div_id = preg_replace('/\s+/', '', $str);
                $tab = $data['category_title'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                    
                    // Display list of 4/5 most recent links for this category in this topic from links_tbl
                    $cat_query = "SELECT * FROM links WHERE portal_id={$portal_id} AND topic_id={$topic_id} AND category_id={$tab_category_id}";
                    $category_result = $db->query($cat_query);
                    while($link = $db->fetch_assoc($category_result)){
                        $href = $link['link_href'];
                        $text = htmlentities($link['link_text']);
                        $link_pic = $link['link_pic'];
                    
                        $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"tn-link-text\"><p>{$text}</p></div></a></div>";
                        echo $output;
                        } // end while loop
            echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";
            } // end while loop
            
            
              
        
    }elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id == 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // SUB TOPIC 1 Home Pages - List of SUB-TOPIC-2S and/or CATEGORIES as Nav Tabs
        // SUB TOPIC 2'S
        $portal = Portal::find_by_id($portal_id);
        $portal_title = $portal->portal;
        
        $topic = Topic::find_by_id($topic_id);
        $topic_title = $topic->topic;
        
        $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
            $result = $db->query($query);
            while($data = $db->fetch_assoc($result)){
                $tab_sub_topic_2_id = $data['id'];
                $str = $data['sub_topic_2'];
                $div_id = preg_replace('/\s+/', '', $str);
                $tab = $data['sub_topic_2'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in active\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                
                    $query = "SELECT * FROM sub_topic_3 WHERE sub_topic_2_id={$tab_sub_topic_2_id}";
                    $sub_topic_result = $db->query($query);
                        while($sub_topic_data = $db->fetch_assoc($sub_topic_result)){
                            $link_sub_topic_3_id = $sub_topic_data['id'];
                            $sub_topic_3_title = $sub_topic_data['sub_topic_2'];
                            $sub_topic_3_pic = $sub_topic_data['sub_topic_2_pic'];
                            $link_portal_id = $portal_id;
                            $link_sub_topic_2_id = $sub_topic_data['sub_topic_2_id'];
                            $output = "<div class=\"col-sm-3\"><a class=\"thumbnail\" href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$link_sub_topic_1_id}&st2={$link_sub_topic_2_id}\" target=\"_blank\"><img class=\"img-responsive\" src=\"assets/images/uploads/topicpic/{$sub_topic_2_pic}\" /><div class=\"tn-link-text\"><p>{$sub_topic_2_title}</p></div></a></div>";
                            echo $output;
                        } // end while loop
            echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";                  
            } // end while loop
            
            //CATEGORIES
            $query = "SELECT * FROM category,category_sub_topic_1_relationship WHERE sub_topic_1_id={$sub_topic_1_id} AND category_sub_topic_1_relationship.category_id=category.id";
            $category_results = $db->query($query);
            while($data = $db->fetch_assoc($category_results)){
                $tab_category_id = $data['id'];
                $str = $data['category_title'];
                $div_id = preg_replace('/\s+/', '', $str);
                $tab = $data['category_title'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                    
                    // Display list of 4/5 most recent links for this category in this topic from links_tbl
                    $cat_query = "SELECT * FROM links WHERE portal_id={$portal_id} AND topic_id={$topic_id} AND sub_topic_1_id={$sub_topic_1_id} AND category_id={$tab_category_id}";
                    $category_result = $db->query($cat_query);
                    while($link = $db->fetch_assoc($category_result)){
                        $href = $link['link_href'];
                        $text = htmlentities($link['link_text']);
                        $link_pic = $link['link_pic'];
                    
                        $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"tn-link-text\"><p>{$text}</p></div></a></div>";
                        echo $output;
                        } // end while loop
            echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";
            } // end while loop
 
    }elseif($portal_id != 156 && $topic_id != 156 && $category_id == 156 && $sub_topic_1_id != 156 && $sub_topic_2_id != 156 && $sub_topic_3_id == 156 && $sub_topic_4_id == 156){
        // SUB TOPIC 2 Home Pages - List of SUB-TOPIC-2S and/or CATEGORIES as Nav Tabs
        // SUB TOPIC 3'S
       /* $portal = Portal::find_by_id($portal_id);
        $portal_title = $portal->portal;
        
        $topic = Topic::find_by_id($topic_id);
        $topic_title = $topic->topic;
        
        $query = "SELECT * FROM sub_topic_2 WHERE sub_topic_1_id={$sub_topic_1_id}";
            $result = $db->query($query);
            while($data = $db->fetch_assoc($result)){
                $tab_sub_topic_2_id = $data['id'];
                $str = $data['sub_topic_2'];
                $div_id = preg_replace('/\s+/', '', $str);
                $tab = $data['sub_topic_2'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in active\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                
                    $query = "SELECT * FROM sub_topic_3 WHERE sub_topic_2_id={$tab_sub_topic_2_id}";
                    $sub_topic_result = $db->query($query);
                        while($sub_topic_data = $db->fetch_assoc($sub_topic_result)){
                            $link_sub_topic_3_id = $sub_topic_data['id'];
                            $sub_topic_3_title = $sub_topic_data['sub_topic_2'];
                            $sub_topic_3_pic = $sub_topic_data['sub_topic_2_pic'];
                            $link_portal_id = $portal_id;
                            $link_sub_topic_2_id = $sub_topic_data['sub_topic_2_id'];
                            $output = "<div class=\"col-sm-3\"><a class=\"thumbnail\" href=\"index.php?p={$portal_id}&t={$topic_id}&st1={$link_sub_topic_1_id}&st2={$link_sub_topic_2_id}\" target=\"_blank\"><img class=\"img-responsive\" src=\"assets/images/uploads/topicpic/{$sub_topic_2_pic}\" /><div class=\"tn-link-text\"><p>{$sub_topic_2_title}</p></div></a></div>";
                            echo $output;
                        } // end while loop
            echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";                  
            } // end while loop*/
            
            //CATEGORIES
            $query = "SELECT * FROM category,category_sub_topic_2_relationship WHERE sub_topic_2_id={$sub_topic_2_id} AND category_sub_topic_2_relationship.category_id=category.id";
            $category_results = $db->query($query);
            while($data = $db->fetch_assoc($category_results)){
                $tab_category_id = $data['id'];
                $str = $data['category_title'];
                $div_id = preg_replace('/\s+/', '', $str);
                $tab = $data['category_title'];
                $output = "<div id=\"{$div_id}\" class=\"tab-pane fade in\"><div class=\"panel-block\"><div class=\"row panel-summary\"><ul>";
                echo $output;
                    
                    // Display list of 4/5 most recent links for this category in this topic from links_tbl
                    $cat_query = "SELECT * FROM links WHERE portal_id={$portal_id} AND topic_id={$topic_id} AND sub_topic_1_id={$sub_topic_1_id} AND sub_topic_2_id={$sub_topic_2_id} AND category_id={$tab_category_id}";
                    $category_result = $db->query($cat_query);
                    while($link = $db->fetch_assoc($category_result)){
                        $href = $link['link_href'];
                        $text = htmlentities($link['link_text']);
                        $link_pic = $link['link_pic'];
                    
                        $output = "<div class=\"col-sm-3 col-md-3\"><a class=\"thumbnail\" href=\"{$href}\" target=\"_blank\"><div class=\"top-link-pic\"><img class=\"img-responsive\" src=\"assets/images/uploads/linkpic/large/{$link_pic}\" /></div><div class=\"tn-link-text\"><p>{$text}</p></div></a></div>";
                        echo $output;
                        } // end while loop
            echo "<!-- end dynamically generated link list --></ul><!-- end .panel-summary--></div><br class=\"clearfloat\" /><!-- end .panel-block--></div><!-- end TAB #sectionA --></div>";
            } // end while loop
 
    } else {
        echo "work in progress";
                         
    }// end if

$output = "<br class=\"clearfloat\" />";
$output .= "<!-- end .tab-content--></div>";
echo $output;
    
} // end function tab_content

// quick-links-sidebar functions ------------------------------------------------------------------------------------------------------------------->

function display_quick_links_sidebar($portal_id,$topic_id,$sub_topic_1_id,$sub_topic_2_id,$sub_topic_3_id,$sub_topic_4_id,$category_id){
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
            // PORTALs only
            $query_topic_id = 0;
            $query = "SELECT * FROM links WHERE portal_id={$query_portal_id}";
            $query .= " AND quicklink=1";
            $query .= " AND portal_quicklink=1";
            //$query .= " ORDER BY rank ASC";
            global $db;
            $result_set = $db->query($query);
        
            while ($link = $db->fetch_assoc($result_set)){
                $href = $link['link_href'];
                $text = $link['link_text'];
                $pic = $link['link_pic'];
            
                $output = "<li><a href=\"{$href}\" target=\"_blank\"><div class=\"row\"><div class=\"col-lg-3\"><img class=\"img-responsive quick-link-pic\" src=\"assets/images/uploads/linkpic/large/{$pic}\" /></div><div class=\"col-lg-9\">{$text}</div></div></a></li>";
                echo $output;
            }
        } else {
            $query_topic_id = $topic_id;
            $query = "SELECT * FROM links WHERE portal_id={$query_portal_id} AND topic_id={$query_topic_id} AND quicklink=1";
            global $db;
            $result_set = $db->query($query);
        
            while ($link = $db->fetch_assoc($result_set)){
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