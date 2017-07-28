/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $('#myCarousel').carousel({ interval: 2500, pause: "hover", wrap: false, keyboard: true });
    $('#locationsList').DataTable();
    $('#appbundle_location_roadNumber').attr("title", "Enter road or street number");
    $('#appbundle_location_roadNumber').tooltip();
    $('#currentDateTime').text(moment().format('LLLL'));
    $('.slikCarousel').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        // normal options...
        infinite: false,
        // the magic
        responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            infinite: true
        }
        }, {
        breakpoint: 600,
        settings: {
        slidesToShow: 2,
        dots: true
        }
        }, {
        breakpoint: 300,
        settings: "unslick" // destroys slick
        }]
    });   
  });