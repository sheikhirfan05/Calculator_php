<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator in PHP</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        font-size: 62.5%;
    }
    body{
        background: #27C4B6;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container{
        background: #3D3C3E;
        width: 700px;
        height: 350px;
        border-radius: 20px;
        box-shadow: 0 20px 20px rgba(0,0,0,.4);
        display: flex;
        justify-content: space-between;
        position: relative;
    }
    .txt{
        height: 100%;
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .box{
        height: 80px;
        border-left: 3.5px solid rgba(39, 196, 182,.7);
        display: flex;
        align-items: center;
    }
    .box h2{
        color: #27C4B6;
        font-size: 3rem;
        font-family: mono-space;
        margin-left: 1.3rem;
        font-weight: bold;
    }
    .form{
        height: 100%;
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    .form form{
        margin-bottom: 5rem;
        margin-right: 7rem;
    }
    .input_num{
        color: #fff;
        background: transparent;
        outline: none;
        border: none;
        border-bottom: 1px solid rgba(225,225,225,.3);
        text-align: center;
        font-size: 1.7rem;
        padding: .7rem;
        margin-bottom: 1rem;
        font-weight: bold;
        font-family: sans-serif;
        width: 100%;
    }
    .form input::placeholder{
        color: #fff;
        font-family: sans-serif;
    }
    .select-style select{
        width: 100%;
        padding: .4rem;
        margin-top: 1rem;
        color: #000;
        font-weight: bold;
        font-family: sans-serif;
    }
    .button{
        width: 8rem;
        height: 3.5rem;
        background: #27C4B6;
        border-radius: .5rem;
        color: #fff;
        border: none;
        outline: none;
        font-size: 1.4rem;
        font-weight: bold;
        margin-top: 2rem;
        padding: .5rem;
        cursor: pointer;
        text-transform: uppercase;
    }
    .result{
        width: 100%;
        position: absolute;
        bottom: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .result_box{
        width: 100%;
    }
    .result p{
        font-size: 1.8rem;
        color: #fff;
        font-family: sans-serif;
        font-weight: bold;
    }
</style>
<body>
    <div class="container">
        <div class="txt">
        <div class="box">
        <h2>PHP<br>CALCULATOR</h2>
        </div>
        </div>
        <div class="form">
        <form method="POST">
            <div class="numbers">
                <input type="text" placeholder="Enter Number" class="input_num" name="num1">
            </div>
            <div class="numbers">
                <input type="text" placeholder="Enter Number" class="input_num" name="num2">
            </div>

            <div class="select-style">
                <select name="operation">
                    <option value="add">ADD</option>
                    <option value="sub">SUB</option>
                    <option value="mult">MULT</option>
                    <option value="div">DIV</option>
                </select>
            </div>

            <div>
                <input type="submit" name="submit" value="submit" class="button">
            </div>
        </form>
        </div>
        <div class="result">
            <div class="result_box">
            <p>
              <?php
                if(isset($_POST['submit'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    // echo "{$num1 }  {$num2}";
                    $operation = $_POST['operation'];

                    switch ($operation){
                        case "add": $sum = $num1 + $num2;
                            echo "The addition of two numbers is $sum.";
                        break;
                        case "sub": $sub = $num1 - $num2;
                            echo "The subtraction of two numbers is $sub.";
                        break;
                        case "mult": $mult = $num1 * $num2;
                            echo "The multiplication of two numbers is $mult.";
                        break;
                        case "div": $div = $num1 / $num2;
                            echo "The division of two numbers is $div.";
                        break;
                        default:
                            echo "Please input a valid number.";
                    }
                }
              ?>
            </p>
            </div>
        </div>
    </div>
</body>
</html>