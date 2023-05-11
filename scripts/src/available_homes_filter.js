$(document).ready(function () {

    $('.mdb-select').materialSelect();

	$('#ah-price-filter, #ah-beds-filter, #ah-baths-filter, #ah-sqft-filter').on('change', function() {

		price = $('#ah-price-filter').val();
		switch (price) {
			case "<500":
				priceCondition1 = 0;
				priceCondition2 = 500000;
				break;
			case "500-600":
				priceCondition1 = 500000;
				priceCondition2 = 600000;
				break;
			case "600<":
				priceCondition1 = 600000;
				priceCondition2 = 10000000;
				break;
			default:
				priceCondition1 = 0;
				priceCondition2 = 10000000;
				break;
		}

		beds = $('#ah-beds-filter').val();
		switch (beds) {
			case "<4":
				bedsCondition1 = 0;
				bedsCondition2 = 4;
				break;
			case "4-5":
				bedsCondition1 = 4;
				bedsCondition2 = 5;
				break;
			case "5<":
				bedsCondition1 = 5;
				bedsCondition2 = 100;
				break;
			default:
				bedsCondition1 = 0;
				bedsCondition2 = 100;
				break;
		}

		baths = $('#ah-baths-filter').val();
		switch (baths) {
			case "<3":
				bathsCondition1 = 0;
				bathsCondition2 = 3;
				break;
			case "3-4":
				bathsCondition1 = 3;
				bathsCondition2 = 4;
				break;
			case "4<":
				bathsCondition1 = 4;
				bathsCondition2 = 100;
				break;
			default:
				bathsCondition1 = 0;
				bathsCondition2 = 100;
				break;
		}

		sqft = $('#ah-sqft-filter').val();
		switch (sqft) {
			case "<2000":
				sqftCondition1 = 0;
				sqftCondition2 = 2000;
				break;
			case "2000-4000":
				sqftCondition1 = 2000;
				sqftCondition2 = 4000;
				break;
			case "4000<":
				sqftCondition1 = 4000;
				sqftCondition2 = 1000000;
				break;
			default:
				sqftCondition1 = 0;
				sqftCondition2 = 1000000;
				break;
		}

        // Beds condition

		$('#ah-filter-wrap').children().hide();
		if(window.location.pathname != '/available-homes/') { 
			$('.listing-wrapper:first-child').show();
		}

		$('#ah-filter-wrap')
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

				sqftCondition = false;
				if(String($(this).data('sqft')).includes('-')) {
					sqftArray = $(this).data('sqft').split('-');
					for (i = parseInt(sqftArray[0]); i <= parseInt(sqftArray[1]); i++) {
						if(i >= sqftCondition1 && i <= sqftCondition2) {
							sqftCondition = true;
						}
					};                  
				} else {
					if($(this).data('sqft') >= sqftCondition1 && $(this).data('sqft') <= sqftCondition2) {
						sqftCondition = true;
					}
				}
				if (
					($(this).data('price') >= priceCondition1 && $(this).data('price') <= priceCondition2) &&
					(bedsCondition) &&
					(bathsCondition) &&
					(sqftCondition) 
				) {
					return $(this).attr('id');
				}
			}).show().css('animation-delay', '0s').css('animation-name', 'fadeInUp');
		
		if($('#ah-filter-wrap').height() == 0) {
			$('#noResult').show();
		} else {
			$('#noResult').hide();
		}
		
	});

}); /* Document Ready End */