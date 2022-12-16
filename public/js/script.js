function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var day = date.getDay();
    var month = date.getMonth();
    var year = date.getFullYear();
    
    if(h == 0){
        h = 24;
    }
    day = (day < 10) ? "0" + day : day;
    month = (month < 10) ? "0" + month : month;
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = "Date : " + day + "/" + month + "/" + year + " - " + h + ":" + m + ":" + s;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}


function NextTimePing(){
    var deltaPing = 10;
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds() + deltaPing; // 0 - 59
    var day = date.getDay();
    var month = date.getMonth();
    var year = date.getFullYear();
    
    if(h == 0){
        h = 24;
    }
    day = (day < 10) ? "0" + day : day;
    month = (month < 10) ? "0" + month : month;
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = "Next ping : " + day + "/" + month + "/" + year + " - " + h + ":" + m + ":" + s;
    document.getElementById("NextPing").innerText = time;
    document.getElementById("NextPing").textContent = time;
    
    setTimeout(NextTimePing, 1000*deltaPing);
    
}
 
window.onload = function reloadPing () {
        var element = document.getElementById('pingSillage');
        // element.
        setTimeout(reloadPing, 2000);
}

showTime();
NextTimePing();