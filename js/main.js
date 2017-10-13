function animate(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
}

$('.message a').click(animate);
$('.message button').click(animate);
