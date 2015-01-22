function mail_contact() {
	document.write("<a href=\"mai"+"lto:kont"+"akt@octop"+"lus.dk\">kon"+"takt@octo"+"plus.dk</a>");
}
function mail_peter() {
	document.write("<a href=\"mai"+"lto:p"+"do@octo"+"plus.dk\">pd"+"o@oct"+"oplus.dk</a>");
}
function mail_asger() {
	document.write("<a href=\"mai"+"lto:alp"+"@octop"+"lus.dk\">a"+"lp@octo"+"plus.dk</a>");
}
function mail_presse() {
	document.write("<a href=\"mai"+"lto:p"+"resse@octop"+"lus.dk\">pre"+"sse@octo"+"plus.dk</a>");
}

function ringmigop() {
	var params = 'navn=' + encodeURIComponent(document.getElementById('navn').value);
		params += '&tlf=' + encodeURIComponent(document.getElementById('tlf').value);
		params += '&url=' + encodeURIComponent(document.getElementById('url').value);
	
    new Ajax.Request('/form/callMe', {
        asynchronous: true,
        evalScripts: false,
        method: 'post',
        onComplete: function(request, json) {
            document.getElementById('navn').value ='';
			document.getElementById('tlf').value ='';
			jQuery('.contact-box-confirm').click();
        },
        onFailure: function(request, json) {
			jQuery('.contact-box-error').click();
        },
        parameters: params
    });
}