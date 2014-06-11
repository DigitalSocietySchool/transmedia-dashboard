function displayTable(idTable){
	
	if(document.getElementById(idTable).style.display=="none"){
		document.getElementById(idTable).style.display="inline"; //Shows the table
	} else {
		document.getElementById(idTable).style.display="none"; //hide the table
	}
}

/**
 * Header scroll control
 * When the user scrolls down the page hide the header, when they scroll up show it.
 */
var lastScrollPosition;

$(document).scroll( function() {
  var scrollPosition = $(this).scrollTop();

  // Scrolling down
  if (scrollPosition > lastScrollPosition){
    // If the header is currently showing
    if (!$('[data-role=header].ui-fixed-hidden').length) {
      $('[data-role=header]').toolbar('hide');
    }
  } 

  // Scrolling up
  else {
    // If the header is currently hidden
    if ($('[data-role=header].ui-fixed-hidden').length) {
      $('[data-role=header]').toolbar('show');
    }
  }

  lastScrollPosition = scrollPosition;  
});


$(document).ready(function() {
    $("#departing").datepicker();
    $("#returning").datepicker();
    $("button").click(function() {
    	var selected = $("#dropdown option:selected").text();
        var departing = $("#departing").val();
        var returning = $("#returning").val();
        if (departing === "" || returning === "") {
			alert("Please select departing and returning dates.");
        } else {
			confirm("Would you like to go to " + selected + " on " + departing + " and return on " + returning + "?");
        }
    });
});