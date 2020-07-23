<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="views/css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Đăng nhập</header>
    <form action="" method="post">
        <div class="input-field">
          <input type="text" name="user" required>
          <label>Tên tài khoản</label>
        </div>
        <div class="input-field">
          <input class="pswrd" name="pass" type="password" required>
          <span class="show">Hiện</span>
          <label>Mật khẩu</label>
        </div>
        <div class="button">
          <div class="inner">
        </div>
          <button name="submit">LOGIN</button>
      </div>
    </form>


</div>
<script>
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
          show.style.color = "#1DA1F2";
          show.textContent = "Ẩn";
        }else{
          input.type = "password";
          show.textContent = "Hiện";
          show.style.color = "#111";
        }
      }
    </script>

  </body>
</html>
