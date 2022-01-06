<!--

<header>
    <a href="#dropdown" class="dropdown_link">
        <span class="icon-menu"></span>
    </a>
    <div class="header_container">
       
        <nav class="top_menu">
            <a href="./index.php" <?php echo ($subpage_name === 'home') ? "class='active'" : '' ?> >Home</a>
        </nav>
        <nav class="top_menu">
            <a href="./about.php" <?php echo ($subpage_name === 'about') ? "class='active'" : '' ?> >About</a>
        </nav>
        <nav class="top_menu">
            <a href="./portfolio.php" <?php echo ($subpage_name === 'portfolio') ? "class='active'" : '' ?>>Portfolio</a>
        </nav>
        <nav class="top_menu">
            <a href="./contact-me.php" <?php echo ($subpage_name === 'contact_me') ? "class='active'" : '' ?>>Contact me</a>
        </nav>
        
    
    </div>

</header> 

-->

<header>
    

    <div class="header_container">
        <label for="dropdown_checkbox" href="#dropdown" class="dropdown_link">
            <span class="icon-menu"></span>
        </label>
        <input type="checkbox" id="dropdown_checkbox">
        
        <nav class="top_menu">
            <a href="./index.php" <?php echo ($subpage_name === 'home') ? "class='active'" : '' ?> >Home</a>    
            <a href="./about.php" <?php echo ($subpage_name === 'about') ? "class='active'" : '' ?> >About</a>
            <a href="./portfolio.php" <?php echo ($subpage_name === 'portfolio') ? "class='active'" : '' ?>>Portfolio</a>
            <a href="./contact.php" <?php echo ($subpage_name === 'contact') ? "class='active'" : '' ?>>Contact</a>
        </nav>

    </div>
   
</header>
