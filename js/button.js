var count = 0;
document.getElementById("myButton").onclick = function(){
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    }   
    else { 
        var img = document.createElement("img");
        img.src = "https://citatnica.ru/wp-content/uploads/2022/11/1614624765_2-p-fon-lesa-dlya-fotoshopa-2.jpg";
        document.getElementById("demo").appendChild(img);
    }

}