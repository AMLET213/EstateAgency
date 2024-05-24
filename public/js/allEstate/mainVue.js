const app = new Vue({
	el:'#app',
	data: {
		allEstate: [],
		minSquare:"",
		maxSquare:"",
		minPrice:"",
		maxPrice:"",
		typeEstate:'null',
		rooms:'null',
		typeTransaction:'null',
		sortParam:{},
		sortEstate:[]

	},
	methods:{
		async sort(){

			this.sortParam = {
				"minSquare": this.minSquare,
				"maxSquare": this.maxSquare,
				"minPrice": this.minPrice,
				"maxPrice": this.maxPrice,
				"typeEstate": this.typeEstate,
				"rooms": this.rooms,
				"typeTransaction": this.typeTransaction,
		}
			let request = await fetch("api/estateSort",{
				method:"POST",
				headers: {"Content-Type":"application/json"},
				body: JSON.stringify(this.sortParam)
			})
			let response = await request.json()
			this.sortEstate = response
			this.allEstate = this.sortEstate
			for (let item = 0; item <= Object.keys(this.allEstate).reverse()[0]; item++) {
				if(this.allEstate[item] !=undefined){
					if (this.allEstate[item].apartment == 1) {
						this.allEstate[item].apartment = "комнатная квартира"
					} else this.allEstate[item].apartment = "комнатный дом"
					if (this.allEstate[item].buy == 1) {
						this.allEstate[item].price = this.allEstate[item].price + "₽"
						this.allEstate[item].buy = "Продажа"
					} else {
						this.allEstate[item].buy = "Аренда"
						this.allEstate[item].price = this.allEstate[item].price + "₽ в месяц"
				}
				}
			}
		},
		 async clear(){
			this.sortEstate = []
			this.minSquare = ""
			this.maxSquare = ""
			this.minPrice = ""
			this.maxPrice = ""
			this.typeEstate = "null"
			this.rooms = "null"
			this.typeTransaction = "null"
			let request = await fetch("api/estates")
			let response = await request.json()
			this.allEstate = response
			for (let item = 0; item < this.allEstate.length; item++) {
			if(this.allEstate[item].buy==1){
				this.allEstate[item].buy = "Продажа"
				this.allEstate[item].price = this.allEstate[item].price+"₽"
			} else {
				this.allEstate[item].buy = "Аренда"
				this.allEstate[item].price = this.allEstate[item].price+"₽ в месяц"

			}
			if(this.allEstate[item].apartment==1){
				this.allEstate[item].apartment = "комнатная квартира"
			}else this.allEstate[item].apartment = "комнатный дом"
		}

		},
		cardClick(index){
			document.getElementById('del'+index).classList.toggle('del')
			document.getElementById('card-del'+index).classList.toggle('card-del')

		},
		async cardDel(estate,index){
			for (let item = 0; item < this.allEstate.length; item++) {
				if(estate.id==this.allEstate[item].id){
						Vue.delete(this.allEstate, item);
						this.cardClick(index)
				}
		}
			let request = await fetch("api/estate/"+estate.id,{
				method:"DELETE"
			})
			this.sort()

			console.log(this.sortEstate)
		if(this.sortEstate.length != 0){
			this.cardClick(index)

		}

		}
	},
	computed:{

	},
	async mounted(){
			let request = await fetch("api/estates")
			let response = await request.json()
			this.allEstate = response


		for (let item = 0; item < this.allEstate.length; item++) {
			if(this.allEstate[item].buy==1){
				this.allEstate[item].buy = "Продажа"
				this.allEstate[item].price = this.allEstate[item].price+"₽"
			} else {
				this.allEstate[item].buy = "Аренда"
				this.allEstate[item].price = this.allEstate[item].price+"₽ в месяц"

			}
			if(this.allEstate[item].apartment==1){
				this.allEstate[item].apartment = "комнатная квартира"
			}else this.allEstate[item].apartment = "комнатный дом"
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


