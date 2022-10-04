$(document).ready(function () {

    $('.mdb-select').materialSelect();

	$('#fp-price-filter, #fp-beds-filter, #fp-baths-filter, #fp-sqft-filter').on('change', function() {
		price = $('#fp-price-filter').val();
		switch (price) {
			case "<200":
				priceCondition1 = 0;
				priceCondition2 = 200000;
				break;
			case "200-300":
				priceCondition1 = 200000;
				priceCondition2 = 300000;
				break;
			case "300<":
				priceCondition1 = 300000;
				priceCondition2 = 10000000;
				break;
			default:
				priceCondition1 = 0;
				priceCondition2 = 10000000;
				break;
		}

		beds = $('#fp-beds-filter').val();
		switch (beds) {
			case "<3":
				bedsCondition1 = 0;
				bedsCondition2 = 3;
				break;
			case "3-4":
				bedsCondition1 = 3;
				bedsCondition2 = 4;
				break;
			case "4<":
				bedsCondition1 = 4;
				bedsCondition2 = 100;
				break;
			default:
				bedsCondition1 = 0;
				bedsCondition2 = 100;
				break;
		}

		baths = $('#fp-baths-filter').val();
		switch (baths) {
			case "<2":
				bathsCondition1 = 0;
				bathsCondition2 = 2;
				break;
			case "2-3":
				bathsCondition1 = 2;
				bathsCondition2 = 3;
				break;
			case "3<":
				bathsCondition1 = 3;
				bathsCondition2 = 100;
				break;
			default:
				bathsCondition1 = 0;
				bathsCondition2 = 100;
				break;
		}

		sqft = $('#fp-sqft-filter').val();
		switch (sqft) {
			case "<1500":
				sqftCondition1 = 0;
				sqftCondition2 = 1500;
				break;
			case "1500-2500":
				sqftCondition1 = 1500;
				sqftCondition2 = 2500;
				break;
			case "2500<":
				sqftCondition1 = 2500;
				sqftCondition2 = 1000000;
				break;
			default:
				sqftCondition1 = 0;
				sqftCondition2 = 1000000;
				break;
		}

        // Beds condition

		$('#filter-wrap').children().hide();
		if(window.location.pathname != '/floor-plans/') {
			$('.listing-wrapper:first-child').show();
		}

		$('#filter-wrap')
			.children()
			.filter(function() {   

                bedsCondition = false;
                if(String($(this).data('beds')).includes('-')) {
                    bedsArray = $(this).data('beds').split('-');                    
                    for (i = bedsArray[0]; i <= bedsArray[1]; i++) {                        
                        if(i >= bedsCondition1 && i <= bedsCondition2) {
                            bedsCondition = true;
                        }
                    };                  
                } else {
                    if($(this).data('beds') >= bedsCondition1 && $(this).data('beds') <= bedsCondition2) {
                        bedsCondition = true;
                    }
                }

                bathsCondition = false;
                if(String($(this).data('baths')).includes('-')) {
                    bathsArray = $(this).data('baths').split('-');                    
                    for (i = bathsArray[0]; i <= bathsArray[1]; i++) {                        
                        if(i >= bathsCondition1 && i <= bathsCondition2) {
                            bathsCondition = true;
                        }
                    };                  
                } else {
                    if($(this).data('baths') >= bathsCondition1 && $(this).data('baths') <= bathsCondition2) {
                        bathsCondition = true;
                    }
                }
				if(
					($(this).data('price') >= priceCondition1 && $(this).data('price') <= priceCondition2) &&
					(bedsCondition) &&
					(bathsCondition) &&
					($(this).data('sqft') >= sqftCondition1 && $(this).data('sqft') <= sqftCondition2)
				) {
					return $(this).attr('id');
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp');
		
		if($('#filter-wrap').height() == 0) {
			$('#noResult').show();
		} else {
			$('#noResult').hide();
		}
		
	});

}); /* Document Ready End */