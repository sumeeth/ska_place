/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $('#myCarousel').carousel({ interval: 2500, pause: "hover", wrap: false, keyboard: true });
    $('#locationsList').DataTable();
});
