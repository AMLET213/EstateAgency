const app = new Vue({
	el:'#app',
	data: {
		allProperties: '0',
		saleProperties:'0',
		bestRent:[],
		bestSale:[],
	},
	methods:{

	},
	computed:{
		
	},
	async mounted(){
			let request = await fetch("api/estates")
			let response = await request.json()
			this.allProperties = response.length

		for (let item = 0; item < response.length; item++) {
			const element = response[item];
			if(this.bestRent.length<3 && element.buy==0){
				if(element.apartment==1){
					element.apartment = "комнатная квартира"
				}else element.apartment = "комнатный дом"
				this.bestRent[this.bestRent.length] = element
			}
			if(this.bestSale.length<3 && element.buy==1){
				if(element.apartment==1){
					element.apartment = "комнатная квартира"
				}else element.apartment = "комнатный дом"
				this.bestSale[this.bestSale.length] = element
			}
			if(element.buy==1){
				this.saleProperties++
			}
		}



	}
})