const navBtn = document.querySelector('.nav__btn')
// const closeBtn = document.querySelector('.nav__close')
const menu = document.querySelector('.nav__menu')

const handleNav = () => {
	navBtn.classList.toggle('active')
	menu.classList.toggle('active')
	// closeBtn.classList.remove('hidden')
}

// const closeNav = () => {
// 	navBtn.classList.remove('active')
// 	menu.classList.remove('active')
// 	closeBtn.classList.add('hidden')
// }

navBtn.addEventListener('click', handleNav)
// closeBtn.addEventListener('click', closeNav)
