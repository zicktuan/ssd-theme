jQuery(document).ready(function($) {
	"use strict";

	var BOOKAWESOME_WIDGET_LOGO = {
		logo : null,

		init : function(){
			// Init event  keyup
			this.handleKeyupSearch();
		},

		handleKeyupSearch: function(){
			$('body').on('keyup',"#search-input", function(e)
			{
				var itemWrap 	 = $(this).closest("#timkiem"),
					itemW 		 = $(this).closest('#search-input'),
 					inValue      = $(this).value,
					lists        = $.parseJSON(itemWrap.find(".bas-wrap-result").attr("data-args"));
				var argsItem 	 = new Array();
				itemWrap.find("#bas-result").html("");
				lists.map((val, key) => {
					let n = val.title.search( inValue );
					if (n > -1 ) {
						argsItem.push(val);
					}
				});
				if (argsItem.length > 0) {
					itemWrap.find(".bas-wrap-result").css("display", "block");
					argsItem.map((val, key) => {
						itemWrap.find(".bas-wrap-result").append(`
							<ul class="load-text">
							    <li class="bas-sim-item" data-value="${val.value}" data-title="${val.title}">
							        <span class="c_label">SIM</span>
							        ${val.title}
							    </li>
							</ul>
						`);
					});
				}
				if (argsItem.length == '') {
					itemWrap.find(".bas-wrap-result").css("display", "none");
				}
			});

			$('body').on('click',".bas-sim-item", function(e) {
				var itemWrap 	 = $(this).closest("#timkiem"),
					itemVal  = $(this).attr("data-value"),
					itemTitle= $(this).attr("data-title"),
					value    = itemWrap.find(".bas-sim-value").val(),
					redirect = $(".bas-sim-search"),
					argsVal  = value.split(","),
					status   = true;
				argsVal.map((val, key) => {
		            if (val == itemVal) {
		                status = false;
		            }
		        });
		        if (status) {
		        	$('#search-input').val(itemTitle);
		        	$('.bas-wrap-result').css("display","none");
		        	$('.bas-sim-value').val(itemVal);
		        	redirect.attr('name', 'post_type');
		        	redirect.attr('value', 'bookawesome_product');
		        }
					// console.log(argsVal);
			});
		}
	}

	BOOKAWESOME_WIDGET_LOGO.init();
});