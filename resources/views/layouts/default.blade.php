<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../public/css/reset.css">
  <style>
    body{
      font-size:16px;
    }
    .back{
      width:100vw;
      height:100vh;
      background-color:blue;
      position:relative;
    }
    .content{
      position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      background-color:white;
      border-radius:10px;
      width:50%;
      padding:20px;
    }
    #create{
      display:flex;
      justify-content:space-between;
      flex-wrap:no-wrap;
    }
    #create>input{
      border:solid 1px #949995;
      border-radius:5px;
      width:85%;
    }
    button{
      border-radius:5px;
      background-color:white;
    }
    #create>button{
      border:solid 2px purple;
      color:purple;
    }
    .update-button{
      border:solid 2px orange;
      color:orange;
    }
    .delete-button{
      border:solid 2px blue;
      color:blue;
    }
    table{
      width:100%;
    }
    tr{
      text-align:center;
    }
    .create_at{
      width:40%;
    }
    task{
      width:40%;
    }
    update_at{
      width:10%;
    }
    delete{
      width:10%;
    }
    #update, #delete{
      display:inline;
    }
  </style>
</head>
<body>
  <div class="back">
    <div class="content">
      @yield('content')
    </div>
  </div>
</body>
</html>