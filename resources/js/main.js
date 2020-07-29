/*
js code 

Author: Tridev sharma
Project Name: Sarswatividya University
Date: 03/05/2020
File Name: main.js

*/
"use strict";
var base_url = "http://localhost/sarswatividya-university/";

$(document).ready(()=>{
    setTimeout(()=>{
        $(".preloader").fadeOut("slow");
    },300);


    var cursor = $('.cursor');
    $(window).mousemove(function(e) {
        cursor.css({
            top: e.clientY - cursor.height() / 2,
            left: e.clientX - cursor.width() / 2
        });
    });

    $(".mainnav li a").each((i)=>{
        if(window.location.href == $(".mainnav li a:eq("+i+")").attr("href")){
            $(".mainnav li a:eq("+i+")").addClass("active");
        }
    });

    $("#minus").click(()=>{
        $(".wrapping").css({
            "transform":"scale(.9)",
            "top":"-2.31vw"
        });
    });

    $("#normal").click(()=>{
        $(".wrapping").css({
            "transform":"scale(1)",
            "max-width":"100%",
            "top":"0"
        });
    });

    $("#plus").click(()=>{
        $(".wrapping").css({
            "transform":"scale(1.02)",
            "top":".4vw",
           "max-width":"98%",
           "margin":"auto"
        });
    });

    $('.header-slider').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4500,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
});

$("#regform").submit((e)=>{
    e.preventDefault();
    $(".form-process").show();
    $(".form-process .alert-msg").html("Submitting your data, Please wait...");
    $.ajax({
        url: base_url + "Admission/addNewUser",
        type: "POST",
        data:  new FormData(regform),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data)
        {
            data = $.trim(data);
            if(data=='error')
            {
                $(".form-process .alert-msg").html("Data not found! Please try again...");
                setTimeout(()=>{
                    $(".form-process").hide();
                },1000);
            }
            if(data=='invalid')
            {
                $(".form-process .alert-msg").html("Invalid Photo...");
                setTimeout(()=>{
                    $(".form-process").hide();
                },1000);
            }
            if(data=='success')
            {   
                $(".form-process .alert-msg").html("You registered successfully.");
                setTimeout(()=>{
                    $(".form-process").hide();
                },1500);
                $("#regform")[0].reset(); 
            }
            if(data=='datanotfound')
            {
                $(".form-process .alert-msg").html("Data not found! Please try again...");
                setTimeout(()=>{
                    $(".form-process").hide();
                },1000);
            }
        },
        error: function(){
            $(".form-process .alert-msg").html("Data not found! Please try again...");
            setTimeout(()=>{
                $(".form-process").hide();
            },1000);
        }         
    });
});