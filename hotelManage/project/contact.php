<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    div{
      width: 540px;
      text-align: center;
      border-radius: 5px;
      background-color: #edf0f2;
      padding: 30px;
      margin: auto;
      margin-top: 80px;
    }
    input[type=text], textarea {
      width: 50%;
      padding: 10px 28px;
      margin: 8px;
      display: inline-block;
      border: 1px solid ;
      box-sizing: border-box;
      font-family: Tahoma, Geneva, sans-serif;
    }
    button{
      background-color: #008CBA;
      border: none;
      color: white;
      padding: 10px 25px;             /* top 10px and sides 25px */
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
      }
  </style>
  </head>
  <body style="background-image:url(images/conta1.png)">
    <div>
      <p style="font-family: Tahoma, Geneva, sans-serif;">SEND E-MAIL</p>
      <form class="contact-form" action="cont.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea><br>
        <button type="submit" name="submit">SEND MAIL</button>
      </form>
    </div>
  </body>
</html>
