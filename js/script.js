console.clear();

let alldivs = document.querySelectorAll('.main');
const centerdiv = () => {
	let windowH = window.innerHeight;

	alldivs.forEach((item) => {
		let top = item.getBoundingClientRect().top;

		if (top < windowH) {
			item.classList.add('active')
		}
		else {
			item.classList.remove('active');
		}
	})
}
centerdiv();
window.addEventListener("scroll", centerdiv)

const wrapper = document.querySelector(".wrapper"),
	signupHeader = document.querySelector(".signup header"),
	loginHeader = document.querySelector(".login header");
loginHeader.addEventListener("click", () => {
	wrapper.classList.add("active");
});
signupHeader.addEventListener("click", () => {
	wrapper.classList.remove("active");
});


function showModal() {
	document.querySelector('.overLay').classList.add('showOverLay');
	document.querySelector('.wrapper-form').classList.add('showLoginForm');
}

function removeModal() {
	document.querySelector('.overLay').classList.remove('showOverLay');
	document.querySelector('.wrapper-form').classList.remove('showLoginForm');
}


