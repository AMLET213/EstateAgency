const app = new Vue({
	el:'#app',
	data: {
		rentEstate: [],
		minSquare: "",
		maxSquare: "",
		minPrice: "",
		maxPrice: "",
		typeEstate: "null",
		rooms: "null",
 
	},
	methods:{
		async sort() {
			this.sortParam = {
				"minSquare": this.minSquare,
				"maxSquare": this.maxSquare,
				"minPrice": this.minPrice,
				"maxPrice": this.maxPrice,
				"typeEstate": this.typeEstate,
				"rooms": this.rooms,
			}
			let request = await fetch("api/rentEstateSort", {
				method: "POST",
				headers: { "Content-Type": "application/json" },
				body: JSON.stringify(this.sortParam)
			})
			let response = await request.json()
			this.rentEstate = response
			for (let item = 0; item <= Object.keys(this.rentEstate).reverse()[0]; item++) {
				if (this.rentEstate[item] != undefined) {
					if (this.rentEstate[item].apartment == 1) {
						this.rentEstate[item].apartment = "комнатная квартира"
					} else this.rentEstate[item].apartment = "комнатный дом"
					if (this.rentEstate[item].buy == 1) {
						this.rentEstate[item].price = this.rentEstate[item].price + "₽"
						this.rentEstate[item].buy = "Продажа"
					} else {
						this.rentEstate[item].buy = "Аренда"
						this.rentEstate[item].price = this.rentEstate[item].price + "₽ в месяц"
					}
				}
			}
		},
		async clear() {
			this.minSquare = ""
			this.maxSquare = ""
			this.minPrice = ""
			this.maxPrice = ""
			this.typeEstate = "null"
			this.rooms = "null"
			let request = await fetch("api/rentEstates")
			let response = await request.json()
			this.rentEstate = response
			for (let item = 0; item <= Object.keys(this.rentEstate).reverse()[0]; item++) {			
				if(this.rentEstate[item] !=undefined){
					this.rentEstate[item].buy = "Аренда"
						this.rentEstate[item].price = this.rentEstate[item].price+"₽ в месяц"
						if(this.rentEstate[item].apartment==1){
							this.rentEstate[item].apartment = "комнатная квартира"
						}else this.rentEstate[item].apartment = "комнатный дом"
	
				}
			}

		},

	},
	computed:{
		
	},
	async mounted(){
			let request = await fetch("api/rentEstates")
			let response = await request.json() 	
			this.rentEstate = response
	

		for (let item = 0; item <= Object.keys(this.rentEstate).reverse()[0]; item++) {			
			if(this.rentEstate[item] !=undefined){
				this.rentEstate[item].buy = "Аренда"
					this.rentEstate[item].price = this.rentEstate[item].price+"₽ в месяц"
					if(this.rentEstate[item].apartment==1){
						this.rentEstate[item].apartment = "комнатная квартира"
					}else this.rentEstate[item].apartment = "комнатный дом"

			}
		}



	}
})



document.addEventListener('DOMContentLoaded', () => {


	const mediaFiles = document.querySelectorAll('img, png, jpg, jpeg');
	let i = 0

	Array.from(mediaFiles).forEach((file, index) => {
			file.onload = () => {
					i++

					if(i === mediaFiles.length) {
							preloader.classList.add('preloader--hide')
							document.body.style.overflow = 'visible';

					}
			}
	})

})
// ограничение ввода символов в input для максимальной площади
var max_Square = document.getElementsByClassName('max-square')
for(let i = 0; i < max_Square.length; i++){
    max_Square[i].addEventListener('input', function() {
		if(this.value > 400) {
		  this.value = 400;
		}
	  })
};
// ограничение ввода символов в input для минимальной площади
var min_Square = document.getElementsByClassName('min-square')
for(let i = 0; i < min_Square.length; i++){
    min_Square[i].addEventListener('change', function() {
		if(this.value < 30) {
		  this.value = 30;
		}
	  })
};
// ограничение ввода символов в input для максимальной цены
var max_Price = document.getElementsByClassName('max-price')
for(let i = 0; i < max_Price.length; i++){
    max_Price[i].addEventListener('input', function() {
		if(this.value > 40000000) {
		  this.value = 40000000;
		}
	  })
};
// ограничение ввода символов в input для минимальной цены
var min_Price = document.getElementsByClassName('min-price')
for(let i = 0; i < min_Price.length; i++){
    min_Price[i].addEventListener('change', function() {
		if(this.value < 100000 && this.value != "") {
		  this.value = 100000;
		}
	  })
};