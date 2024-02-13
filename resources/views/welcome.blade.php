<!DOCTYPE html>
<html>
    <head>

        <style>

            .multiply_x {

                text-transform: uppercase;

                background-image: linear-gradient(-225deg,
                        #231557 0%,
                        #44107a 29%,
                        #ff1361 67%,
                        #fff800 100%);

                background-size: auto auto;
                background-clip: border-box;
                background-size: 200% auto;
                color: #fff;
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: textclip 2s linear infinite;
                font-size: 30px;

            }

            .input {

                display: block;
                width: 100%;
                text-align: center;
                justify-content: right;
                margin: auto;
                color: solid yellow;

                text-transform: uppercase;

            }

            input {

                width: 15rem;
                height: 3rem;
                background-color: #ff1361;

                text-transform: uppercase;
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                color: yellow;

            }

            button {

                width: 6rem;
                height: 3.33rem;
                background-color: #ff1361;

                text-transform: uppercase;
                font-size: 20px;
                font-weight: bold;
                color: yellow;

            }

            ::placeholder {

                color: yellow;
                font-size: 1rem;
                text-align: center;
                padding: 3rem;

                background-color: #ff1361

            }

            .container {

                display: flex;
                width: 100%;
                justify-content: center;
                flex-direction: column;
                align-items: center;

            }

            h1 {

                text-transform: uppercase;

                font-size: 50px;
                color: yellow;
                animation: bounce 2s infinite;

            }

            @keyframes bounce {

                0% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-20px);
                }
                100% {
                    transform: translateY(0);
                }

            }

            @keyframes textclip {

                to {

                    background-position: -200%;

                }

            }

            body {

                display: flex;
                height: 90vh;
                justify-content: center;
                background-color: black;

                color: white;

            }

            .img img{

                position: absolute;
                top: 30px;
                right: 30px;
                width: 100px;
                height: 100px;
                padding: 5px;
                border: 5px solid gray;
                border-radius: 50%;
                box-shadow: 0rem 0rem 4rem yellow;

            }

            .title {

                position: absolute;
                color: #fff;
                font-size: larger;
                font-size: 30px;
                font-weight: bolder;
                bottom: 0;
                left: 1rem;

            }


        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>

        $(document).ready(function(){

            $("#btn").click(function(){

                const p = $("p");
                const value = parseInt($("#value").val());
                let result = "";

                for(let i = 1 ; i <= 12 ; i++){
                    result += `${value} x ${i} = ${value * i}<br>`;
                }

                p.html(result);

            });
        });

        </script>

    </head>

    <body>

        <div class="container">

            <h1> Multiplication Table </h1>

            <div class="multiply_x">
                <p></p>
            </div>
        </div>

        <div class="img"><img src="/assets/dist/img/NetkungFit.jpg" alt="Netkung"></div>

        <div class="title">
            <h> workshop#7 </h>
        </div>

        <div class="input">

            <input id ="value" placeholder="Enter a number"/>
            <button id="btn">Submit</button>

        </div>

    </body>

</html>
