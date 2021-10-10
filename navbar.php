<!-- navbar --> 
      <!DOCTYPE html>
      <html>
      <head>
      <link rel="icon" href="https://img.icons8.com/external-photo3ideastudio-flat-photo3ideastudio/50/000000/external-bank-building-photo3ideastudio-flat-photo3ideastudio.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <style type="text/css">

        body{
          font-family: 'Montserrat', sans-serif;
          margin-top: 15px;
          color: #f5f5f5;
        }
       
          .btn {
            transition: 0.5s;
            .button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
  color:#f5f5f5;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
  color:#f5f5f5;
}
                }
            
            .df:hover {
        
        color:#f5f5f5;
        font-size: 16px;
    background-color: #343434;
background-image: linear-gradient(315deg, #595959 0%, #6e6e6e 74%);

}
.nav-item{
  margin : 2px;
}
.ul li a:hover{
  color: white;
  background-color: #343434;
  background-image: linear-gradient(315deg, #595959 0%, #6e6e6e 74%);
    }
    

        </style>
      </head>
      <body>
      
      <nav  class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="img/logo3.png"></a>
      
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="index.php" >Home</a>
              </li>
              
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="aboutme.php">About Me</a>
              </li>
              <li class="nav-item">
                <a class="btn df" class="nav-link" href="contact.php" >Contact Me</a>
              </li>
          </div>
       </nav>
     </body>
     </html>
