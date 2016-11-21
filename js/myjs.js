

function swingBar(){
    $( '#header' ).animate({top:'100px'},1000,"swing");
    $( '#left' ).animate({left:'-6px'},1500,"swing");
    $( '#right' ).animate({left:'1280px'},1500,"swing");
}


function view(el){ 
      $('html,body').animate({scrollTop: 0}, 100);
      $(el).closest("div").removeAttr("id");
      $(el).closest("div").addClass("video");
      $('body').css("overflow" , "hidden");      
      $(el).addClass("active_video");


      el.onpause = function() {
        $(el).closest("div").removeAttr("class");
        $(el).closest("div").attr("id" , "video")
        $(el).removeAttr("class");
        $('body').css("overflow" , "visible");  
        $(el).get(0).currentTime=0;       
        $(el).css("poster" , "img/dota2.jpg");
      };
}


function slideUnderline(){
      $( '#underline' ).animate({left:'110px'},4000,"swing");
      setTimeout(function(){$( '#underline' ).css("opacity" , "0.5");}, 3500);      
      $( '#underline' ).animate({left:'-10px'},0,"swing");
      setTimeout(function(){$( '#underline' ).css("opacity" , "1");}, 4000);      
      slideUnderline();
    }




var myimage= [];
  myimage[0] = new Image();
  myimage[0].src = 'img/ads1.jpg';
  myimage[1] = new Image();
  myimage[1].src = 'img/ads2.jpg';
  myimage[2] = new Image();
  myimage[2].src = 'img/ads3.jpg';
  myimage[3] = new Image();
  myimage[3].src = 'img/ads4.jpg';
  myimage[4] = new Image();
  myimage[4].src = 'img/ads5.jpg';

  var i = 0

  function changearray(){ 
        
        var img = document.getElementById("img_fading");
        img.src = myimage[i].src ;
        img.width = 275;   
        img.height = 220;  
        i++; 

        if(i >= myimage.length){
              i = 0;
        } 

        fadeImg(img, 100, true);      
        setTimeout(function(){
            changearray()
        }, 12000);   
  }

  function fadeImg(img, count, fade){
      if(fade === true){
          count--;
      }else{
          count++;
      }
      if(count > 0 && count < 100){
          img.style.opacity = count / 100;
          setTimeout(function(){fadeImg(img, count, fade);}, 100);
      }
  }

  stat = false;
  function changeArrow(){
      var img = document.getElementById("arrow");    
      if(stat == false){
       img.src = 'mywebsite/img/down_arrow_black.png';
       stat = true;
        setTimeout(function(){changeArrow();}, 500);
      }else{
        img.src = 'mywebsite/img/down_arrow.png';
        stat = false;
        setTimeout(function(){changeArrow();}, 500);
      }
    
  }



  $(document).ready(function(){

    $("#keyword").keyup(function(){
      var content = $("#keyword").val();
      if (content !== null ) {
            setTimeout(function(){
            $("#table").empty();
            $.ajax({
              url : 'http://localhost/mywebsite/site/ajaxSearch/'+content,
              success : function(response){
                $('#result').html(response);
              }
            });
            ;}, 1000);
      }
    });


     $(".delete").click(function(){
          event.preventDefault();
          var key = $(this).attr("href");
          alert(key);
          $.ajax({
           url : key,
          success : function(response){
          $("#table").empty();
          $('#result').html(response);
        }     
    });
   });

    //last scroll will always save the current scroll position value
    var CurrentScroll = 0;
    $(window).scroll(function(event){

        var NextScroll = $(this).scrollTop();

        if (NextScroll > CurrentScroll){
  			$( "#header" ).css( "top", "-20px" );
        $( "#header2" ).css( "top", "-20px" );
        }
        else if (NextScroll < 98){

  		$( "#header" ).css( "top", "100px" );
      $( "#header2" ).css( "top", "100px" );
        }
        //Updates current scroll position
        CurrentScroll = NextScroll;
    });




    $("#showGames").click(function(){
      $("#resultget").append("tulisan <b>Hasil</b>");
    });
    


    var status = 0;
      $('.custom_footer').click(function(){
          if(status == 0){
            $( '.custom_footer' ).animate({bottom:'0px'},"slow","swing");
            status = 1;
          }else{
            $( '.custom_footer' ).animate({bottom:'-40px'},"slow","swing");
            status = 0;
          }
    }); 


    var statuslog = 0;
      $('#slide_login').click(function(){
          if(statuslog == 0){
            $( '#right' ).animate({left:'1200px'},"slow","swing");
            statuslog = 1;
          }else{
            $( '#right' ).animate({left:'1300px'},"slow","swing");
            statuslog = 0;
          }
    }); 



      $("#nav1").hide();
      var cancel = false;
          $("#menu2").hover(function(){
              $("#nav1").show();
          },function(){
            if(!cancel)
            $("#nav1").hide();
          });

        $("#menu2").click(function(){
        cancel = (cancel)?false: true;
        }); 


        // --------------------VIDEOS-----------------------------

        $('#lv_con2_1').hide();
        $('#lv_con2_2').hide();
        $('#lv_navi').hide();

        $("#mybutton1").click(function(){
            $('html,body').animate({scrollTop: 400}, 800);          
            $('#lv_con2_2').hide();         
            $('#lv_con2_1').show(1500, "swing");
            $('#lv_navi').show();
        });

        $("#mybutton2").click(function(){
            $('html,body').animate({scrollTop: 400}, 800);    
            $('#lv_con2_1').hide();
            $('#lv_con2_2').show(1500, "swing");
            $('#lv_navi').show();
        });

        $("#lv_navi").click(function(){
          $('#lv_con2_1').hide(2000, "swing");
          $('#lv_con2_2').hide(2000, "swing");
          $('#lv_navi').hide();
          $('html,body').animate({scrollTop: 0}, 2000);          

        });


         $(".linked").click(function(){
          alert ($($(this).children(":first")).text());
        });


         $(".game").hover(function(){
            $($(this).children(":first")).css("width", "170");
            $($(this).children(":first")).css("height", "220");      
            $($(this).children(".game_name")).css("background-color", "rgba( 0 , 0 , 0 ,0.9)");      
            $($(this).children(".game_name")).css("color", "yellow");          
            $($(this).children(".game_name")).css("width", "170");
            $($(this).children(".game_name")).css("height", "35");      
            $($(this).closest("div")).css("width", "170");      
            $($(this).closest("div")).css("height", "220");      

          }, function(){
             $($(this).children(":first")).css("width", "150");
            $($(this).children(":first")).css("height", "180"); 
            $($(this).children(".game_name")).css("background-color", "rgba( 0 , 0 , 0 ,0.5)");
            $($(this).children(".game_name")).css("color", "white");
            $($(this).children(".game_name")).css("width", "150");
             $($(this).children(".game_name")).css("height", "40");
           $($(this).closest("div")).css("width", "150");      
            $($(this).closest("div")).css("height", "200"); 
          });



        
        $("#showHeroes1").click(function(){
          $.get("showHeroes.php", {sendToPhp : 123}, function(result ,status ,xhr){
          $("#tableHeroes1").html(result);
          alert("Status: " + status )
          });      
        });

});



