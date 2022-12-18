function getResult(pageNumber) {
	var searchKey = $("#keyword").val();
	$.ajax({
		type : "POST",
		url : "/best-wines/ajax-endpoint/get-search-result.php",
		data : {
			page : pageNumber,
			search : searchKey
		},
		cache : false,
		success : function(response) {
			$("#table-body").html("");
			$("#table-body").html(response);
		}
	});
}

function submitSearch(event) {
	event.preventDefault();
	getResult(1);
}


$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("/best-wines/ajax-endpoint/backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});