var myDiv = document.querySelector('.df');
var myBtn = document.querySelector("#mybtn")
var artForm = document.querySelector("#artForm");
var save=document.getElementById('save');
var index = 0;
var data=[];
    
myBtn.onclick = function(e)
{ 
    index++;
    e.preventDefault();
    var dynamicForm = myDiv.cloneNode(true);
    artForm.appendChild(dynamicForm);
    dynamicForm.id = 'contant'+index;
    var input1 =document.getElementById('contant'+index).children[0].children[1];
    var input2=document.getElementById('contant'+index).children[1].children[1];
    var input3=document.getElementById('contant'+index).children[2].children[1];
    var input4=document.getElementById('contant'+index).children[3].children[1];
    input1.setAttribute('id', 'title'+index);
    input2.setAttribute('id', 'author'+index);
    input3.setAttribute('id', 'category'+index);
    input4.setAttribute('id', 'description'+index);
}
save.onclick=function(){
 for (let i = 0; i <=index; i++) {
    var obj={};
    obj['title'+i]=document.querySelector('#title'+i).value;
    obj['author'+i]=document.querySelector('#author'+i).value;
    obj['category'+i]=document.querySelector('#category'+i).value;
    obj['description'+i]=document.querySelector('#description'+i).value;
    data.push(obj);
 }
 var xhr=new XMLHttpRequest;
 r=JSON.stringify(data);
 xhr.open("GET", "http://localhost/My/oop-crud/Controller/controllerSend.php?q="+r, true);
  xhr.send();
}
