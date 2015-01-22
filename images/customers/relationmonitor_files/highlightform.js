function initHighlight() {
    if (!document.getElementsByTagName){ return; }
    var allfields = document.getElementsByTagName("input");

    // loop through all input tags and add events
    for (var i=0; i<allfields.length; i++){
        var field = allfields[i];
        if ((field.getAttribute("type") == "text") || (field.getAttribute("type") == "password") ) {
            field.onfocus = function () {this.className = 'highlightActiveField';}
            field.onblur = function () {this.className = 'highlightInactiveField';}
        }
    }
    var allfields = document.getElementsByTagName("textarea");

    // loop through all input tags and add events
    for (var i=0; i<allfields.length; i++){
        var field = allfields[i];
            field.onfocus = function () {this.className = 'highlightActiveField';}
            field.onblur = function () {this.className = 'highlightInactiveField';}
    }


    var allfields = document.getElementsByTagName("select");

    // loop through all input tags and add events
    for (var i=0; i<allfields.length; i++){
        var field = allfields[i];
            field.onfocus = function () {this.className = 'highlightActiveField';}
            field.onblur = function () {this.className = 'highlightInactiveField';}
    }
}

function initImageLinks() {
    if (!document.getElementsByTagName){ return; }
    var allfields = document.getElementsByTagName("img");

	// loop through all img tags and add noborder for links
    for (var i=0; i<allfields.length; i++){
        var field = allfields[i];

		if (field.parentNode.tagName.toLowerCase() == 'a')
		{
			if (field.parentNode.className != "")
			{
				field.parentNode.className = field.parentNode.className + " noborder";
			}
			else
			{
				field.parentNode.className = "noborder";
			}
		}
    }
}

function addLoadEvent(func) {   
    var oldonload = window.onload;
    if (typeof window.onload != 'function'){
        window.onload = func;
    } else {
        window.onload = function(){
        oldonload();
        func();
        }
    }
}

addLoadEvent(initHighlight);
addLoadEvent(initImageLinks);
