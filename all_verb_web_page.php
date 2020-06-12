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
            order: 0;
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
  <body style="background-color: white">
    <header>
    </header>
    <?php include 'header.php';?>
    
    <div id='main'>
        
      <article>
        
        
        
        <?php include 'All_verbs/is_am_are.htm';?>
        <?php include 'All_verbs/was_were.htm';?>
        <?php include 'All_verbs/has_have.htm';?>
        <?php include 'All_verbs/had.htm';?>
        <?php include 'All_verbs/do_does.htm';?>
        <?php include 'All_verbs/did.htm';?>
        <?php include 'All_verbs/will.htm';?>
        <?php include 'All_verbs/will_be.htm';?>
        <?php include 'All_verbs/will_have.htm';?>
        <?php include 'All_verbs/should_must.htm';?>
        <?php include 'All_verbs/should_be.htm';?>
        <?php include 'All_verbs/should_have.htm';?>
        <?php include 'All_verbs/supposed_to_is_to.htm';?>
        <?php include 'All_verbs/has_to.htm';?>
        <?php include 'All_verbs/was_were_to.htm';?>
        <?php include 'All_verbs/had_to.htm';?>
        <?php include 'All_verbs/will_have_to.htm';?>
        <?php include 'All_verbs/would_have_to.htm';?>
        <?php include 'All_verbs/must_be.htm';?>
        <?php include 'All_verbs/must_have.htm';?>
        <?php include 'All_verbs/can_can_be.htm';?>
        <?php include 'All_verbs/could_couldbe_couldhave.htm';?>
        <?php include 'All_verbs/would_wouldbe_wouldhave.htm';?>
        <?php include 'All_verbs/may_might_all_concepts.htm';?>
        <?php include 'All_verbs/all_have_had.htm';?>
        <?php include 'All_verbs/has_have_been.htm';?>
        <?php include 'All_verbs/should_have_been.htm';?>
        <?php include 'All_verbs/must_have_been.htm';?>
        <?php include 'All_verbs/Could_might_have_been.htm';?>
        <?php include 'All_verbs/would_have_been.htm';?>
        

            <hr>
           
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