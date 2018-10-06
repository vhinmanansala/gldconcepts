<div id="menu-container" class="desktop">
    @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
</div>

<div id="mobile-menu-container" class="mobile">
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div id="mobile--menu-container">
    <div id="mobile-menu-content-container">
        <div id="mobile-menu-content">
            @php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'clearfix', 'container' => false)) @endphp
        </div>
    </div>
</div>