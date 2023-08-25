import $ from 'jquery';

$('.contact__location__city').click(function () {
  $('section[id^=city]').hide(); //hide all
  var id = $(this).attr('id'); //get the id of the clicked button
  var end = id.slice(-2);      //get last 2 character from id
  $(`section[id$=${end}]`).show(); //match the div with id ends with the character and show
});