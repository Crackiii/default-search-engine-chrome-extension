document.getElementsByClassName("random")[0].textContent = Math.floor(Math.random() * 900000) + 100000;
document.getElementsByClassName("date")[0].textContent   = new Date().getDate()+"/"+(new Date().getMonth()+1)+"/"+new Date().getFullYear();

var d   =  new Date(),
    h   =  d.getHours(),
    m   =  d.getMinutes(),
    s   =  d.getSeconds(),
    hh   =  ( h < 10   )  ?  "0"+h   :  h,
    hh   =  ( h == 0   )  ?  h = 12  :  h,
    hh   =  ( h > 12   )  ?  h-12    :  h,
    mm   =  ( m < 10   )  ?  "0"+m   :  m,
    ss   =  ( s < 10   )  ?  "0"+s   :  s,
    t    =  ( h  > 12  )  ?  "PM"    :  "AM";

document.getElementsByClassName("time")[0].textContent =  hh+" : "+mm+" : "+ss+" "+t;