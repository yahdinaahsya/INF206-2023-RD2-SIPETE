<!DOCTYPE html>
<html>
  <head>
    <title>Request Success</title>
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        text-align: center;
      }
      
      .checkmark {
        display: inline-block;
        height: 88px;
        width: 88px;
        border-radius: 60%;
        background-color: #1AB00C;
        margin-top: 270px;
      }
      
      .checkmark::before {
        content: "";
        display: block;
        height: 50px;
        width: 25px;
        border-bottom: 15px solid white;
        border-right: 15px solid white;
        transform: rotate(45deg);
        margin-left: 22px;
        margin-top: 5px;
      }
      
      h1 {
        color: #000000;
        margin-top: 50px;
      }
      
      p {
        font-size: 24px;
        margin-top: 20px;
        color: #000000;
      }
    </style>
  </head>
  <body class="bg-gray-200 font-sans text-center">
    <div class="checkmark bg-green-500 h-32 w-32 rounded-full inline-block mt-36"></div>
    <h1 class="text-3xl font-bold mt-8">Request Success!!!</h1>
    <p class="text-lg font-semibold mt-6">Data Akan Diproses</p>
  </body>
</html>

