<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>accounting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
          position: relative;
        }
        ul.nav-pills {
        top: 160px;
        position: fixed;
        }
        div.col-8 div {
          height: 500px;
        }
        body {
            background-color: rgb(200, 235, 195);
            background-image: url("1.jpg");
            background-repeat: no-repeat;
            background-position: 100% 85%;
            background-attachment: fixed;
        }

     </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["price"])) {
    $price = " ";
  } else {
    $price = test_input($_POST["price"]);
  }
  if (empty($_POST["option"])) {
    $option = " ";
  } else {
    $option = test_input($_POST["option"]);
  }
  if (empty($_POST["option1"])) {
    $option1 = " ";
  } else {
    $option1 = test_input($_POST["option1"]);
  }
  if (empty($_POST["option2"])) {
    $option2 = " ";
  } else {
    $option2 = test_input($_POST["option2"]);
  }
  if (empty($_POST["option3"])) {
    $option3 = " ";
  } else {
    $option3 = test_input($_POST["option3"]);
  }
  if (empty($_POST["option4"])) {
    $option4 = " ";
  } else {
    $option4 = test_input($_POST["option4"]);
  }
  if (empty($_POST["option5"])) {
    $option5 = " ";
  } else {
    $option5 = test_input($_POST["option5"]);
  }
#?????????
if (empty($_POST["comment2"])) {
    $comment2 = "";
  } else {
    $comment2 = test_input($_POST["comment2"]);
  }

  if (empty($_POST["price2"])) {
    $price2 = " ";
  } else {
    $price2 = test_input($_POST["price2"]);
  }
  if (empty($_POST["option2"])) {
    $option2 = " ";
  } else {
    $option2 = test_input($_POST["option2"]);
  }
  if (empty($_POST["option21"])) {
    $option21 = " ";
  } else {
    $option21 = test_input($_POST["option21"]);
  }
  if (empty($_POST["option22"])) {
    $option22 = " ";
  } else {
    $option22 = test_input($_POST["option22"]);
  }
  if (empty($_POST["option23"])) {
    $option23 = " ";
  } else {
    $option23 = test_input($_POST["option23"]);
  }
  if (empty($_POST["option24"])) {
    $option24 = " ";
  } else {
    $option24 = test_input($_POST["option24"]);
  }
  if (empty($_POST["option25"])) {
    $option25 = " ";
  } else {
    $option25 = test_input($_POST["option25"]);
  }
#?????????
if (empty($_POST["comment3"])) {
    $comment3 = "";
  } else {
    $comment3 = test_input($_POST["comment3"]);
  }

  if (empty($_POST["price3"])) {
    $price3 = " ";
  } else {
    $price3 = test_input($_POST["price3"]);
  }
  if (empty($_POST["option3"])) {
    $option3 = " ";
  } else {
    $option3 = test_input($_POST["option3"]);
  }
  if (empty($_POST["option31"])) {
    $option31 = " ";
  } else {
    $option31 = test_input($_POST["option31"]);
  }
  if (empty($_POST["option32"])) {
    $option32 = " ";
  } else {
    $option32 = test_input($_POST["option32"]);
  }
  if (empty($_POST["option33"])) {
    $option33 = " ";
  } else {
    $option33 = test_input($_POST["option33"]);
  }
  if (empty($_POST["option34"])) {
    $option34 = " ";
  } else {
    $option34 = test_input($_POST["option34"]);
  }
  if (empty($_POST["option35"])) {
    $option35 = " ";
  } else {
    $option35 = test_input($_POST["option35"]);
  }
#?????????
if (empty($_POST["comment4"])) {
    $comment4 = "";
  } else {
    $comment4 = test_input($_POST["comment4"]);
  }

  if (empty($_POST["price4"])) {
    $price4 = " ";
  } else {
    $price4 = test_input($_POST["price4"]);
  }
  if (empty($_POST["option4"])) {
    $option4 = " ";
  } else {
    $option4 = test_input($_POST["option4"]);
  }
  if (empty($_POST["option41"])) {
    $option41 = " ";
  } else {
    $option41 = test_input($_POST["option41"]);
  }
  if (empty($_POST["option42"])) {
    $option42 = " ";
  } else {
    $option42 = test_input($_POST["option42"]);
  }
  if (empty($_POST["option43"])) {
    $option43 = " ";
  } else {
    $option43 = test_input($_POST["option43"]);
  }
  if (empty($_POST["option44"])) {
    $option44 = " ";
  } else {
    $option44 = test_input($_POST["option44"]);
  }
  if (empty($_POST["option45"])) {
    $option45 = " ";
  } else {
    $option45 = test_input($_POST["option45"]);
  }
#?????????
if (empty($_POST["comment5"])) {
    $comment5 = "";
  } else {
    $comment5 = test_input($_POST["comment5"]);
  }

  if (empty($_POST["price5"])) {
    $price5 = " ";
  } else {
    $price5 = test_input($_POST["price5"]);
  }
  if (empty($_POST["option5"])) {
    $option5 = " ";
  } else {
    $option5 = test_input($_POST["option5"]);
  }
  if (empty($_POST["option51"])) {
    $option51 = " ";
  } else {
    $option51 = test_input($_POST["option51"]);
  }
  if (empty($_POST["option52"])) {
    $option52 = " ";
  } else {
    $option52 = test_input($_POST["option52"]);
  }
  if (empty($_POST["option53"])) {
    $option53 = " ";
  } else {
    $option53 = test_input($_POST["option53"]);
  }
  if (empty($_POST["option54"])) {
    $option54 = " ";
  } else {
    $option54 = test_input($_POST["option54"]);
  }
  if (empty($_POST["option55"])) {
    $option55 = " ";
  } else {
    $option55 = test_input($_POST["option55"]);
  }
#?????????
if (empty($_POST["comment6"])) {
    $comment6 = "";
  } else {
    $comment6 = test_input($_POST["comment6"]);
  }

  if (empty($_POST["price6"])) {
    $price6 = " ";
  } else {
    $price6 = test_input($_POST["price6"]);
  }
  if (empty($_POST["option6"])) {
    $option6 = " ";
  } else {
    $option6 = test_input($_POST["option6"]);
  }
  if (empty($_POST["option61"])) {
    $option61 = " ";
  } else {
    $option61 = test_input($_POST["option61"]);
  }
  if (empty($_POST["option62"])) {
    $option62 = " ";
  } else {
    $option62 = test_input($_POST["option62"]);
  }
  if (empty($_POST["option63"])) {
    $option63 = " ";
  } else {
    $option63 = test_input($_POST["option63"]);
  }
  if (empty($_POST["option64"])) {
    $option64 = " ";
  } else {
    $option64 = test_input($_POST["option64"]);
  }
  if (empty($_POST["option65"])) {
    $option65 = " ";
  } else {
    $option65 = test_input($_POST["option65"]);
  }
#?????????
if (empty($_POST["comment7"])) {
    $comment7 = "";
  } else {
    $comment7 = test_input($_POST["comment7"]);
  }

  if (empty($_POST["price7"])) {
    $price7 = " ";
  } else {
    $price7 = test_input($_POST["price7"]);
  }
  if (empty($_POST["option7"])) {
    $option7 = " ";
  } else {
    $option7 = test_input($_POST["option7"]);
  }
  if (empty($_POST["option71"])) {
    $option71 = " ";
  } else {
    $option71 = test_input($_POST["option71"]);
  }
  if (empty($_POST["option72"])) {
    $option72 = " ";
  } else {
    $option72 = test_input($_POST["option72"]);
  }
  if (empty($_POST["option73"])) {
    $option73 = " ";
  } else {
    $option73 = test_input($_POST["option73"]);
  }
  if (empty($_POST["option74"])) {
    $option74 = " ";
  } else {
    $option74 = test_input($_POST["option74"]);
  }
  if (empty($_POST["option75"])) {
    $option75 = " ";
  } else {
    $option75 = test_input($_POST["option75"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="jumbotron p-4 my-0 text-center bg-info text-white">
        <h1>???  ???  ???  ???  ???</h1>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">?????????</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../web_finl/??????.php">?????????</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../web_finl/?????????.php">?????????</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../web_finl/?????????.php">?????????</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../web_finl/?????????.php">?????????</a>
            </li>     
          </ul>
        </div>  
    </nav>
      <div class="container-fluid">
        <div class="row">
          <nav class="col-sm-2 col-5" id="myScrollspy">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#section1"><h3>?????????</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#section2"><h3>?????????</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section3"><h3>?????????</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section4"><h3>?????????</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section5"><h3>?????????</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section6"><h3>?????????</h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section7"><h3>?????????</h3></a>
              </li>
            </ul>
          </nav>

          <div class="col-sm-6 col-8 form-group ">
            <div id="section1" >    
              <h1 style="color:Tomato;">?????????</h1>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
              <label for="comment"><b>???????????????:</b></label>
              <textarea class="form-control" rows="5"  placeholder="??????" id="comment"name="comment"><?php echo $comment;?></textarea> 
            <p><b>??????:</b></p>
            <label class="form-check-label form-check-inline">
            <input type="checkbox" class="form-check-input"  name="option" value="???"<?php if (isset($option) && $option=="???") echo "checked";?>>???
            </label>  
            <label class="form-check-label form-check-inline">
            <input type="checkbox" class="form-check-input"name="option1" value="???"<?php if (isset($option1) && $option1=="???") echo "checked";?>>???
            </label>
            <label class="form-check-label form-check-inline">
            <input type="checkbox" class="form-check-input" name="option2" value="???"<?php if (isset($option2) && $option2=="???") echo "checked";?>>???
            </label>
            <label class="form-check-label form-check-inline">
            <input type="checkbox" class="form-check-input" name="option3" value="???"<?php if (isset($option3) && $option3=="???") echo "checked";?>>???
            </label> 
            <label class="form-check-label form-check-inline">
            <input type="checkbox" class="form-check-input" name="option4" value="???"<?php if (isset($option4) && $option4=="???") echo "checked";?>>???
            </label> 
            <label class="form-check-label form-check-inline">
            <input type="checkbox" class="form-check-input" name="option5" value="???"<?php if (isset($option5) && $option5=="???") echo "checked";?>>???
            </label> 
            <p></p>
              <label for="price"><b>????????????:</b></label>
              <input type="text" class="form-control" placeholder="??????" id="price"name="price" value="<?php echo $price;?>">
              <button type="submit" class="btn btn-primary"style="position:relative; left:280px; top: 20px;">??????</button>
            </div>
<!--        <?php    
            echo "??????";
            echo $comment;
            echo "<br>";
            echo $price;
           ?>   -->

            <div id="section2" >    
                <h1 style="color:Tomato;">?????????</h1>

                <label for="comment"><b>???????????????:</b></label>
                <textarea class="form-control" rows="5"  placeholder="??????" id="comment"name="comment2"><?php echo $comment2;?></textarea>
                <p><b>??????:</b></p>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"  name="option2" value="???"<?php if (isset($option2) && $option2=="???") echo "checked";?>>???
                </label>  
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"name="option21" value="???"<?php if (isset($option21) && $option21=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option22" value="???"<?php if (isset($option22) && $option22=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option23" value="???"<?php if (isset($option23) && $option23=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option24" value="???"<?php if (isset($option24) && $option24=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option25" value="???"<?php if (isset($option25) && $option25=="???") echo "checked";?>>???
                </label> 
                <p></p>
                <label for="price"><b>????????????:</b></label>
                <input type="text" class="form-control" placeholder="??????" id="price"name="price2" value="<?php echo $price2;?>">
                <button type="submit" class="btn btn-primary"style="position:relative; left:280px; top: 20px; ">??????</button>
              </div> 


              <div id="section3" >    
                <h1 style="color:Tomato;">?????????</h1>

                <label for="comment"><b>???????????????:</b></label>
                <textarea class="form-control" rows="5"  placeholder="??????" id="comment"name="comment3"><?php echo $comment3;?></textarea>
                <p><b>??????:</b></p>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"  name="option3" value="???"<?php if (isset($option3) && $option3=="???") echo "checked";?>>???
                </label>  
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"name="option31" value="???"<?php if (isset($option31) && $option31=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option32" value="???"<?php if (isset($option32) && $option32=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option33" value="???"<?php if (isset($option33) && $option33=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option34" value="???"<?php if (isset($option34) && $option34=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option35" value="???"<?php if (isset($option35) && $option35=="???") echo "checked";?>>???
                </label> 
                <p></p>
                <label for="price"><b>????????????:</b></label>
                <input type="text" class="form-control" placeholder="??????" id="price"name="price3" value="<?php echo $price3;?>">
                <button type="submit" class="btn btn-primary"style="position:relative; left:280px; top: 20px; ">??????</button>
              </div>


              <div id="section4" >    
                <h1 style="color:Tomato;">?????????</h1>
                <label for="comment"><b>???????????????:</b></label>
                <textarea class="form-control" rows="5"  placeholder="??????" id="comment"name="comment4"><?php echo $comment4;?></textarea>
                <p><b>??????:</b></p>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"  name="option4" value="???"<?php if (isset($option4) && $option4=="???") echo "checked";?>>???
                </label>  
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"name="option41" value="???"<?php if (isset($option41) && $option41=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option42" value="???"<?php if (isset($option42) && $option42=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option43" value="???"<?php if (isset($option43) && $option43=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option44" value="???"<?php if (isset($option44) && $option44=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option45" value="???"<?php if (isset($option45) && $option45=="???") echo "checked";?>>???
                </label> 
                <p></p>
                <label for="price"><b>????????????:</b></label>
                <input type="text" class="form-control" placeholder="??????" id="price"name="price4" value="<?php echo $price4;?>">
                <button type="submit" class="btn btn-primary"style="position:relative; left:280px; top: 20px; ">??????</button>
              </div>


              <div id="section5" >    
                <h1 style="color:Tomato;">?????????</h1>

                <label for="comment"><b>???????????????:</b></label>
                <textarea class="form-control" rows="5"  placeholder="??????" id="comment"name="comment5"><?php echo $comment5;?></textarea>
                <p><b>??????:</b></p>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"  name="option5" value="???"<?php if (isset($option5) && $option5=="???") echo "checked";?>>???
                </label>  
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"name="option51" value="???"<?php if (isset($option51) && $option51=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option52" value="???"<?php if (isset($option52) && $option52=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option53" value="???"<?php if (isset($option53) && $option53=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option54" value="???"<?php if (isset($option54) && $option54=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option55" value="???"<?php if (isset($option55) && $option55=="???") echo "checked";?>>???
                </label> 
                <p></p>
                <label for="price"><b>????????????:</b></label>
                <input type="text" class="form-control" placeholder="??????" id="price"name="price5" value="<?php echo $price5;?>">
                <button type="submit" class="btn btn-primary"style="position:relative; left:280px; top: 20px; ">??????</button>
              </div>


              <div id="section6" >    
                <h1 style="color:Tomato;">?????????</h1>

                <label for="comment"><b>???????????????:</b></label>
                <textarea class="form-control" rows="5"  placeholder="??????" id="comment"name="comment6"><?php echo $comment6;?></textarea>
                <p><b>??????:</b></p>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"  name="option6" value="???"<?php if (isset($option6) && $option6=="???") echo "checked";?>>???
                </label>  
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"name="option61" value="???"<?php if (isset($option61) && $option61=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option62" value="???"<?php if (isset($option62) && $option62=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option63" value="???"<?php if (isset($option63) && $option63=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option64" value="???"<?php if (isset($option64) && $option64=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option65" value="???"<?php if (isset($option65) && $option65=="???") echo "checked";?>>???
                </label> 
                <p></p>
                <label for="price"><b>????????????:</b></label>
                <input type="text" class="form-control" placeholder="??????" id="price"name="price6" value="<?php echo $price6;?>">
                <button type="submit" class="btn btn-primary"style="position:relative; left:280px; top: 20px; ">??????</button>
              </div>


              <div id="section7" >    
                <h1 style="color:Tomato;">?????????</h1>
                <label for="comment"><b>???????????????:</b></label>
                <textarea class="form-control" rows="5"  placeholder="??????" id="comment"name="comment7"><?php echo $comment7;?></textarea>
                <p><b>??????:</b></p>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"  name="option7" value="???"<?php if (isset($option7) && $option7=="???") echo "checked";?>>???
                </label>  
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input"name="option71" value="???"<?php if (isset($option71) && $option71=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option72" value="???"<?php if (isset($option72) && $option72=="???") echo "checked";?>>???
                </label>
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option73" value="???"<?php if (isset($option73) && $option73=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option74" value="???"<?php if (isset($option74) && $option74=="???") echo "checked";?>>???
                </label> 
                <label class="form-check-label form-check-inline">
                <input type="checkbox" class="form-check-input" name="option75" value="???"<?php if (isset($option75) && $option75=="???") echo "checked";?>>???
                </label> 
                <p></p>
                <label for="price"><b>????????????:</b></label>
                <input type="text" class="form-control" placeholder="??????" id="price"name="price7" value="<?php echo $price7;?>">
                <button type="submit" class="btn btn-primary"style="position:relative; left:280px; top: 20px; ">??????</button>
              </div>
              </form>                        
          </div>
        </div>
      </div>    
</body>
</html>
