import {LAYOUT} from "../../js/utils/layout_config.js";


$(document).ready(function(){
    // on navbar toggle button click
    $('.navbar-toggler').on('click',function(){
        // toggle the class of navbar-collapse
        if (LAYOUT.isLeftNavOpen) {
            // if left nav is open, then close it
            $('#left-nav').addClass('navbar-sm').removeClass('navbar-lg');
        } else {
            // if left nav is close, then open it
            $('#left-nav').removeClass('navbar-sm').addClass('navbar-lg');
        }
        LAYOUT.isLeftNavOpen = !LAYOUT.isLeftNavOpen;
    });
});
