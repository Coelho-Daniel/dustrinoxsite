const inputs = document.querySelectorAll(".input");


function addclient(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remclient(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addclient);
	input.addEventListener("blur", remclient);
});
