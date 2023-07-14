<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feed.css">
</head>
<body>
    <div id="form-div">
        <form class="form" id="form1" action="inser.php" method="POST">
          
          <p class="name">
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" required />
          </p>
          
          <p class="email">
            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" required />
          </p>
          
          <p class="text">
            <textarea name="feed" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment" required></textarea>
          </p>
          
          
          <div class="submit">
            <input type="submit" id="button-blue"/>
            <div class="ease"></div>
          </div>
        </form>
      </div>
</body>
</html>