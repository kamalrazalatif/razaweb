<?php

require_once("includes/connection.php");
require_once("includes/functions.php");

$query = "SELECT * FROM links, portals, topics, sub_topic_1, sub_topic_2, sub_topic_3, sub_topic_4, category, content_source ";
$query .= "WHERE portals.id = links.portal_id ";
$query .= "AND topics.id = links.topic_id ";
$query .= "AND sub_topic_1.id = links.sub_topic_1_id ";
$query .= "AND sub_topic_2.id = links.sub_topic_2_id ";
$query .= "AND sub_topic_3.id = links.sub_topic_3_id ";
$query .= "AND sub_topic_4.id = links.sub_topic_4_id ";
$query .= "AND category.id = links.category_id ";
$query .= "AND content_source.id = links.content_source_id";
$result = mysqli_query($connection,$query);



?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset=utf-8" >
            <title>RazaWeb Display Links Page</title>
            <style>
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 5px;
                }
                th{
                    background-color: black;
                    color: white;
                }
                tr{
                    border: 1px solid black;
                    padding: 5px;
                }
                tr:nth-child(even) {
                    background-color: #eee;
                }
                tr:nth-child(odd) {
                    background-color:#fff;
                }
            </style>
        </head>
        <body>
            <header>
                <h1>RazaWeb Database Links Display Table</h1>
            </header>
            <section>
                <p>Server Document Root is: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
                <table>
                    <thead>
                        <tr>
                            <th>Portal</th>
                            <th>Topic</th>
                            <th>Sub Topic 1</th>
                            <th>Sub Topic 2</th>
                            <th>Sub Topic 3</th>
                            <th>Sub Topic 4</th>
                            <th>Category</th>
                            <th>Content Source</th>
                            <th>Link Pic</th>
                            <th>Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($data = mysqli_fetch_assoc($result)){
                                $portal = $data['portal'];
                                $topic = $data['topic'];
                                $sub_topic_1 = $data['sub_topic_1'];
                                $sub_topic_2 = $data['sub_topic_2'];
                                $sub_topic_3 = $data['sub_topic_3'];
                                $sub_topic_4 = $data['sub_topic_4'];
                                $category = $data['category_title'];
                                $content_source = $data['content_source'];
                                $link_pic = get_web_path_tn($data['link_pic']);
                                $link_pic_path = get_web_path_tn($data['link_pic']);
                                $link_text = $data['link_text'];
                                $link_href = $data['link_href'];
                                $output = "<tr><td>{$portal}</td><td>{$topic}</td><td>{$sub_topic_1}</td><td>{$sub_topic_2}</td><td>{$sub_topic_3}</td><td>{$sub_topic_4}</td><td>{$category}</td><td>{$content_source}</td><td><img src=\"{$link_pic}\" /></td><td><a href=\"{$link_href}\" target=\"_blank\">{$link_text}</a></td></tr>";
                                echo $output;
                            }
                        ?>
                        
                    </tbody>
                </table>
            </section>
        </body>
    </html>
    <?php
    // 5. Close connection
    if (isset($connection)){
        mysqli_close($connection);
    }
?> 