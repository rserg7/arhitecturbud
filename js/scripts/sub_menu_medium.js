$(document).ready(function(){
	$('.slide').hover(function(){
		TweenMax.to($(this).children('img'), 0.5, {y: -35, autoAlpha:0});
		TweenMax.to($(this).children('p'), 0.5, {y: -58, autoAlpha:1});
	}, function() {
		TweenMax.to($(this).children('img'), 0.5, {y: 0, autoAlpha:1});
		TweenMax.to($(this).children('p'), 0.5, {y: 0, autoAlpha:0});
	});	
});
