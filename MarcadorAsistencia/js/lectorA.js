document.addEventListener("DOMContentLoaded", () => {
	const  $resultados = document.querySelector(".resultado");  /* document.querySelector("#resultado");*/
	Quagga.init({
		inputStream: {
			constraints: {
				width: 420,
				height: 1080,
			},
			name: "Live",
			type: "LiveStream",
			target: document.querySelector('#contenedorR'), // Pasar el elemento del DOM
		},
		decoder: {
			readers: ["code_128_reader",
			          "ean_reader"/*,
			          "ean_8_reader",
			          "code_39_reader",
			          "code_39_vin_reader",
			          "codabar_reader",
			          "upc_reader",
			          "upc_e_reader",
			          "i2of5_reader",
			          "2of5_reader",
			          "code_93_reader"*/
			          ]
		}
	}, function (err) {
		if (err) {
			console.log(err);
			return
		}
		console.log("Iniciado correctamente");
		Quagga.start();

		
	});

	Quagga.onDetected((data) => {
		$resultados.textContent = data.codeResult.code;
		// Imprimimos todo el data para que puedas depurar
		console.log(data);
		var DatosParaImput = $resultados.textContent = data.codeResult.code;
		$(".DatosParaImput").val(DatosParaImput);

		// $('.resultado').attr('value', resultados);
	});

	Quagga.onProcessed(function (result) {
		var drawingCtx = Quagga.canvas.ctx.overlay,
			drawingCanvas = Quagga.canvas.dom.overlay;

		if (result) {
			if (result.boxes) {
				drawingCtx.clearRect(0, 0, parseInt(drawingCanvas.getAttribute("width")), parseInt(drawingCanvas.getAttribute("height")));
				result.boxes.filter(function (box) {
					return box !== result.box;
				}).forEach(function (box) {
					Quagga.ImageDebug.drawPath(box, { x: 0, y: 1 }, drawingCtx, { color: "#dc3545", lineWidth: 8/*2*/ });
				});
			}

			if (result.box) {
				Quagga.ImageDebug.drawPath(result.box, { x: 0, y: 1 }, drawingCtx, { color: "#17a2b8", lineWidth: 8/*2*/ });
			}

			if (result.codeResult && result.codeResult.code) {
				Quagga.ImageDebug.drawPath(result.line, { x: 'x', y: 'y' }, drawingCtx, { color: '#28a745', lineWidth: 10/*3*/ });
			}
			
		}
	});
});