<?php
    $site = basename($_SERVER['PHP_SELF']);
?>


<ul class="nav nav-pills">
    <li class="nav-item"><a href="index.php" class="nav-link <?php if ($site == 'index.php') echo 'active'; ?> " aria-current="page">Home</a></li>
    <li class="nav-item"><a href="features.php" class="nav-link <?php if ($site == 'features.php') echo 'active'; ?> ">Features</a></li>
    <li class="nav-item"><a href="pricing.php" class="nav-link <?php if ($site == 'pricing.php') echo 'active'; ?> ">Pricing</a></li>
    <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
</ul>