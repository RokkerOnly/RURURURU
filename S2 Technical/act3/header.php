<?php
$name     = "Jose Paolo Ong";
$title    = "Full Stack Developer";
$email    = "ongjose@gmail.com";
$phone    = "09172320910";
$address  = "Road 10, Baranggay Baesa, Quezon City";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $name ?> - Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="resume">

    <div class="top">
        <div class="photo">
            <img src="Photo-With-A-Suit.png" alt="Profile Photo">
        </div>
        <div class="personal">
            <h1><?= $name ?></h1>
            <p><?= $title ?></p>
            <p><?= $email ?></p>
            <p><?= $phone ?></p>
            <p><?= $address ?></p>
        </div>
    </div>

    <nav>
        <a href="index.php?page=objective">Career Objective</a>
        <a href="index.php?page=education">Educational Attainment</a>
        <a href="index.php?page=skills">Skills</a>
        <a href="index.php?page=affiliation">Affiliation</a>
        <a href="index.php?page=experience">Work Experience</a>
    </nav>

    <div class="content">