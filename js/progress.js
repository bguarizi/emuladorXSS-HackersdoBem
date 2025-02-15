function finishTask(taskNo, redirPath){

	const username = getCookie('username');

	if (!username) {
    username = 'Convidado'
    }

	var xhr = new XMLHttpRequest();

	xhr.open('POST', '../php/completeTask.php', true);

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	var data = 'task=' + encodeURIComponent(taskNo) + '&user=' + encodeURIComponent(username);

	xhr.send(data);

	xhr.onload = function(){
		if (xhr.status != 200){
			alert(`Error ${xhr.status}: ${xhr.statustext}`);
		}
		else{
			window.location.href = redirPath;
		}
	};

	xhr.onerror = function(){
		alert("Request Failed");
	};
}

function findNext(activity){
	console.log("Activity received:", activity);
	var path;

	switch(activity){
		case "arm1":
			path = "../tutoriais_iniciante/lab2-armazenado1.php";
			break;
		case "arm2":
			path = "../questionarios/quiz_armazenado.php";
			break;
		case "dom1":
			path = "../tutoriais_iniciante/lab2-dom1.php";
			break;
		case "dom2":
			path = "../questionarios/quiz_dom.php";
			break;
		case "ref1":
			path = "../tutoriais_iniciante/lab2-refletido1.php";
			break;
		case "ref2":
			path = "../questionarios/quiz_refletido.php";
			break;
	}

	return path;
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}