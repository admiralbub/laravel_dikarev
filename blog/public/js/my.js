

$(document).ready(function(){
	$('#add_article').on('click',function(){
		var title = $('#title').val();
		var content = $('#content').val();

		var csrf = $('#csrf-token').val();
		$.ajax({
			url: '/admin/articles',
			 type: "POST",
			data: {title:title,content:content},
			headers: {
        		'X-CSRF-TOKEN': csrf
    		},
			success: function (data) {
				location.href=location.href;
			},
			error: function (msg) {
				alert('Errors');
			}

		});

	});

})
