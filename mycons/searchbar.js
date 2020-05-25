var ketik = document.getElementById("searchbar");
var barang= document.getElementById("qq");

ketik.addEventListener('keyup',function(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function(){
if(xhr.readyState== 4 && xhr.status==200){
barang.innerHTML=xhr.responseText;
}
}
console.log(ketik.value);
xhr.open('GET',"searchbarindex.php?ketik="+ketik.value,true);

xhr.send();


});