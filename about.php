<?php

require_once("includes/header.php");

?>



<div class="container main-container">
            <header class="row">
            <h1>About Us</h1>
        <!-- end row 1 --></header>
            <section class="section-box">
                <h2>What is RazaWeb?</h2>
<p>Here at RazaWeb we are passionate about knowledge sharing and education.</p>
<p>We believe that education is about broadening the mind and that it is a life long journey.</p>
RazaWeb is a repository of links to various content across a broad range of subjects.
We like to think of RazaWeb as a virtual library where you can easily find what you are looking
for or where you can just browse through the portals and topic pages and discover something new and exciting.
We are essentially a link aggregation website, but with a difference.
We present the content and links we share in an engaging and easily accessible manner.</p>
<h3>History</h3>
<p>RazaWeb started as a personal website where our  founder could store all his links to various content from all around the web in  one place. He had amassed a wealth of links to articles and multimedia content  for subjects from politics to TV, BBQ recipes to Food Intolerance guides,  Economic news to Technology How-To videos and much more. He decided to arrange all  these links, stored in one central website, in a methodical manner, categorised  by topic and subject areas. When talking with friends about an article he had  just read, or a recipe he had come across, he realised that it would much  easier to share his website with other people rather than email useful links to  different people at different times. The more he wanted to share, the more the  realised that RazaWeb was a tool that many people would find useful.</p>
<h3>Today</h3>
<p>In essence RazaWeb is a multimedia content aggregation  website. We provide links to multimedia content form a range of different providers  such as the BBC, The Guardian, YouTube, TED Talks, Huffington Post, IMDB,  Wikipedia, Tardis Wikia, den of Geek and many more. </p>
<p>We cover a wide range of subjects, everything you ever needed  to now and keep updated with from the worlds of:</p>
<ul>
  <li><a href="index.php?p=1">Culture</a> (Art, Architecture, TV, Film, Radio,  Photography, Music, Theatre)</li>
  <li><a href="index.php?p=2">Humanities</a> (Politics, Economics, Philosophy, Religion  &amp; Spirituality, Anthropology, Sociology) </li>
  <li><a href="index.php?p=4">Parenting</a></li>
  <li><a href="index.php?p=7">Technology and Computing</a></li>
  <li><a href="index.php?p=8">Science</a></li>
  <li><a href="index.php?p=3">Food</a> (Cooking recipes by Cuisine, BBQ recipes and  guides, Food Intolerance Information, Restaurant Reviews)</li>
  <li><a href="index.php?p=5">Health</a></li>
  <li><a href="index.php?p=6">Careers</a></li>
</ul>
<p>At RazaWeb you can find links to everything from YouTube  videos teaching you how to code to Gluten free recipes, GDP data for nations to  fun facts about your TV shows, TED Talks on science to children’s book recommendation  for parents and much more.</p>
<p>We aim to provide these links and all the content in a fun  and easily accessible manner. This much information can seem daunting, especially  if just listed in one full of links from different subjects. We hope that by grouping  our content and links by portal, topic and type, it’s easy to find what you are  looking for or that you even discover something new on your journey into the  web of links that RazaWeb is home to.</p>
<p>Happy Surfing!</p>
<p>The Team at RazaWeb</p>
                
            </section>

        <footer class="row">
            <ul class="list-inline">
                <li><a href="index.php">Home</a> | </li>
  		<li><a href="about.php">About Us</a> | </li>
                <li><a href="index.php?p=1">Culture</a> | </li>
                <li><a href="index.php?p=2">Humanities</a> | </li>
                <li><a href="index.php?p=3">Food</a> | </li>
                <li><a href="index.php?p=4">Parenting</a> | </li>
                <li><a href="index.php?p=5">Health</a> | </li>
                <li><a href="index.php?p=6">Careers</a> | </li>
                <li><a href="index.php?p=7">Technology</a> | </li>
                <li><a href="index.php?p=8">Science</a> | </li>
                <li><a href="contact.php">Contact</a></li>
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