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
    var source = whichpic.getAttribute("href");
    var placeholder = document.getElementById("placeholder");
    placeholder.setAttribute("src",source);
    var text = whichpic.getAttribute("title");
    var description = document.getElementById("description");
    // alert(description.childNodes[0].nodeValue);
    description.firstChild.nodeValue = text;
}