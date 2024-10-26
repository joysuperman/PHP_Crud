<header id='header'>
    <span class ='nav-heading nav-brand' >Logo </span>
    <input type ='checkbox' class = 'menu-toggle' id ='menu-toggle'>
    <nav class= 'header'>
        <ul>
            <li class="<?php echo isActiveRoute('/'); ?>">
                <a href = '/'>Dashboard </a>
            </li>
            <li class="<?php echo isActiveRoute('/login'); ?>">
                <a href = '/login'>Login </a>
            </li>
            <li class='nav-header <?php echo isActiveRoute('/registration'); ?>'>
                <a href = '/registration'>registration</a>
            </li>
        </ul>
    </nav>
    <label for='menu-toggle' class='menu-nav-toggle'>
        <span>  </span>
    </label>
</header>
