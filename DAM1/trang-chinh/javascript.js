





var arrI=[]
arrI[0]="https://cdn.tgdd.vn/Files/2019/08/11/1186682/tat-tan-tat-cac-loai-dong-ho-deo-tay-pho-bien-hien-nay-1.jpg"
arrI[1]="https://media.cnn.com/api/v1/images/stellar/prod/220715122428-macbook-air-m2-review-9.jpg?c=original"
arrI[2]="https://fdn.gsmarena.com/imgroot/news/22/07/iphone-14-higher-demand-in-china-kuo/-1200/gsmarena_000.jpg"
arrI[3]="https://images.samsung.com/vn/smartphones/galaxy-s23-ultra/images/galaxy-s23-ultra-share-image.jpg"
arrI[4]="https://cdn2.cellphones.com.vn/x,webp,q100/media/wysiwyg/Watch/Apple/apple-watch-12.jpg"

var i=0;
var time;
 function pre(){
    i--;
    if(i<0){
        i=arrI.length - 1;
    }
    document.getElementById("image").src=arrI[i]
 }

function next(){
    i++
    if( i>= arrI.length){
        i = 0
    }
    document.getElementById("image").src=arrI[i]
}

function auto(){
    i++
    if( i>= arrI.length){
        i = 0
    }
    document.getElementById("image").src=arrI[i]
    time=setTimeout(auto,4000)
}

// function stop(){
//     clearTimeout(time)
// }

window.onload=function(){
    time=setTimeout(auto,4000)
}