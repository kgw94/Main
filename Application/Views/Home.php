<!DOCTYPE html>
<html lang="en">
<head> 
  <title><?php  echo($data['title']); ?></title>
</head>
<body>
 <style type="text/css">
     *{ margin:0px; padding:0px;box-sizing:border-box; }
     body
     {
        background-color:#ccc; 
     }
     #container
     {    
        width:80%;
        margin:0 auto;
        background-color:#fff;
        height:500px;
        
     }
     #container h1{
        color:#336699;
        text-decoration:underline;
     }
     #container content
     {
        display:flex;
        flex-direction:column;
        align-items:center;
        padding:25px;
        height:420px;
     }
     #footer
     {
          background-color:#ccc;
          color:#444;
          display:block;
          height:80px;
          text-align:center;
          padding-top:15px;
     }
 </style>
  <div id="container">
     <content>
        <h1> <?php echo($data['app']); ?> </h1>
        <br/>
        <br/>
        <p>
         your successfully installed <strong><?php echo($data['app']); ?></strong>
         to continue edit the Application configuration file <br/> at<u><b> <?php echo(CONFIG_FILE); ?></b></u><br/>
         and change the default Controllers and your prefered database settings.
       </p>
     </content>
     <div id="footer">
        <p><?php echo($data['app'].'&nbsp;copyright&nbsp;'.date('Y').'&nbsp;all rights reserved'); ?></php>
     </div>
  </div>
</body>
</html>