$(document).ready(function(e) {
	$('.bas-widget-search-input').keyup(function() {
		var argsItem = new Array(),
		textInput    = $(this).val(),
		itemWrap 	 = $(this).closest(".bas-widget-field"),
		list         = e.parseJSON(itemWrap.find(".bas-widget-data-args").val());
		// get list satisfying conditions
		list.map((val, key) => {
			var n = val.label.toLowerCase().search(textInput.toLowerCase());
			// console.log(val);
            // var n: number = val.label.toLowerCase().search( textInput.toLowerCase() );
            if (n > -1 ) {
                argsItem.push(val);
            }
        });

        // show list
        if (argsItem.length > 0) {
            itemWrap.find(".bas-widget-list").show();
            var output = '';
            argsItem.map((val, key) => {
                output += `<li class="bas-widget-item" data-value="${val.value}"><a>${val.label}</a></li>`;
            });
            itemWrap.find(".bas-widget-list").append(output);
        } else {
            itemWrap.find(".bas-widget-list").hide();
        }
	});

	$('body').on('click', '.bas-widget-item',function() {
		var itemWrap = $(this).closest(".bas-widget-field"),
		itemVal      = $(this).data("value"),
		itemName     = $(this).find('a').html(),
		value        = itemWrap.find(".bas-widget-value").val(),
		status       = true;

        //check item already exists
        if ('' != value) {
            var argsVal  = value.split(",");
            argsVal.map((val, key) => {
                if (val == itemVal) {
                    status = false;
                }
            });
        }

        //handle add template item
        if (status) { 
            itemWrap.find(".bas-widget-inline").append(`
                <li class="bas-widget-data" data-id="${itemVal}">
                    <span class="bas-widget-label"><a>${itemName}</a></span>
                    <a class="bas-widget-item-remove">x</a>
                </li>
            `);
            //handle add value item
            if ('' == value) {
                itemWrap.find(".bas-widget-value").val(itemVal);
            } else {
                itemWrap.find(".bas-widget-value").val(`${value},${itemVal}`);
            }
        }

        itemWrap.find(".bas-widget-list").empty();
        itemWrap.find(".bas-widget-list").hide();
        itemWrap.find(".bas-widget-search-input").val("");
        itemWrap.find(".bas-widget-search-input").focus();
  	});


	$('body').on('click', '.bas-widget-item-remove', function() {
		var valItem = $(this).closest('.bas-widget-data').attr('data-id'),
		itemWrap = $(this).closest('.bas-widget-field'),
		value = itemWrap.find('.bas-widget-value').val(),
		argsVal     = value.split(",");
		argsVal.map((val, key) => {
            if (val == valItem) {
                argsVal.splice(key, 1);
            }
        });
        $(this).closest('.bas-widget-data').remove();
        itemWrap.find(".bas-widget-value").val(argsVal.toString());
	})

})