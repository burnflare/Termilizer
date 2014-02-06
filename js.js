 function submitForm()
 {
	 var input = $("#input").val();
	 lastCommand = input;
	 $("#termilizer").append("&gt;&nbsp;"+input+"<br/>");
	 
	 $("input").val("");
	 if(input=="clear") {
	 	$("#termilizer").html("");
	 } else if(input=="c") {
		 canContinueTimer = false;
		 append("Execution Cancelled!");
	 }
	 else ajaxCall(input);
 }
 function append(text)
 {
 	$("#termilizer").append(text+"<br/>");
	$('bt').wrap("<span class=bt></span>");
	$('high').wrap("<span class=highlight></span>");
 }
 function startTimer(i, url){
	 if(i>0)
	 {
		 if(i%10==0) $("#termilizer").append(i/10);
		 else $("#termilizer").append(".");
		 if(canContinueTimer) setTimeout(function(){startTimer(i-1, url)},50);
	 } else {
		 window.location = url;
	 }
 }
 function ajaxCall(input)
 {
	 $.ajax({
		 type: "GET",
		 url: "data.json",
		 success: function(data) {
			 data = data[input];
			 console.log(data);
			 if(data.type=="text") {
				 console.log(data.text);
				 append(data.text);
			 } else if(data.type=="url") {
				 append(data.text);
				 canContinueTimer = true;
				 startTimer(30, data.url);
			 }
		 }
	 });
 }