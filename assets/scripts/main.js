//DROPDOWN MENU
//Find the element in the HTML with an ID of "hamburger." An "Event Listener" is added that, when "hamburger" is clicked, the following happens.
document.getElementById("menutoggler").addEventListener("click", function(){
    //querySelectorAll returns an array of HTML elements. A loop is needed to apply the changes to every element.
	var mod = document.querySelectorAll(".menumodifier");
    var i;
	for (i = 0; i < mod.length; i++) {
		mod[i].classList.toggle("menutoggle") ;
	}
});

try {
    document.getElementById("legaltoggler").addEventListener("click", function(){
        //querySelectorAll returns an array of HTML elements. A loop is needed to apply the changes to every element.
        var mod = document.querySelectorAll(".legalmodifier");
        var i;
        for (i = 0; i < mod.length; i++) {
            mod[i].classList.toggle("legaltoggle") ;
        }
    });
}   catch {}
//DROPDOWN AUTO-CLOSE
/*If the menu is still open while the browser window is resized, the menu items will still have the menutoggle class. This will automatically
remove the menutoggle class if the window hits the breakpoint.*/
/* window.addEventListener("resize", function(){
    if (window.innerWidth > 800) {
        var mod = document.querySelectorAll(".menutoggle");
        var i;
        for (i = 0; i < mod.length; i++) {
            mod[i].classList.remove("menutoggle") ;
        }
    }
}) */