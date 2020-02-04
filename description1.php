

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="5.2.css">
  </head>
  <body>


</p><div class="window">
  <div class="overlay"></div>
  <div class="box header">

      <img src="IMAGES/a.jpeg" alt="" />
    <h2>COACHING INSTITUTE #1</h2>
    <h4>English</h4>

    <h4>Greater Noida, India</h4>
  </div>
  <div class="box footer">





    <div align="center" style=" background: #000; padding:50px;">
      <i class= "fa fa-star fa-2x" data-index="0"></i>
      <i class= "fa fa-star fa-2x" data-index="1"></i>
      <i class= "fa fa-star fa-2x" data-index="2"></i>
      <i class= "fa fa-star fa-2x"  data-index="3"></i>
      <i class= "fa fa-star fa-2x"  data-index="4"></i>

<center>
        <button style="color:black;"><a href="Teachers.html">Teachers Details</a></button>
      </center>
      </div>




  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
  var ratedIndex=-1, uID=0;
$(document).ready(function(){
  if (localStorage.getItem('ratedIndex') != null)
  setStars(parseInt(localStorage.getItem('ratedIndex')));


    $('.fa-star').on('click',function(){
     ratedIndex = parseInt($(this).data('index'));
     localStorage.setItem('ratedIndex',ratedIndex);
     saveTotheDB();

   });
   $('.fa-star').mouseover(function(){
     resetStarColor();
    var currentIndex= parseInt($(this).data('index'));
    setStars(currentIndex);
  });

  $('.fa-star').mouseleave(function(){
      resetStarColor();
      if(ratedIndex !=-1)
      setStars(ratedIndex);


    });
  });

  function setStars(max){
    for(var i=0; i<=max; i++)
    $('.fa-star:eq('+i+')').css('color','green');

  }
function resetStarColor(){
  $('.fa-star').css('color','white');

}

  </script>
    </body>

</html>
