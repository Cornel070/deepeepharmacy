(function ($) {

    'use strict';

 $(document).on('click', '#del-drug-btn', function(e){
        e.preventDefault();
        let id = $(this).data('id');
        let that = $(this);

        swal({
        title: "Are you sure?",
        text: "This is an irriversible action",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Cancel", "Yes, delete"],
	    })
	    .then((willDelete) => {
	        if (willDelete) {
	            $.ajax({
	                url:page_data.routes.del_drug,
	                type:"GET",
	                data: { id, _token: page_data.csrf_token },
	                success: function(data){
	                    handleDeletion(that);
	                }
	            });
	        }
	    })
    });

 	if (page_data.appt_success) {
 		swalSuccessAlert('Appointment request sent! We will get back to you shortly.');
 	}

 	if (page_data.newsletter) {
 		swalSuccessAlert('Thank you for subscribing to our newsletter.');
 	}

 	if (page_data.contact) {
 		swalSuccessAlert('Thank you for reaching out. we\'ll be in touch.')
 	}

 	if (page_data.cart_add) {
 		swalSuccessAlert('Drug added to cart');
 	}

 	if (page_data.ordered) {
 		swalSuccessAlert('Thanks for your order. We\'re processing and will get back to as soon as possible');
 	}

 	if (page_data.paystack_fail) {
 		swalerrorAlert('Something went wrong. Don\'t worry, you  havent been debited. Please refresh the page and try again');
 	}

 	if (page_data.ordered_n_paid) {
 		swalSuccessAlert('Thank you! Your order and payment have been recieved, we will get back to you as soon as possible');
 	}

 	if (page_data.payment_fail) {
 		swalerrorAlert('Payment unsuccessful. No debit made');
 	}

 	// $('table').DataTable();

	function handleDeletion(handle)
	{
	    $(handle).closest('tr').fadeOut(500, () =>{
	        swalSuccessAlert('Drug successfully deleted');
	    });
	}

	function swalSuccessAlert(text) {
	    return swal(text, {
	        icon: "success",
	    });
	}

	function swalerrorAlert(text){
		return swal(text, {
			icon: "error",
		});
	}

	$(document).on('click','#add-presc-upd',function(e){
		e.preventDefault();
		let drug_id     = $('select[name=drug_id] option').filter(':selected').val();
		let drug_name   = $('select[name=drug_id] option').filter(':selected').text();
		let drug_dosage = $('#presc-dosage').val();
		let title 		= $('#presc-title').val();

		if (!drug_id || !drug_name || !drug_dosage || !title) {
			swalerrorAlert('Please provide all required fields');
		}else{
			let prescArr = [];
			prescArr['drug_id'] = drug_id;
			prescArr['drug_dosage'] = drug_dosage

			addToPrescNew(prescArr);
			addToCard(drug_name,drug_dosage,title);
			clearPrescArea(); 
			swalSuccessAlert('Added! Select another drug or save prescription');
		}
	});

	$(document).on('click', '#add-presc', function(e){
		e.preventDefault();
		let drug_id     = $('select[name=drug_id] option').filter(':selected').val();
		let drug_name   = $('select[name=drug_id] option').filter(':selected').text();
		let drug_dosage = $('#presc-dosage').val();
		let title 		= $('#presc-title').val();

		if (!drug_id || !drug_name || !drug_dosage || !title) {
			swalerrorAlert('Please provide all required fields');
		}else{
			let prescArr = [];
			prescArr['drug_id'] = drug_id;
			prescArr['drug_dosage'] = drug_dosage

			addToPresc(prescArr);
			addToCard(drug_name,drug_dosage,title);
			clearPrescArea(); 
			swalSuccessAlert('Added! Select another drug or save prescription');
		}
	});

	function addToCard(drug_name,drug_dosage, title)
	{
		$('#p_card_title').text(title);
		$('#p_card_dosage').append(
			'<h5 class="dosage fa fas fa-angle-right"> '+drug_name+'</h5><br/>'+
			'<p class="card-text text-muted">'+drug_dosage+'</p><br>'
			);
	}

	function addToPresc(prescArr)
	{
		$('#presc-add-frm').append(
			`<input type="hidden" name="drug_id[]" value="${prescArr['drug_id']}">
            <input type="hidden" name="drug_dosage[]" value="${prescArr['drug_dosage']}">`
		);
	}

	function addToPrescNew(prescArr)
	{
		$('#presc-add-frm').append(
			`<input type="hidden" name="drug_id_new[]" value="${prescArr['drug_id']}">
            <input type="hidden" name="drug_dosage_new[]" value="${prescArr['drug_dosage']}">`
		);
	}

	function clearPrescArea()
	{
		$('#presc-dosage').val('');
		$('select[name=drug_id]').prop('selectedIndex',0);
	}

	$(document).on('click','#save-presc', function(e){
		e.preventDefault();
		let drug_id     = $('select[name=drug_id] option').filter(':selected').val();
		let drug_name   = $('select[name=drug_id] option').filter(':selected').text();
		let drug_dosage = $('#presc-dosage').val();
		let title 		= $('#presc-title').val();

		if (!drug_id || !drug_name || !drug_dosage) {
			let title = $('#presc-title').val();
			$('#presc-title-f').val(title);
			$('#presc-add-frm').submit();
		}else{
			swalerrorAlert('Please add the last prescription before saving');
		}
	});

	function handlePrescSave(){
		$('#presc-dosage').val('');
		$('#presc-title').val('');
		$('select[name=drug_id]').prop('selectedIndex',0);
		swalSuccessAlert('Prescription saved!');
	}

	$(document).on('keyup','#drug-search', function(e){
		let key = event.keyCode || event.charCode;
		let txt = $(this).val();

		if (txt == '') {
			emptyTile();
		}

		if (key == 8 || key == 32) {
			return;
		}else{
			$.ajax({
		        url:page_data.routes.find_drug,
		        type:"GET",
		        data: {txt, _token: page_data.csrf_token },
		        success: function(data){
		        	if (data.success) {
		        		emptyTile();
		        		makeSuggestions(data);
		        	}else{
		        		emptyTile();
		        		showNoRes(txt);
		        	}
		        }
		    });
		}
	});

	$(document).on('keyup','#drug-search-sm', function(e){
		let key = event.keyCode || event.charCode;
		let txt = $(this).val();

		if (txt == '') {
			emptyTile();
		}

		if (key == 8 || key == 32) {
			return;
		}else{
			$.ajax({
		        url:page_data.routes.find_drug,
		        type:"GET",
		        data: {txt, _token: page_data.csrf_token },
		        success: function(data){
		        	if (data.success) {
		        		emptyTileSM();
		        		makeSuggestionsSM(data);
		        	}else{
		        		emptyTileSM();
		        		showNoResSM(txt);
		        	}
		        }
		    });
		}
	});

	function makeSuggestions(data)
	{
		for(let i=0;i<data.drugs.length;i++)
		{
			$('#suggestions').append(
				'<tr><a href=""><th class="sugg-tab sugg" data-id="'+data.drugs[i].id+'">'+data.drugs[i].name+'</th></a></tr>'
			);
		}
	}

	function makeSuggestionsSM(data)
	{
		for(let i=0;i<data.drugs.length;i++)
		{
			$('#suggestions-sm').append(
				'<tr><a href=""><th class="sugg-tab sugg-sm" data-id="'+data.drugs[i].id+'">'+data.drugs[i].name+'</th></a></tr>'
			);
		}
	}

	function emptyTile()
	{
		$('#suggestions').empty();
	}

	function emptyTileSM()
	{
		$('#suggestions-sm').empty();
	}

	function showNoRes(txt)
	{
		$('#suggestions').append(
			'<tr><th class="sugg-tab"> No drugs found: <b>'+txt+'</b></th></tr>'
		);	
	}

	function showNoResSM(txt)
	{
		$('#suggestions-sm').append(
			'<tr><th class="sugg-tab"> No drugs found: <b>'+txt+'</b></th></tr>'
		);	
	}

	$(document).on('click','.sugg',function(e){
		e.preventDefault();
		let drug_id = $(this).data('id');
		let drug_name = $(this).text();

		emptyTile();

		$('#drug-search').val(drug_name);
		$('#id_area').val(drug_id);
		$('#search-frm').submit();
	});

	$(document).on('click','.sugg-sm',function(e){
		e.preventDefault();
		let drug_id = $(this).data('id');
		let drug_name = $(this).text();

		emptyTile();

		$('#drug-search-sm').val(drug_name);
		$('#id_area-sm').val(drug_id);
		$('#search-frm-sm').submit();
	});

	$(document).on('click','#cart-btn',function(e){
		e.preventDefault();
		$('#cart-form').submit();
	});

	$(document).on('click','.rem-item',function(e){
		e.preventDefault();
		let id = $(this).data('id');
        let that = $(this);

        swal({
        title: "Are you sure?",
        text: "You are about remove this drug from your cart",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Cancel", "Yes, I know"],
	    })
	    .then((willDelete) => {
	        if (willDelete) {
	            $.ajax({
	                url:page_data.routes.remove,
	                type:"GET",
	                data: { id, _token: page_data.csrf_token },
	                success: function(data){
	                    handleItemDeletion(that);
	                }
	            });
	        }
	    })
	});

	function handleItemDeletion(handle)
	{
		$(handle).closest('div').fadeOut(500, function(){
			swalSuccessAlert('Item removed from cart');
		});
	}

	$(document).on('click','#on-delv',function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		$('#buyer-order-frm').attr('action', page_data.routes.on_delivery);
		$('#buyer-order-frm').submit();
	});

	$(document).on('click','#paystack',function(e){
		e.preventDefault();
		e.stopImmediatePropagation();

		let name = $('#NAME').val();
		let email = $('#EMAIL').val();
		let address = $('#ADDRESS').val();
		let phone = $('#PHONE').val();

		const buyer = {
			'name':name,
			'email':email,
			'address':address,
			'phone':phone
		};

		$('#paystack-meta').val(JSON.stringify(buyer));

		$('#buyer-order-frm').attr('action', page_data.routes.pay);
		$('#buyer-order-frm').submit();
	});

	$(document).on('click','#rem-presc',function(e){
		e.preventDefault();
		let id = $(this).data('id');
        let that = $(this);

        swal({
        title: "Are you sure?",
        text: "You are about to remove this drug from the prescription",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Cancel", "Yes, I know"],
	    })
	    .then((willDelete) => {
	        if (willDelete) {
	            $.ajax({
	                url:page_data.routes.remove_drug,
	                type:"GET",
	                data: { id, _token: page_data.csrf_token },
	                success: function(data){
	                   $(that).parent('div').fadeOut(500, function(){
							swalSuccessAlert('Drug removed from prescription');
						});
	                }
	            });
	        }
	    })
	});

	$(document).on('click','#del_presc',function(e){
		e.preventDefault();
		let id = $(this).data('id');
        let that = $(this);

        swal({
        title: "Are you sure?",
        text: "You are about to delete this prescription",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Cancel", "Yes, I know"],
	    })
	    .then((willDelete) => {
	        if (willDelete) {
	            $.ajax({
	                url:page_data.routes.remove_presc,
	                type:"GET",
	                data: { id, _token: page_data.csrf_token },
	                success: function(data){
	                   $(that).closest('tr').fadeOut(500, function(){
							swalSuccessAlert('Prescription deleted');
						});
	                }
	            });
	        }
	    })
	});

	$(document).on('click','#toggle-mob',function(){
		$('.left-sidenav').toggle(200);
	});
})(jQuery)