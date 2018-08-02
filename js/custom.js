$(document).ready(function() {
	
	$('.bxslider').bxSlider({
		speed: 2000,
		pause: 8000,
		mode: 'fade',
		auto: true,
		infiniteLoop: true,
		stopAuto: false,
	});

	$('.carousel').carousel({
		interval: false
	})

	$('.button-srch').click(function() {
		$('.search-popup-wrap').addClass('enabled');
		setTimeout(function(){
	     	$('.search-popup-wrap input.form-control').focus();
	  	}, 200);
	});

	$('.close-pro-form').click(function() {
		$('.search-popup-wrap').removeClass('enabled');
	});

	$('.site-navigation ul > li.menu-item-has-children > a').append('<span class="sub-toggle"><i class="fa fa-angle-down"></i></span>');

	// Megamenu-Dropdown
	$(function ($) {
		$('.site-navigation ul > li,.menu-right > ul > li').hover(
			function () {
				$(this).children('.mega-menu-dropdown,.sub-menu').stop(true, false).slideDown(250);
			},
			function () {
				$(this).children('.mega-menu-dropdown,.sub-menu').stop(true, false).slideUp(250);
			}
			);
	});

	// Product View Mode
	$('.view-mode').each(function(){
		$(this).find('.grid').on("click",function(event){
			event.preventDefault();
			$('.toolbar .view-mode').find('.grid').addClass('active');
			$('.toolbar .view-mode').find('.list').removeClass('active');
			$('.shop-products').removeClass('list-view');
			$('.shop-products').addClass('grid-view');
			$('.toolbar .thumbnail-img').removeClass('col-sm-6');
			$('.toolbar .item-detail').removeClass('col-sm-6');
			$('.shop-products .col-item-list').removeClass('col-sm-12');
			$('.shop-products .col-item-list').addClass('col-sm-4');
			$('.shop-products .thumbnail-img').removeClass('col-sm-4');
			$('.shop-products .listview').removeClass('col-sm-8');
		});
		$(this).find('.list').on("click",function(event){
			event.preventDefault();
			$('.toolbar .view-mode').find('.list').addClass('active');
			$('.toolbar .view-mode').find('.grid').removeClass('active');
			$('.shop-products').addClass('list-view');
			$('.shop-products').removeClass('grid-view');
			$('.toolbar .thumbnail-img').addClass('col-sm-6');
			$('.toolbar .item-detail').addClass('col-sm-6');
			$('.shop-products .col-item-list').removeClass('col-sm-4');
			$('.shop-products .col-item-list').addClass('col-sm-12');
			$('.shop-products .thumbnail-img').addClass('col-sm-4');
			$('.shop-products .listview').addClass('col-sm-8');
		});
	});


	$('.widget-block ul li.item-has-children').append('<span class="toggle-btn"><i class="fa fa-plus"></i></span>');
	
	$('.widget-block ul li .toggle-btn').click(function() {
		$(this).parent('.widget-block ul li').children('.widget-block ul li ul').first().slideToggle(400);
		$(this).children('.fa-plus').first().toggleClass('fa-minus');
	});

	$('.chk-brand').click(function() {
		$(this).parent().toggleClass('selected');
	});


	// Price Filter Label
	$( "#slider-range" ).slider({
		range: true,
		min: 35,
		max: 950,
		values: [ 35, 950 ],
		create: function() {
			$("#amount").val("$35 - $950");
		},
		slide: function (event, ui) {
			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			var mi = ui.values[0];
			var mx = ui.values[1];
			filterSystem(mi, mx);
		}
	});

	function filterSystem(minPrice, maxPrice) {
		$("#filter-product-layout div.product-type-amount").hide().filter(function () {
			var price = parseInt($(this).data("price"), 10);
			return price >= minPrice && price <= maxPrice;
		}).show();
	}

	// product filter by color
	$('#filter-wrap-filters input[type=checkbox]').on('change', function() {
		var $lis = $('.product-type-amount'),
		$checked = $('input:checked');	
		if ($checked.length) {							
			var selector = '';
			$($checked).each(function(index, element){
				if(selector === '') {
					selector += "[data-filters~='" + element.id + "']";                  
				} else {
					selector += ",[data-filters~='" + element.id + "']";
				}
			});                        
			$lis.hide(); 
			console.log(selector);
			$('.product-type-amount').hide().filter(selector).show();			   
		} else {
			$lis.show();
		}
	});

});