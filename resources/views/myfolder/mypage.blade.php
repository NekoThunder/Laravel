<!--
Author      : Phurphat Khumsuan[Netkung]
ID          : 65160096
Workshop    : #4
-->

<h1> Welcome To Multiplication Table Mother </h1>
<h2> Do you want to play? </h2>
<h3> Let's Play </h3>

<div class="title">

    <p> Workshop#4 </p>

</div>


<form method="post" action="/my-route">

    @csrf

    <input type="text" name="myinput">
    <button type="submit">Submit</button>

</form>

<style>

    body {

        margin: 80px;
        /* background-color: black; */
        background-image: url("https://upload-os-bbs.hoyolab.com/upload/2021/06/19/21867498/134c7cddf81c803ebd0876925f319f40_6631276759320516950.png?x-oss-process=image%2Fresize%2Cs_1000%2Fauto-orient%2C0%2Finterlace%2C1%2Fformat%2Cwebp%2Fquality%2Cq_80");

    }

    h1 {

        justify-content: center;
        text-align: center;
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
        font-size: 50px;

    }

    h2 {

        justify-content: center;
        text-align: center;
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
        font-size: 50px;

    }

    h3 {

        justify-content: center;
        text-align: center;
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
        font-size: 50px;

    }

    .title p {

        position: absolute;
        color: black;
        font-size: larger;
        font-weight: bolder;
        bottom: 0;
        left: 1rem;

    }

    form {

        position: relative;
        font-size: 2rem;
        text-align: center;

    }

    button {

        width: 6rem;
        height: 3rem;
        background-color: skyblue;

        text-transform: uppercase;
        font-size: 20px;
        font-weight: bold;
        color: black;

    }

    input {

        width: 15rem;
        height: 3rem;
        background-color: skyblue;

        text-transform: uppercase;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        color: black;

    }

    @keyframes textclip {
        to {

            background-position: -200%;

        }
    }

    @media only screen and (max-width: 700px) {
        body {

            width: 49.99999%;
            height: auto;

        }
    }

</style>
