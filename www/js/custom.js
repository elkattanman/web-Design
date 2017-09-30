/**
 * Created by Mustafa El-Kattan on 15/05/2017.
 */
/*global $,alert,console*/

$(function(){

    'use strict';

    $('.links li').click(function() {
       $(this).addClass('active').sibling().removeClass('active');

    });
});