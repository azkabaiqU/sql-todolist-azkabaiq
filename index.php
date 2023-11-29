<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>

    <title>todotest</title>
    <style>
        body{
            background-color: #E5E6E1;
        }
        * {
            margin: 0;
            padding: 0;
        }

        .area-nav {
            width: 100vw;
            height: 120px;
            justify-content: center;
            align-items: center;

            display: flex;


            position: fixed;
            z-index: 2;
            top: 0;


        }

        .nav {
            width: 40vw;

            background-color: #DEB674;
            border-radius: 50px;


            min-width: 300px;
        }


        .input-group {
            width: 100%;
            margin-top: 25px;
            margin-bottom: 25px;


            /* background-color: #b1c564; */
            justify-content: center;
            text-align: center;
            display: flex;

        }

        .input-group input {
            width: 30vw;
            height: 20px;
            padding: 15px;
            border-radius: 100px;
            border: none;
            background-color: #E5E6E1;
            font-size: 20px;

            min-width: 180px;
        }

        .input-group button {
            width: 50px;
            height: 50px;
            border-radius: 100px;
            border: none;
            background-color: #000000;
            margin-left: 10px;
            color: #E5E6E1;
            min-width: 50px;
        }

        /* content ---------------------------------------- */
        .container {
            width: 100vw;
            
            background-color: #E5E6E1;

            justify-content: center;
            display: flex;
            flex-wrap: wrap;



        }

        .content {
            width: 80vw;
            position: relative;
            
            display:flex;
            flex-wrap:wrap;
           
            /* order: 1; */
           align-content: flex-start;
            margin: 0;
            padding: 0;

            
           
            
            justify-content: center;
            align-items:start;
            /* background-color: #deb574a9; */
            min-width: 330px;

            
        }

        .card {
            /* width: 300px; */
            position: relative;

            /* height: 100px; */
            /* border-radius: 40px;
            background-color: #74de97;
            padding: 5px;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: list-item;

            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 40px; */

            
            transition: transform 0.3s;

            list-style: none;

            width: 280px;
            height: auto;
            max-width: 280px;
            padding: 20px;
            background-color: #91CBC9;
            border-radius: 50px;
            margin: 10px;

            margin-left: 15px;
            margin-right: 15px;

            margin-bottom: 15px;

            top: 0;



            align-items: center;
            justify-content: center;




        }

        .card-list {
            width: 300px;
            /* max-width: 300px; */

            /* min-height: 130px; */
            /* background-color: aqua; */
        }

        .card-list p {
            font-family: Bebas Neue;
            font-size: 40px;
            color: #577A79;
            /* margin-bottom: 10px; */
            /* background-color: aqua; */
        }

        .area-card-deleted {
            width: 280px;
            height: 100px;
            /* background-color: #DEB674; */

            justify-content: flex-end;
            align-items: end;
            display: flex;

        }

        .card-delete-cek {
            width: 170px;
            height: 80px;
            background-color: #E5E6E1;
            border-radius: 100px;
            justify-content: center;
            text-align: center;
            display: flex;



        }

        .btn-delete,
        .btn-check {
            width: 60px;
            height: 60px;
            border-radius: 100px;

            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;

            border: none;
        }
        .btn-delete{
            background-color: #E5E6E1;
        }
        .btn-check{
            background-color: #577A79;

        }

        
        .btn-delete img {
            width: 60px;
            
            border-radius: 100px;

        }
        .btn-check img{
            width: 40px;
            

        }
        

        .btn-area {
            width: 85px;
            height: 80px;

            justify-content: center;
            align-items: center;
            display: flex;
        }
    </style>
</head>

<body>
    <div class="area-nav">
        <div class="nav">
            <div class="input-group">
                <input type="text" id="task" class="input-task" placeholder="Masukan task ....">
                <button type="submit" onclick="addTask()" class="btn-add"><b>+</b></button>
            </div>
        </div>
    </div>
    <div class="space" style="width: 100vw;
    height: 20vh; background-color: #E5E6E1;"></div>
    <div class="container">
        <div class="content" id="content">

            <!-- <div class="card">
                <div class="card-list">
                    <p>xing xing hanjoo Lorem20</p>
                </div>
                <div class="area-card-deleted">
                    <div class="card-delete-cek">
                        <div class="btn-area"> <button type="submit" class="btn-delete"> <img src="x.png"> </button></div>
                        
                        <div class="btn-area"> <button type="submit" class="btn-check"> <img src="chek.png" alt="button check"></button>
                        </div>
                    </div>
                    
                </div>
            </div> -->
            <!-- jjj -->
            

            
        </div>

        <script src="app.js"></script>




</body>

</html>