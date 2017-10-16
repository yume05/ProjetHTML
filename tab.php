<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFC 1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <script type="text/javascript">
   $('.breadcrumb-counter-nav-item').click(function () {
  $('.breadcrumb-counter-nav-item').removeClass('current');
  $(this).addClass('current');
});
        //<!--

function mafonction(){
   console.log(this.getAttribute('id'));
  //var i = document.getElementById(this).class = 'is-active';
  //document.getElementById(this).style.display = none;
}

function load(){
  var tab = document.getElementById("tab");
  var liens = document.getElementById("tab").getElementsByTagName("a");
//console.log(liens);
for(var i= 0; i < liens.length; i++)
{
     // var id = liens[i].getAttribute('id');
     //console.log(id);
     liens[i].addEventListener("click", mafonction, false);
}
  //addEventListener("click", mafonction, false );

} 
    
        //-->
</script>
<body onload="load();">

<div class="grid-container">
   <div class="top-bar">
      <div class="top-bar-left">
       <ul class="menu text-center">
         <li><input type="search" placeholder="Search"></li>
         <li><button type="button" class="button">Go</button></li>
      </ul>
      <br>
      <ul class="menu text-center">
         <li><button type="button" class="button">Advanced</button></li>
       </ul>
       <hr>
       <nav aria-label="You are here:" role="navigation">
        <ul class="breadcrumbs">
          <li><a href="#">Home</a></li>
          <li><a href="#">CAT1</a></li>
          <li><a href="#">SSCAT2</a></li>
          <li>
            <span class="show-for-sr">Current: </span> RFC
          </li>
        </ul>
      </nav>

     </div>
   </div>
   <br>
  <div class="row">
  <div class="columns large">
    <ul class="tabs" id="tab">
      <li class="tabs-title is-active"><a href="#" id="tab_1" aria-selected="true">RFC 1</a></li>
      <li class="tabs-title"><a href="#" id="tab_2">RFC 2</a></li>
      <li class="tabs-title"><a href="#" id="tab_3">RFC 3</a></li>
      <li class="tabs-title"><a href="#" id="tab_4">RFC 4</a></li>
      <li class="tabs-title"><a href="#" id="tab_5">RFC 5</a></li>
      <li class="tabs-title"><a href="#" id="tab_6">RFC 6</a></li>
    </ul>
    <div class="tabs-content callout " data-tabs-content="example-tabs">
      <div class="tabs-panel is-active large  callout" id="content_1">
         <!--<div class="columns callout text-justify">-->
                  <?php
                        include './liste1.php';
                    ?>
         </div>
         <div class="tabs-panel large callout" id="content_2">
               <?php

                     include './liste2.php';
               ?>
         </div>
      </div>
   </div>
</div>
</div>


</body>

</html>


