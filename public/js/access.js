"use strict";

$(function () {
    $('#loginForm').submit(function (e) { 
        e.preventDefault();
        console.log('submit');
    });
});