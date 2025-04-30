import './bootstrap';
import 'flowbite';
import 'swiper/css/bundle';
import { register } from 'swiper/element/bundle';
// register Swiper custom elements
register();


import jQuery from 'jquery';
import select2 from "select2"
import 'select2/dist/css/select2.min.css';
select2(); 
window.$ = jQuery;

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.select2').select2();
    $('#select_address_country').select2({
        dropdownParent: $('#popover-deleverto') // حل مشکل نمایش در مودال
    });

    $('#select_languages , #select_currency').select2({
        dropdownParent: $('#popover-system-language-currency') // حل مشکل نمایش در مودال
    });
});