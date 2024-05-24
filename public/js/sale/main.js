document.getElementById('upload_photo').addEventListener('change', function(event){
    if( this.value ){
        var output = document.getElementById('test');
        output.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('test').classList.add("selected")
        document.getElementById('label').classList.add("selected")
        document.getElementById('span').classList.add("selected")
        output.onload = function() {
          URL.revokeObjectURL(output.src) // free memory
        }
    } else { // Если после выбранного тыкнули еще раз, но дальше cancel
			var output = document.getElementById('test');
      console.log( "Файл не выбран" ); 
			output.src = "image/upload_logo.png"
			document.getElementById('test').classList.remove("selected")
        document.getElementById('label').classList.remove("selected")
        document.getElementById('span').classList.remove("selected")
    }
  });

const inputTel =document.getElementById('tel')
var oldTel = inputTel.value

inputTel.addEventListener('click', function f(){
	if(inputTel.value == ""){
		inputTel.value = "+7"
		oldTel= inputTel.value
	}
})

inputTel.addEventListener('input', function f(){
  if(inputTel.value.length<2 || inputTel.value[0]!="+" || inputTel.value[1]!="7"){
    inputTel.value = oldTel
  }
	oldTel=inputTel.value
})
inputTel.addEventListener("change",function f(){
	inputTel.value = inputTel.value.replace( /(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/, '$1($2)$3-$4-$5')
})

const inputAddress = document.getElementById('address')
var oldAddress = inputAddress.value
inputAddress.addEventListener('click', function f(){
	if(inputAddress.value ==""){
		inputAddress.value = "ул."
		oldAddress = inputAddress.value
	}
})

inputAddress.addEventListener("input", function f(){
	if(inputAddress.value.length<3 || inputAddress.value[0]!="у" || inputAddress.value[1]!="л" || inputAddress.value[2]!="."){
    inputAddress.value = oldAddress
  }
	console.log(inputAddress.value)
	if(inputAddress.value[3]==" " && inputAddress.value[3]!=undefined ){
		console.log('adsdasda')
		inputAddress.value = inputAddress.value.replace(' ', '');
	}
	if(inputAddress.value.indexOf(' ',5) !=-1 && inputAddress.value.indexOf(',',5) ==-1){
		inputAddress.value = inputAddress.value.replace(' ','')+", "
	}
	oldAddress=inputAddress.value
})


const inputPrice = document.getElementById('price')

inputPrice.addEventListener("change",function f(){
	// if(inputPrice.value.length % 3 == 2){
	// 	let x =  Math.floor(inputPrice.value.length / 3);
	// 	let y = inputPrice.value

	// 	String.prototype.replaceAt = function(index, replacement) {
	// 		return this.substr(0, index) + replacement + this.substr(index + replacement.length);
	// 	}
		
	// 	let index = 2;
	// 	console.log(inputPrice.value.replaceAt(index, ".")); // Выведет abxcaba
	// }
})
