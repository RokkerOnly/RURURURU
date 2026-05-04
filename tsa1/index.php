<?php
  $name = "Jose Paolo Ong";
  $title = "Full Stack Developer";
  $email = "ongjosepaolo@gmail.com";
  $phone = "09551502544";
  $address = "Road 1, Baranggay Bagong Pag-Asa, Quezon City";
  $profile = "I am a IT student who enjoys building web applications using HTML, CSS, and PHP.";

  $skill1 = "C++";
  $skill2 = "Java";
  $skill3 = "Python";
  $skill4 = "Javascript";
  $skill5 = "PHP";
  $skill6 = "SQL";

  $job_role = "Web Developer Intern";
  $job_company = "Lockheed Martin";
  $job_year = "2026-2027";
  $job_desc = "Built web pages using HTML, CSS, and PHP.";

  $edu_degree = "BSITWMA";
  $edu_school = "Far Eastern University Institute of Technology";
  $edu_year = "2024-Present";

  $cert1 = "Information Technology Specialist in Java (2025)";
  $cert2 = "Information Technology Specialist in Python (2026)";
  $cert3 = "Information Technology Specialist in Javascript (2026)";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $name?> - Resume</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="resume">

  <!-- LEFT SIDEBAR -->
  <aside class="sidebar">
    <img src="Photo-With-A-Suit.png" alt="Profile Photo">
    <h1><?= $name?></h1>
    <p class="job-title"><?= $title ?></p>

    <h3>Contact</h3>
    <p><?= $email ?></p>
    <p><?= $phone ?></p>
    <p><?= $address ?></p>

    <h3>Skills</h3>
    <ul>
      <li><?= $skill1 ?></li>
      <li><?= $skill2 ?></li>
      <li><?= $skill3 ?></li>
      <li><?= $skill4 ?></li>
      <li><?= $skill5 ?></li>
      <li><?= $skill6 ?></li>
    </ul>
  </aside>

  <!-- RIGHT MAIN CONTENT -->
  <main class="content">

    <section>
      <h2>Profile</h2>
      <p><?= $profile ?></p>
    </section>

    <hr>

    <section>
      <h2>Experience</h2>
      <p><strong><?= $job_role ?></strong> - <?= $job_company ?> (<?= $job_year ?>)</p>
      <p><?= $job_desc ?></p>
    </section>

    <hr>

    <section>
      <h2>Education</h2>
      <p><strong><?= $edu_degree ?></strong> - <?= $edu_school ?> (<?= $edu_year ?>)</p>
    </section>

    <hr>

    <section>
      <h2>Certifications</h2>
      <p><?= $cert1 ?></p>
      <p><?= $cert2 ?></p>
      <p><?= $cert3 ?></p>
    </section>

  </main>

</div>

</body>
</html>