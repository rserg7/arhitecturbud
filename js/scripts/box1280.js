// JavaScript Document
		$(document).ready(function() {

//box rotate
		$('#left_box').hover(function(){
			TweenLite.to($(this).children('.img'), 0.5, {rotationX:90, transformOrigin:"left 5 -70"/*"left 5 -50"*/, ease:Linear.ease});
			TweenLite.to($(this).children('.img_hover'), 0.5, {rotationX:0, transformOrigin:"left 5 70"/*"left 5 50"*/, ease:Linear.ease});
		}, function() {
			TweenLite.to($(this).children('.img'), 0.5, {rotationX:0, transformOrigin:"left 5 -70", ease:Linear.ease});
			TweenLite.to($(this).children('.img_hover'), 0.5, {rotationX:90, transformOrigin:"left 5 70", ease:Linear.ease});
		});

		$('#right_box').hover(function(){
			TweenLite.to($(this).children('.img'), 0.5, {rotationX:90, transformOrigin:"left 5 -70", ease:Linear.ease});
			TweenLite.to($(this).children('.img_hover'), 0.5, {rotationX:0, transformOrigin:"left 5 70", ease:Linear.ease});
		}, function() {
			TweenLite.to($(this).children('.img'), 0.5, {rotationX:0, transformOrigin:"left 5 -70", ease:Linear.ease});
			TweenLite.to($(this).children('.img_hover'), 0.5, {rotationX:90, transformOrigin:"left 5 70", ease:Linear.ease});
		});
		
    	});
