<?php require("header.php"); ?>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'objective';

if ($page == 'objective') {
    include("objective.php");
} elseif ($page == 'education') {
    include("education.php");
} elseif ($page == 'skills') {
    include("skills.php");
} elseif ($page == 'affiliation') {
    include("affiliation.php");
} elseif ($page == 'experience') {
    include("experience.php");
}
?>

<?php require("footer.php"); ?>;