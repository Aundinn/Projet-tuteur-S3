function hideThis(_div){
    var obj = document.getElementById(_div);
    if(obj.style.display == "block") {
    	obj.style.display = "none";
    } else {
        obj.style.display = "block";
        var child = obj.childNodes;
        for (var i = 0; i < child.length; i++) {
        	child[i].value = '';
        }
    }
}