<style>
    /* Backgrounds colours */

.green-bg,
.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a,
.tagcloud a:hover,
.blog #pager li a.active, .blog #pager li a:hover,
.register-top, a.account-top, a.submit-top,
#category-menu li:hover, #category-menu li.current,
.menu ul > li > a:hover,
.navbar-inverse .nav > li > a:focus,
.navbar-inverse .nav > li > a:hover,
.navbar-inverse .nav .active > a,
.navbar-inverse .nav .active > a:hover,
.navbar-inverse .nav .active > a:focus,
.navbar-inverse .nav > li.current-menu-item > a,
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle,
.navbar-inverse .nav li.dropdown.active > .dropdown-toggle,
.current_page_item a,
.tabbable .nav nav-tabs li a,
.bgcolor, #bgcolor,
.progress .bar,
.bar-green.progress-striped .bar,
.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle,a.next:hover, a.prev:hover{
    background-color:<?php echo of_get_option('primary_color'); ?> ; 
}

/* Border colours */
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus,
.author img,
.navbar-inverse .brand:hover,
.navbar-inverse .nav .current_page_item a,
.navbar-inverse .nav > li > a:hover,
.menu ul > li > a:hover,
.project-update-info img,
.project-backer .span3 img,
.project-comment .span1 img,
.project-gallery .gallery-image a,
.tabbable .nav nav-tabs li a, .nav-tabs .active a:active,
.project-gallery .gallery-image a:hover,
#funding-form #field-amount,
.widget_images a img:hover {
  border-color: <?php echo of_get_option('primary_color'); ?> !important ;
  /* IE6-9 */

}

/* Color */
a,
.container ul.top-nav li.current-menu-item a,
.navbartop-wrapper .container ul.top-nav li:hover,
.nav-tabs .active a:active,
body.user_project #wpcontent a,
body.user_project .breadcrumbs a,
 .navbartop-wrapper .container ul.top-nav li a:hover, a.next:hover, a.prev:hover, #project-rewards-list span, #funding-form #field-amount{
    color: <?php echo of_get_option('primary_color'); ?> ; 
}
.button-green, .button-small, .button-medium{
    background-color: <?php echo of_get_option('button_green'); ?> ;
}
.button-green:hover, .button-small:hover, .button-medium:hover, .nav > li > a:hover, .nav-tabs li.active a{
    background-color: <?php echo of_get_option('button_hover'); ?> ;
}
.button-green, .button-small, .button-medium, .nav > li > a:hover, .nav-tabs li.active a{
     border-color: <?php echo of_get_option('button_border'); ?> !important ; 
}
</style>