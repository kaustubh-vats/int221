function numberWithCommas(x) {
    return String(x).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
// const myParam = "ctWEbnrKnhzNiTT_IgrOpJ6QuCcJIpnN";
document.addEventListener('DOMContentLoaded', function() {
    var timeUpdated = document.getElementById("time_updated");
    let date = new Date(Number(timeUpdated.textContent));
    let month = date.getMonth() + 1;
    let day = date.getDate();
    let year = date.getFullYear();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let meridian  = "AM";
    if(hours>=12){
        meridian = "PM";
    }
    if(hours>12){
        hours = hours - 12;
    }
    if(hours==0){
        hours = 12;
    }
    if(minutes<10){
        minutes = "0" + minutes;
    }
    if(month<10){
        month = "0" + month;
    }
    if(day<10){
        day = "0" + day;
    }
    year = String(year).substring(2,4);
    timeUpdated.textContent = month + "/" + day + "/" + year + " " + hours + ":" + minutes + " " + meridian;
});
function toggleTheme(param){
    if(param.getAttribute('src') == "/imgs/theme.png"){
        document.body.classList.add("dark-theme");
        param.setAttribute('src', "/imgs/theme_dark.png");
    } else {
        document.body.classList.remove("dark-theme");
        param.setAttribute('src', "/imgs/theme.png");
    }
}