const headerContent = document.getElementById('content')

window.addEventListener('scroll', function () {
	const scrollPosition = window.scrollY
	// console.log(scrollPosition)
	if (scrollPosition >= 900) {
		headerContent.style.backgroundColor = 'white'
        headerContent.style.width = "100%"
        headerContent.style.borderRadius = "0px"
        headerContent.style.top = "0px"
	}
	else {
		headerContent.style.backgroundColor = 'rgba(255, 255, 255, 0.3)'
        headerContent.style.width = "1130px"
        headerContent.style.borderRadius = "50px"
        headerContent.style.top = "40px"
        
	}
});

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


