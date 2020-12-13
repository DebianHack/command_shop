
var form = document.querySelector("#form");
// console.dir(form);
// console.log("TEST");
// alert("TEST");
// window.console.log("TEST");
form.onsubmit = function(sobitye) {
	sobitye.preventDefault();
	// console.dir(sobitye);

	var kuda = form.querySelector("input[name='komu']");
	var ot = form.querySelector("input[name='otuser']");
	var text = form.querySelector("textarea");

	var dannie = "submit=1" + 
				"&komu=" + kuda.value + 
				"&otuser=" + ot.value + 
				"&content=" + text.value;

	var ajax = new XMLHttpRequest();
		ajax.open("POST", form.action);
		ajax.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
		ajax.send(dannie);

		// console.dir(ajax);

	var spisokComment = document.querySelector("#spisok-comment");
	spisokComment.innerHTML = ajax.response;				 	
}