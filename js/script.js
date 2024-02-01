console.clear();

let alldivs = document.querySelectorAll('.main');
const centerdiv = () => {
    let windowH = window.innerHeight;

    alldivs.forEach((item) => {
        let top = item.getBoundingClientRect().top;

        if(top < windowH){
            item.classList.add('active')
        }
        else{
            item.classList.remove('active');
        }
    })
}
centerdiv();
   window.addEventListener("scroll", centerdiv)

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');


loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if (element !== "slide-up") {
			parent.classList.add('slide-up')
		} else {
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if (element !== "slide-up") {
			parent.classList.add('slide-up')
		} else {
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});


function showModal() {
	document.querySelector('.overLay').classList.add('showOverLay');
	document.querySelector('.form-structor').classList.add('showLoginForm');
}

function removeModal() {
	document.querySelector('.overLay').classList.remove('showOverLay');
	document.querySelector('.form-structor').classList.remove('showLoginForm');
}
