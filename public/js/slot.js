document.addEventListener("DOMContentLoaded",function(){
    const leftImg = $('#leftImg');
    const centerImg = $('#centerImg');
    const rightImg = $('#rightImg');
    const leftStop = $('#leftStop');
    const centerStop = $('#centerStop');
    const rightStop = $('#rightStop');
    const startButton = $('#startButton');
    const resetButton = $('#resetButton');
    const threeNumber = $('threeNumber');
    const money = $('money');
    let moneyleft = 0;
    let moneycenter = 0;
    let moneyright = 0;
    let startFlg1=0; //初期表示=0,回転中=1,ストップ=2
    let startFlg2=0;
    let startFlg3=0;
    let random = Math.floor( Math.random(1) * 100);
    let random2 = Math.floor( Math.random(1) * 100);
    let random3 = Math.floor( Math.random(1) * 100);
    let picJson =[
        {"URL":"https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png",
         "items":"1",   
         "point":1, 
        //  1つにつき100点
        //　そろったら1000点
    },
    {
        "URL":"https://3.bp.blogspot.com/-XPnqDnX2P8c/UZRWk-I9jeI/AAAAAAAASvQ/2ltSBFcsENA/s800/aprilfool_piert_face.png",
        "items":"2",
        "point":2,
        // 1つにつき-50点
        //  そろったらマイナス500点
    },
    {
        "URL":"https://3.bp.blogspot.com/-jVXs5yuF54Y/U6Qo4RUd6EI/AAAAAAAAhkc/gnrThJIjrU0/s800/omocha_suzu.png",
        "items":"3",
        "point":3, 
        //  1つにつき20点
        // そろったら100点
    },
    {
        "URL":"https://3.bp.blogspot.com/-ddTjHiYjIjI/UgSMOOCKHeI/AAAAAAAAW-4/QrU2gpketvQ/s800/fruit_cherry.png",
        "items":"4",
        "point":4, 
        //  1つにつき2点
    },
    {
        "URL":"https://1.bp.blogspot.com/-uo_TRiIGFsQ/X9lJhr3IuFI/AAAAAAABc6M/u2rxPd_7ED4mhwmywANaBAbe0RisJ-9pwCNcBGAsYHQ/s608/money_kinbut.png",
       "items":"5",
       "point":5, 
       //  1つにつき5点
    },
    {
        "URL":"https://4.bp.blogspot.com/-tKKlcv6ObNk/WxvKDYLtB5I/AAAAAAABMmg/pcOEaLB6nSsbnyB8cV-enZvmFdnD5QLwwCLcBGAs/s800/fruit_cassis.png",
        "items":"6",
        "point":6, 
        //  1つにつき1点
    }
    ];
    (function animation(){
        window.requestAnimationFrame(animation);
        if(startFlg1 == 1){
            random = Math.floor( Math.random(1) * 100);
            if(random < 50){
                $('#leftImg').attr('src', picJson[0].URL);
            }else if(random < 40){
                $('#leftImg').attr('src', picJson[3].URL);
            }else if(random < 55){
                $('#leftImg').attr('src', picJson[1].URL);
            }else if(random < 70){
                $('#leftImg').attr('src', picJson[2].URL);
            }else if(random < 85){
                $('#leftImg').attr('src', picJson[4].URL);
            }else{
                $('#leftImg').attr('src', picJson[5].URL);
            }
            // $('#money').html('p'+"球");
        }
        if(startFlg2 == 1){
            random2 = Math.floor( Math.random(1) * 100);
            if(random2 < 50){
                $('#centerImg').attr('src', picJson[0].URL);
            }else if(random2 < 40){
                $('#centerImg').attr('src', picJson[3].URL);
            }else if(random2 < 55){
                $('#centerImg').attr('src', picJson[1].URL);
            }else if(random2 < 70){
                $('#centerImg').attr('src', picJson[2].URL);
            }else if(random2 < 85){
                $('#centerImg').attr('src', picJson[4].URL);
            }else{
                $('#centerImg').attr('src', picJson[5].URL);
            }
            // $('#money').html('p'+"球");
        }
        if(startFlg3 == 1){
            random3 = Math.floor( Math.random(1) * 100);
            if(random3 < 50){
                $('#rightImg').attr('src', picJson[0].URL);
            }else if(random3 < 40){
                $('#rightImg').attr('src', picJson[3].URL);
            }else if(random3 < 55){
                $('#rightImg').attr('src', picJson[1].URL);
            }else if(random3 < 70){
                $('#rightImg').attr('src', picJson[2].URL);
            }else if(random3 < 85){
                $('#rightImg').attr('src', picJson[4].URL);
            }else{
                $('#rightImg').attr('src', picJson[5].URL);
            }
            // $('#money').html('p'+"球");
        }
        
        
        if ($('#leftImg').attr('src') == $('#centerImg').attr('src') && $('#leftImg').attr('src') == $('#rightImg').attr('src') && $('#centerImg').attr('src') == $('#rightImg').attr('src')){
          if(startFlg1 == 0 && startFlg2 == 0 && startFlg3 == 0){
            $('#rightImg').attr('src', picJson[0].URL);
            $('#centerImg').attr('src', picJson[0].URL);
            $('#leftImg').attr('src', picJson[0].URL);
            // $('#money').html(0+"球");
          }
        }
          if(startFlg1 == 2 && startFlg2 == 2 && startFlg3 == 2){
               if  ($('#leftImg').attr('src') == $('#centerImg').attr('src') && $('#leftImg').attr('src') == $('#rightImg').attr('src') && $('#centerImg').attr('src') == $('#rightImg').attr('src')){
                    if($('#leftImg').attr('src') == picJson[0].URL && $('#centerImg').attr('src') == picJson[0].URL && $('#rightImg').attr('src') == picJson[0].URL){
                            $('#money').html(111+"球");
                    }else if($('#leftImg').attr('src') == picJson[1].URL && $('#centerImg').attr('src') == picJson[1].URL && $('#rightImg').attr('src') == picJson[1].URL){
                            $('#money').html(222+"球");
                    }else if($('#leftImg').attr('src') == picJson[2].URL && $('#centerImg').attr('src') == picJson[2].URL && $('#rightImg').attr('src') == picJson[2].URL){
                            $('#money').html(333+"球");
                    }else if($('#leftImg').attr('src') == picJson[3].URL && $('#centerImg').attr('src') == picJson[3].URL && $('#rightImg').attr('src') == picJson[3].URL){
                            $('#money').html(444+"球");
                    }else if($('#leftImg').attr('src') == picJson[4].URL && $('#centerImg').attr('src') == picJson[4].URL && $('#rightImg').attr('src') == picJson[4].URL){
                            $('#money').html(555+"球");
                    }else if($('#leftImg').attr('src') == picJson[5].URL && $('#centerImg').attr('src') == picJson[5].URL && $('#rightImg').attr('src') == picJson[5].URL){
                            $('#money').html(666+"球");
                    }
                }else{
                    if($('#leftImg').attr('src') == picJson[0].URL){
                            moneyleft = (picJson[0].point);
                    }else if($('#leftImg').attr('src') == picJson[1].URL){
                            moneyleft = (picJson[1].point);
                    }else if($('#leftImg').attr('src') == picJson[2].URL){
                            moneyleft = (picJson[2].point);
                    }else if($('#leftImg').attr('src') == picJson[3].URL){
                            moneyleft = (picJson[3].point);
                    }else if($('#leftImg').attr('src') == picJson[4].URL){
                            moneyleft = (picJson[4].point);
                    }else if($('#leftImg').attr('src') == picJson[5].URL){
                            moneyleft = (picJson[5].point);
                    }else if($('#leftImg').attr('src') == picJson[6].URL){
                            moneyleft = (picJson[6].point);
                    }

                    if($('#centerImg').attr('src') == picJson[0].URL){
                            moneycenter = (picJson[0].point);
                    }else if($('#centerImg').attr('src') == picJson[1].URL){
                            moneycenter = (picJson[1].point);
                    }else if($('#centerImg').attr('src') == picJson[2].URL){
                            moneycenter = (picJson[2].point);
                    }else if($('#centerImg').attr('src') == picJson[3].URL){
                            moneycenter = (picJson[3].point);
                    }else if($('#centerImg').attr('src') == picJson[4].URL){
                            moneycenter = (picJson[4].point);
                    }else if($('#centerImg').attr('src') == picJson[5].URL){
                            moneycenter = (picJson[5].point);
                    }else if($('#centerImg').attr('src') == picJson[6].URL){
                            moneycenter = (picJson[6].point);
                    }

                    if($('#rightImg').attr('src') == picJson[0].URL){
                            moneyright = (picJson[0].point);
                    }else if($('#rightImg').attr('src') == picJson[1].URL){
                            moneyright = (picJson[1].point);
                    }else if($('#rightImg').attr('src') == picJson[2].URL){
                            moneyright = (picJson[2].point);
                    }else if($('#rightImg').attr('src') == picJson[3].URL){
                            moneyright = (picJson[3].point);
                    }else if($('#rightImg').attr('src') == picJson[4].URL){
                            moneyright = (picJson[4].point);
                    }else if($('#rightImg').attr('src') == picJson[5].URL){
                            moneyright = (picJson[5].point);
                    }else if($('#rightImg').attr('src') == picJson[6].URL){
                            moneyright = (picJson[6].point);
                    }
                    // $('#money').html(moneyleft + moneycenter + moneyright + "球");
                }
                }
          }
            
            
  ())

    startButton.on('click',function(){
        startFlg1=1;
        startFlg2=1;
        startFlg3=1;
        $('#startButton').attr('src','https://3.bp.blogspot.com/-fFUY85vORJg/Vvpdoan991I/AAAAAAAA5Rg/adywSGA7HBQ_Y2FmZWwDJtUwI-tJbz5eQ/s800/button_start2.png');
        $('#resetButton').attr('src','https://2.bp.blogspot.com/-cp5f6mhUcSw/Vla-Gu0ZtmI/AAAAAAAA1CU/8q2cAji1H8s/s800/reset_buttn_off.png');
        // $('#money').html(+"球");
    });
    leftStop.on('click',function(){
        startFlg1=2;
    });
    centerStop.on('click',function(){
        startFlg2=2;
    });
    rightStop.on('click',function(){
        startFlg3=2;
          });

    resetButton.on('click',function(){
        startFlg1=0;
        startFlg2=0;
        startFlg3=0;
        $('#resetButton').attr('src','https://3.bp.blogspot.com/-Vq4Ei1rXelY/Vla-GokI3UI/AAAAAAAA1CQ/sRrY-SjHbjk/s800/reset_buttn_on.png');
        $('#startButton').attr('src','https://1.bp.blogspot.com/-UsDBghnTkkE/VvpdnBu-nuI/AAAAAAAA5Rc/CKqATAWvfkMpU7sNaJIhySDOmR5HPyJ6A/s800/button_start1.png');
        $('#leftImg').attr('src','https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png');
        $('#centerImg').attr('src','https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png');
        $('#rightImg').attr('src','https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png');
    });

    
 
  
   
});