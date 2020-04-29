
document.getElementById("myBtn").addEventListener("click", function(){
document.getElementById("demo").innerHTML = "Hello World";
});

var xhr = new XMLHttpRequest();

var data = document.getElementById('formAdd2');

data.addEventListener('submit',(ev) =>{
	var form = new FormData(data);
	xhr.onload = () => {
		if(xhr.status == 200){
			var json = JSON.parse(xhr.responseText);
			var template = ``;
			json.map(function(data){
				template += `
				<h2>${data.capital}</h2>
				<h2>${data.tasaInteres}</h2>
				<h2>${data.tiempo}</h2>
				<h2>${data.monto}</h2>
				<h2>${data.interes}</h2>
				`
				return template;
			});
			console.log(template);
			document.getElementById('lista').innerHTML = template;
		}else{
			console.log("error en la peticion: "+xhr.status);
		}
	}
});