/*
 "Sunday ",
   "Monday ", 
   "Tuesday ", 
   "Wednesday ", 
   "Thursday ", 
   "Friday ", 
   "Saturday "

 */
const days = 
[
   "Domingo ",
   "Lunes ", 
   "Martes ", 
   "Miercoles ", 
   "Jueves ", 
   "Viernes ", 
   "Sabado "
];
function GetCurrentTime(){
    let C_Date = new Date();
    Date.prototype.date = C_Date.toDateString();
    C_Date.date = C_Date.date.split(' ');
    C_Date.date = days[C_Date.getDay()] + C_Date.date.slice(1, 4).join(', ');
    Date.prototype.hour = C_Date.getHours();
    Date.prototype.min = C_Date.getMinutes();
    Date.prototype.sec = C_Date.getSeconds();
    Date.prototype.format = (C_Date.hour >= 12 && C_Date.hour <= 23)? "PM" : "AM";
    C_Date.hour = (C_Date.hour > 12 && C_Date.hour < 10)? String('0' + (C_Date.hour - 12)) : (C_Date.hour > 12)? ((C_Date.hour = C_Date.hour - 12) < 10)? String('0' + C_Date.hour) : C_Date.hour : (C_Date.hour === 0)? "12" : (C_Date.hour < 10)? String('0' + C_Date.hour) : C_Date.hour;
    C_Date.min = (C_Date.min < 10)? String('0' + C_Date.min) : C_Date.min;
    C_Date.sec = (C_Date.sec < 10)? String('0' + C_Date.sec) : C_Date.sec;
    return C_Date;
}
function setTime(){
    let C_Date = GetCurrentTime();
    document.querySelector('#C_date').innerHTML = `${C_Date.date} `;
    // document.querySelector('#C_time').innerHTML = `${C_Date.hour} : ${C_Date.min} : ${C_Date.sec} ${C_Date.format}`;
}
window.addEventListener('load', function(){
    (function(url){
        fetch(url).then(function(req){
            return req.json();
        }).then(function(res){
            document.querySelector("#TimeZone").textContent = "Time zone:" + res.timezone;
        }).catch(function(error){
            console.log(error.message);
        })
    })("http://ip-api.com/json");
    setTime();
    setInterval(function(){
        setTime();
    }, 1000);
});