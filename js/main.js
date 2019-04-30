//Dropdown

const nav_dropdowns = document.querySelectorAll('.dropdown');

nav_dropdowns.forEach((dropdown) => {
	dropdown.addEventListener('click', (e) => {
		e.preventDefault();
		const target = dropdown.getAttribute('data-target');

		const submenu = document.getElementById(target);
		if (submenu.className.match(/\bshow\b/)) {
			submenu.classList.remove('show');
			submenu.classList.add('hide');
			document.querySelector('.main-menu-caret').classList.add('fa-caret-down');
			document.querySelector('.main-menu-caret').classList.remove('fa-caret-up');
		} else {
			submenu.classList.remove('hide');
			submenu.classList.add('show');
			document.querySelector('.main-menu-caret').classList.add('fa-caret-up');
			document.querySelector('.main-menu-caret').classList.remove('fa-caret-down');
		}
	});
});
//Mobile Menu
document.querySelector('#hamburger').addEventListener('click', (e) => {
	e.preventDefault();
	document.querySelector('.overlay').classList.add('show');
	document.querySelector('.overlay').classList.remove('hide');
});
document.querySelector('.close').addEventListener('click', (e) => {
	e.preventDefault();
	document.querySelector('.overlay').classList.add('hide');
	document.querySelector('.overlay').classList.remove('show');
});

//Sidenav Dropdowns
const side_dropdowns = document.querySelectorAll('.side-dropdown');

side_dropdowns.forEach((dropdown) => {
	dropdown.addEventListener('click', (e) => {
		e.preventDefault();
		const target = dropdown.getAttribute('data-target');

		const submenu = document.getElementById(target);
		if (submenu.className.match(/\bshow\b/)) {
			submenu.classList.remove('show');
			submenu.classList.add('hide');
			document.querySelector('.side-menu-caret').classList.add('fa-caret-down');
			document.querySelector('.side-menu-caret').classList.remove('fa-caret-up');
		} else {
			submenu.classList.remove('hide');
			submenu.classList.add('show');
			document.querySelector('.side-menu-caret').classList.add('fa-caret-up');
			document.querySelector('.side-menu-caret').classList.remove('fa-caret-down');
		}
	});
});
