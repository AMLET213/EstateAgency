const app = new Vue({
    el: '#app',
    data: {
        offers: [],
        newestate:{}
    },
    methods: {
        async destroy(offer){
            for (let item = 0; item < this.offers.length; item++) {
                const element = this.offers[item];
                if(element.id==offer.id){
                    Vue.delete(this.offers, item);
                }
                
            }
            let request = await fetch("api/offer/"+offer.id+"/0",{
                method:"DELETE"
            })
        },

        async add(offer){
            for (let item = 0; item < this.offers.length; item++) {
                const element = this.offers[item];
                if(element.id==offer.id){
                    Vue.delete(this.offers, item);
                }
                
            }

						if(offer.buy=="Продажа"){
							offer.buy = "1"
						} else offer.buy = "0"
						if(offer.apartment=="Квартира"){
							offer.apartment = "1"
						}else offer.apartment = "0"
						
            this.newestate = {
                "image": offer.image,
                "apartment": offer.apartment,
                "buy": offer.buy,
                "address": offer.address,
                "rooms": offer.rooms,
                "square": offer.square,
                "price": offer.price,
                "number_phone": offer.number_phone,
            }
            let request = await fetch("api/estate",{
                method:"POST",
                headers: {"Content-Type":"application/json"},
                body: JSON.stringify(this.newestate)
            })
            let requestt = await fetch("api/offer/"+offer.id+"/1",{
                method:"DELETE"
            })

            

        }

    },
    computed: {

    },
    async mounted() {
        let request = await fetch("api/offers")
        let response = await request.json()
        this.offers = response

				for (let item = 0; item < this.offers.length; item++) {			
					if(this.offers[item].buy==1){
						this.offers[item].buy = "Продажа"
					} else this.offers[item].buy = "Аренда"
					if(this.offers[item].apartment==1){
						this.offers[item].apartment = "Квартира"
					}else this.offers[item].apartment = "Дом"
				}


    }



})