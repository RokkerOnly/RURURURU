<?php
$choice = isset($_GET['friend']) ? $_GET['friend'] : '';

if ($choice == 'one') {
    ?>
    <h2>Cedrick</h2>
    <img src="ced.jpg" alt="Friend One">
    <p>I grew up in Lagro. From a young age, I have always loved fixing electronics. It has shaped who I am today. One thing people don't know about me is that I have been collecting electronics since I was 7 years old.</p>

<?php } elseif ($choice == 'two') { ?>
    <h2>James</h2>
    <img src="james.jpg" alt="Friend Two">
    <p>Raised in Caloocan, Comedy has always been my passion. It made me who I am today. Few people know I'm part of a podcast.</p>

<?php } elseif ($choice == 'three') { ?>
    <h2>JP</h2>
    <img src="jp.jpg" alt="Friend Three">
    <p>Growing up in Quzon City, I found my passion in coding early on. It became a core part of who I am. What not many people know is that I won 2 spelling bee quizzes.</p>

<?php } elseif ($choice == 'four') { ?>
    <h2>Gerald</h2>
    <img src="rald.jpg" alt="Friend Four">
    <p>I grew up in Tondo with a deep passion for wrioting. It shaped who I am today. Not many people know that I wrote a poem book back in highschool.</p>

<?php } elseif ($choice == 'five') { ?>
    <h2>Alex</h2>
    <img src="monte.jpg" alt="Friend Five">
    <p>I grew up in Vigan, where my love for cooking first began. It has always been more than just a hobby for me and it is a part of who I am. Over the years, cooking shaped my personality and how I connect with others.</p>

<?php } else { ?>
    <p>Please click on a friend above to read their biography.</p>
<?php } ?>