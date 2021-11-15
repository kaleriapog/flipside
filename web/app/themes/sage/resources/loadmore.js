jQuery(function($){
 
	// определяем в переменные кнопку, текущую страницу и максимальное кол-во страниц
	var button = $( '#loadmore a' ),
	    paged = button.data( 'paged' ),
	    maxPages = button.data( 'max_pages' );
        paged = 1;

        var list = $('.post-list__items');
 
	button.click( function( event ) {
        paged++
        var offset =  (paged-1)*3;
        var data = {
            paged: paged,
            offset:offset,
            maxPages: maxPages,
            action: 'loadmore'
        }
 
		event.preventDefault(); // предотвращаем клик по ссылке

        $.get(flipside.ajaxurl, data).success((res)=> {
            if(res) {
                list.append(res)
            }
                    // console.log(res);
        })
		// $.ajax({
		// 	type : 'POST',
		// 	url : flipside.ajax_url, // получаем из wp_localize_script()
		// 	data : {
		// 		paged : paged, // номер текущей страниц
		// 		action : 'true_loadmore' // экшен для wp_ajax_ и wp_ajax_nopriv_
		// 	},
		// 	beforeSend : function( xhr ) {
		// 		button.text( 'Загружаем...' );
		// 	},
		// 	success : function( data ){
 
		// 		paged++; // инкремент номера страницы
		// 		button.parent().before( data );
		// 		button.text( 'Загрузить ещё' );
 
		// 		 // если последняя страница, то удаляем кнопку
		// 		if( paged == maxPages ) {
		// 			button.remove();
		// 		}
 
		// 	}
 
		// });
 
	} );
});