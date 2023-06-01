$("#image-selector").change(function () {
	let reader = new FileReader();
	reader.onload = function () {
		let dataURL = reader.result;
		$("#selected-image").attr("src", dataURL);
		$("#prediction-list").empty();
	}
	
	let file = $("#image-selector").prop('files')[0];
	reader.readAsDataURL(file);
});

let model;
$( document ).ready(async function () {
	$('.progress-bar').show();
    console.log( "Loading model..." );
    model = await tf.loadLayersModel('model16/model.json');
    console.log( "Model loaded." );
	$('.progress-bar').hide();
});


$("#predict-button").click(async function () {
	let image = $('#selected-image').get(0);
	let elements = document.getElementsByName("name");
	console.log("test00");
	// document.getElementById("demo").innerHTML = elements[0].tagName;
	console.log("test");
	const offset = tf.scalar(255);
	// Pre-process the image
	console.log(image);
	let tensor = tf.browser.fromPixels(image, 3)
		.resizeNearestNeighbor([224, 224]).div(255) // change the image size
		.expandDims(0)
		.toFloat()
	     // Normalize the image from [0, 255] to [-1, 1].
        //.sub(offset).div(offset)
		//.reverse(-1); // RGB -> BGR
	console.log(tensor);
	let predictions = await model.predict(tensor).data();
	console.log(predictions);
	let top5 = Array.from(predictions)
		.map(function (p, i) { // this is Array.map
			return {
				probability: p,
				className: TARGET_CLASSES[i] // we are selecting the value from the obj
			};
		}).sort(function (a, b) {
			return b.probability - a.probability;
		}).slice(0, 2);

	$("#prediction-list").empty();
	$("#prediction-list").append(`<strong><b>Confidence level</b></strong>`);
    
	top5.forEach(function (p,index) {
		console.log(index);
		$("#prediction-list").append(`<li><h1><b>${p.className}: ${p.probability.toFixed(2)}</b></h1></li>`);
		});
});
