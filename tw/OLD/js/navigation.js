// The show menu button
var show_menu = document.querySelector('.show_menu_btn');

//
var viewport_width = document.documentElement.clientWidth;
var menu = document.querySelector('#nav ul');
if ( viewport_width < 600 ) { menu.style.display = "none"; }

//
window.addEventListener('resize', function(event) {

	var new_viewport = document.documentElement.clientWidth;

	if ( new_viewport > 599 ) {
		menu.style.display = "block";
	} else {
		menu.style.display = "none";
	}
});

// Make the menu show/hide by the click of a button
show_menu.addEventListener('click', function(event) {
    var target = document.querySelector(show_menu.getAttribute('data-target'));

    if (target.style.display == "none") {
        target.style.display = "block";
        show_menu.innerHTML = show_menu.getAttribute('data-shown-text');

    } else {
        target.style.display = "none";
        show_menu.innerHTML = show_menu.getAttribute('data-hidden-text');
    }
});