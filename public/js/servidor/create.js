
$(document).ready(function(){
  $(".serve_id").select2({
		placeholder: "Your favourite car", //placeholder
		tags: true,
		tokenSeparators: ['/',',',';'," "] 
	});
});