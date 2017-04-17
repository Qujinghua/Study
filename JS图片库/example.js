 //多浏览器适用getElementsByClassName
//  function getElementsByClassName(node, classname){
//     if(node.getElementsByClassName){
//         //使用现有方法
//         return node.getElementsByClassName(classname);
//     }else{
//         var results = new Array();
//         var elems = node.getElementsByClassName("*");
//         for(var i=0;i<elems.length;i++){
//             if(elems[i].className.indexOf(classname) != -1){
//                 result[results.length] = elems[i];
//             }
//         }
//         return results;
//     }
//  }

function showPic(whichpic){
    if(!document.getElementById("placeholder")) return false;
    var source = whichpic.getAttribute("href");
    var placeholder = document.getElementById("placeholder");
    if(placeholder.nodeName != "IMG") return false;
    placeholder.setAttribute("src",source);
    if(document.getElementById("description")){
        if(whichpic.getAttribute("title")){
            var text = whichpic.getAttribute("title");
        } else{
            var text = "";
        }
        var description = document.getElementById("description");
        // alert(description.childNodes[0].nodeValue);
        if(description.firstChild.nodeType == 3){
            description.firstChild.nodeValue = text;
        }
    }  
}
function prepareGallery(){
    if(!document.getElementsByTagName) return false;
    if(!document.getElementById) return false;
    if(!document.getElementById("imagegallery")) return false;
    var gallery = document.getElementById("imagegallery");
    var links = gallery.getElementsByTagName("a"); 
    for(var i=0;i<links.length;i++){
        links[i].onclick = function(){
            showPic(this);
            return !(!showPic(this));
            // showPic(this);
            // return false;
        }
        // links[i].onkeypress = links[i].onclick;
    }
}
function addLoadEvent(func){
    var oldonload = window.onload;
    if(typeof window.onload != 'function'){
        window.onload = func;
    }else{
        window.onload = function(){
            oldonload();
            func();
        }
    }
}
addLoadEvent(prepareGallery);