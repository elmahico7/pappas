/* eslint-disable */
import $ from "jquery";
const $burgerBtn = $('.site-header__burger');
const $siteHeader = $('.site-header');
const $mobileMenu = $('.site-header__mobile__menu');

$burgerBtn.on('click', () => {
    $siteHeader.toggleClass('open');
    $mobileMenu.slideToggle();
});