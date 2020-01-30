$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

$(document).ready(function(){
$(window).scroll(function(){
	var positiontop=$(document).scrollTop();
	console.log(positiontop);

	if ((positiontop > 1019) && (positiontop < 1450) || (positiontop > 3054) && (positiontop < 3518)){
	
		$('#card').addClass('animated slideInUp');	
	}

	if((positiontop > 10) && (positiontop < 20)){
		$('#first').addClass('animated slideInUp');
	}

		if((positiontop > 30) && (positiontop < 50)){
		$('#card-one').addClass('animated rolln');
	}


});
$('button').click(function(e) {
  e.preventDefault();
  $('main').addClass('flip');
});

});