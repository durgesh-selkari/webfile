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
    #div1{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
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
        order: 1;
        
    }

     #main nav {

        margin: 4px;
        padding: 5px;
        border: 0px solid #888888;
       border-radius: 7pt;
        background: ;
        flex: 1 6 20%;
        order: 2;
        
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

        #main > nav {
        /* Return them to document order */
           
           order:1;
        }

         #main > aside {
        /* Return them to document order */
           
           order: 3;
        }

         #main > article {
        /* Return them to document order */
           
           order: 2;
        }





         #main > nav, #main > aside, header, footer {
            min-height: auto;
            max-height: auto;
            }

     
}
    </style>
    <style type="text/css">
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
        
        
            
            
       <?php include 'home_Q_A.php';?> 
        

                
               
        </article>
        

    <nav >
        <?php include 'home_latest_jobs.php';?> 
           
    </nav>
    
    <aside>
         
        <?php include 'home_recommended.php';?> 
    </aside>
      
</div>

<footer>
    <?php include 'footer.php';?>
</footer>
</body>
</html>