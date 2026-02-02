<?php
echo "
<header>
  <nav class='navbar navbar-expand-lg'>
    <div class='container-fluid'>
      <a class='navbar-brand logo' href='index.php' aria-label='Mama D\\'s Home'>
        <img src='images/logo_simple.webp' alt='Mama D\\'s logo' loading='lazy'>
      </a>

      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'
        aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>

      <div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav ms-auto align-items-lg-center gap-lg-2'>
          <li class='nav-item'>
            <a class='nav-link' href='menu.php'>Menu</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='live.php'>Live Music</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='contact.php'>Contact</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='apply.php'>Apply</a>
          </li>
          <li class='nav-item'>
            <a class='btn btn-primary nav-cta' href='visit.php'>Visit Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
";
?>
