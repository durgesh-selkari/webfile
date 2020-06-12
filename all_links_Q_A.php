<!DOCTYPE html>
<html lang="en">

<head>
    <title style="color: green;">Next Topper</title>
    <link rel="shortcut icon" href="logo3.png" type="image/x-icon" /> 
</head>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>




  <head>
    <style type="text/css">
        h5>a:hover{
    color: gray;
    font-weight: solid;
   }
   h5>a{
    color: gray;
   }
  .recommended_posts:hover{
    color: gray;
    font-weight: normal;
   }
   .recommended_posts{
    color: green;
    </style>
    <style>
    body {
        font: 24px Helvetica;
        background: #000000;
    }

    #main {
        min-height: 500px;
        margin: 0px;
        padding: 0px;
        display: flex;
        flex-flow: row;
    }
 
    #main > article {
        margin: 4px;
        padding: 5px;
        border: 0px solid #cccc33;
        border-radius: 7pt;
        background: white;
        flex: 3 1 60%;
        order: 2;
        
    }

     #main nav {

        margin: 4px;
        padding: 5px;
        border: 0px solid #888888;
       border-radius: 7pt;
        background: ;
        flex: 1 6 20%;
        order: 1;
        
    }
  
    #main > aside {
        margin: 4px;
        padding: 5px;
        border: 0px solid #888888;
        border-radius: 7pt;
        background: ;
        flex: 1 6 20%;
        order: 3;
        
    }
 
    header {
        display: block;
        margin: 4px;
        padding: 5px;
        height: auto;
        border: 1px solid #eebb55;
        border-radius: 7pt;
        background: green;
        
    }
    footer{
        display: block;
        margin: ;
        padding: ;
        height: 0px;
        border: ;
        border-radius: ;
        background: white;
    }
 
    /* Too narrow to support three columns */
    @media all and (max-width: 640px) {
        #main, #page {
            flex-direction: column;
        }

        #main > article, #main > nav, #main > aside {
        /* Return them to document order */
            order: 1 2;
        }
  
        #main > nav, #main > aside, header, footer {
            min-height: auto;
            max-height: auto;
            }

     
}
    </style>
    <style type="text/css">
        #div1{
             box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
        h2>p{
            color: gray;
            font-family: verdana;
            font-size: 1.65rem;
        }
    </style>
  </head>
  <body style="background-color: white" oncopy="return false" oncut="return false" onpaste="return false">
    <header>
    </header>
    <?php include 'header.php';?>

    
    <div id='main'>
        
      <article>
        
        <div style="background-color: white;width:100%;height:auto;" id="div1" class="container p-3 my-3 border">
  

  <div style="background-color: ;height: auto;padding: 10px;">  
    <h2 style="color: black;text-align: ;font-weight: normal;font-family:Nirmala UI"><p></p></h2>

      <p style="color:gray;font-weight:;font-family: verdana;line-height: 30px;font-size: 15px;" class="allverb">
          
        <h2 style="color: gray;text-align: center;">You should have known</h2><hr>
       
<a href="all_verb_web_page.php" class="recommended_posts" >All_helping/auxiliary_Verbs_in_English</a><br><br>
<a href="all_verb_web_page.php" class="recommended_posts" >All_helping/auxiliary_Verbs_in_English</a><br><br>
<a href="all_verb_web_page.php" class="recommended_posts" >All_helping/auxiliary_Verbs_in_English</a><br><br>
<a href="all_verb_web_page.php" class="recommended_posts" >All_helping/auxiliary_Verbs_in_English</a><br><br>
<a href="all_verb_web_page.php" class="recommended_posts" >All_helping/auxiliary_Verbs_in_English</a><br><br>
<a href="all_verb_web_page.php" class="recommended_posts" >All_helping/auxiliary_Verbs_in_English</a><br><br>

















      </p>

     
  </div>    
  
</div>
            
            
       
        

                
               
    </article>
        

    <nav >
         
    </nav>
    
    <aside>
          
    </aside>
      
</div>

<footer>
    <?php include 'footer.php';?>
</footer>
</body>
</html>