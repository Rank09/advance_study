function Btn1(){
    document.getElementById("work_start").setAttribute("disabled", true);//ボタンを非活性
    document.getElementById("work_end").removeAttribute("disabled"); //ボタンを有効に
    document.getElementById("start_time").removeAttribute("disabled"); //ボタンを有効に


}

function Btn2(){
    document.getElementById("work_start").removeAttribute("disabled"); //ボタンを有効に
    document.getElementById("work_end").setAttribute("disabled", true);//ボタンを非活性
    document.getElementById("start_time").setAttribute("disabled", true);//ボタンを非活性
    document.getElementById("end_time").setAttribute("disabled", true);//ボタンを非活性
}

function Btn3(){
    document.getElementById("work_end").setAttribute("disabled", true);//ボタンを非活性
    document.getElementById("start_time").setAttribute("disabled", true);//ボタンを非活性
    document.getElementById("end_time").removeAttribute("disabled"); //ボタンを有効に
}

function Btn4(){
    document.getElementById("work_end").removeAttribute("disabled"); //ボタンを有効に
    document.getElementById("start_time").removeAttribute("disabled"); //ボタンを有効に
    document.getElementById("end_time").setAttribute("disabled", true);//ボタンを非活性
}

//if(条件式){

//} else if (条件式){

//} else {

//}