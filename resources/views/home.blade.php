<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charlily Trinity42</title>
    @vite(['resources/js/app.js'],['resources/css/app.css'])
</head>
<body>
    <div class="sticky-top">
        <x-navbar/>
    </div>
    <div class="all col">
        <div class="layer">
            <div class="layer-info">
                <h1 class="fw-bold">MEET OUR BRAND <br> NEW SOLUTION</h1>
                <p >Lorem ipsum dolor sit amet, consectetur adispiscing elit.<br> Vestibulum ante ipsum primis in faucibus orci luctus et<br> ultrices posuere cubilia Curae; Donec velit neque, auctor<br> sit amet aliquam vel, ullamcorper sit amet ligula</p>
            </div>
        </div>
        <div class="first-section row">
            {{-- <img src={{url('/images/Header-Image.png')}} alt="Image"/> --}}
            
        </div>
        <div class="second-section">
            <div class="text-center first-title pb-3">
                <h1 class="fw-bold text-secondary">DISCOVER THE WORLD OF BUSINESS</h1>
            </div>
            <div class="text-center">
                <div class="small-line">
                </div>
            </div>
            <p style="color:#36454F" class="text-center fw-bold fs-5 pt-3">We consider all the drivers of change from the ground up and we'll motivate you to make the change.</p>
            <div class="second-sec-content">
                <div class="text-center pt-4">
                    <img class="mx-5" style="width:450px" src={{url('/images/Image-1.png')}} alt="Image"/>
                    <img class="mx-5" style="width:450px" src={{url('/images/Image-2.png')}} alt="Image"/>
                </div>
                <div class="sec-content-text" style="margin-bottom: 150px">
                    <div class="card sec-content-text-first">
                        <h6 class="mx-3 mt-4">Title 123</h6>
                        <p class="mx-3 mb-3">Vestibulum ac diam sit amet quam vehicula <br> elementum sed sit amet dui. Donec rutrum <br> congue leo eget malesuada.<p>
                    </div>
                    <div class="card sec-content-text-second">
                        <h6 class="mx-3 mt-4">Title 123</h6>
                        <p class="mx-3 mb-3">Vestibulum ac diam sit amet quam vehicula <br> elementum sed sit amet dui. Donec rutrum <br> congue leo eget malesuada.<p>
                    </div>
                </div>
            </div>
        </div>
        <section class="third-section">
            <div class="video">
                <video autoplay loop id="myVideo">
                    <source src="{{url('/images/background-video.mp4')}}" type="video/mp4">
                </video>
                <div class="third-sec-text">
                    <h1 style="font-size: 30px" class="fw-bold">ATTRIBUTION</h1>
                </div>
                <div class="small-line-2">
                </div>
                <div style="width:100%" class="third-sec-content d-flex flex-row justify-content-center">
                    <div class="card first-card border border-white text-center mx-3 px-4 py-3">
                        <div class="text-center">
                            <svg class="mt-4 mb-3" xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 76 76">
                                <g id="Icon_feather-target" data-name="Icon feather-target" transform="translate(-1.5 -1.5)">
                                  <path id="Path_3" data-name="Path 3" d="M76,39.5A36.5,36.5,0,1,1,39.5,3,36.5,36.5,0,0,1,76,39.5Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                  <path id="Path_4" data-name="Path 4" d="M52.8,30.9A21.9,21.9,0,1,1,30.9,9,21.9,21.9,0,0,1,52.8,30.9Z" transform="translate(8.6 8.6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                  <path id="Path_5" data-name="Path 5" d="M29.6,22.3A7.3,7.3,0,1,1,22.3,15,7.3,7.3,0,0,1,29.6,22.3Z" transform="translate(17.2 17.2)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                </g>
                            </svg>
                        </div>
                        <h5 class="fw-bold">MAURIS BLANDIT ALIQUE</h5>
                        <p>Vestibulum ac diam sit amet quam vehicula <br> elementum sed sit amet dui. Donec rutrum <br> congue leo eget malesuada.</p>
                    </div>
                    <div class="card second-card border border-white text-center mx-3 px-4 py-3">
                        <div class="text-center">
                            <svg class="mt-4 mb-3" xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 51.1 73">
                                <path id="Icon_material-lightbulb-outline" data-name="Icon material-lightbulb-outline" d="M22.1,72.35A3.661,3.661,0,0,0,25.75,76h14.6A3.661,3.661,0,0,0,44,72.35V68.7H22.1ZM33.05,3a25.539,25.539,0,0,0-14.6,46.5V57.75A3.661,3.661,0,0,0,22.1,61.4H44a3.661,3.661,0,0,0,3.65-3.65V49.5A25.539,25.539,0,0,0,33.05,3Zm10.4,40.515-3.1,2.19V54.1H25.75V45.705l-3.1-2.19a18.25,18.25,0,1,1,20.8,0Z" transform="translate(-7.5 -3)" fill="#fff"/>
                            </svg>
                        </div>
                        <h5 class="fw-bold">MAURIS BLANDIT ALIQUE</h5>
                        <p>Vestibulum ac diam sit amet quam vehicula <br> elementum sed sit amet dui. Donec rutrum <br> congue leo eget malesuada.</p>
                    </div>
                    <div class="card third-card border border-white text-center mx-3 px-4 py-3">
                        <div class="text-center">
                            <svg class="mt-4 mb-3" xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 88 79.2">
                                <path id="Icon_material-business" data-name="Icon material-business" d="M47,22.1V4.5H3V83.7H91V22.1ZM20.6,74.9H11.8V66.1h8.8Zm0-17.6H11.8V48.5h8.8Zm0-17.6H11.8V30.9h8.8Zm0-17.6H11.8V13.3h8.8ZM38.2,74.9H29.4V66.1h8.8Zm0-17.6H29.4V48.5h8.8Zm0-17.6H29.4V30.9h8.8Zm0-17.6H29.4V13.3h8.8Zm44,52.8H47V66.1h8.8V57.3H47V48.5h8.8V39.7H47V30.9H82.2ZM73.4,39.7H64.6v8.8h8.8Zm0,17.6H64.6v8.8h8.8Z" transform="translate(-3 -4.5)" fill="#fff"/>
                              </svg>
                        </div>
                        <h5 class="fw-bold">MAURIS BLANDIT ALIQUE</h5>
                        <p>Vestibulum ac diam sit amet quam vehicula <br> elementum sed sit amet dui. Donec rutrum <br> congue leo eget malesuada.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="forth-section">
            sfcgvhbjnk
        </section>
    </div>
</body>
</html>

<style>
    
    .all{
        overflow: hidden;
        position: relative;
    }

    .layer{
        position: absolute;
        top:0px;
        background-color: rgba(0,0,0,0.3);
        width: 55%; 
        height: 900px;
    }

    .layer-info{
        margin-left: 300px; 
        margin-top:200px;
        color: white;
    }

    .layer-info h1{
        font-size: 50px
    }

    .layer-info p{
        font-size: 16px
    }

    .first-section{
        height: 900px;
        top: 0px;
        background-image: url('/images/Header-Image.png');
        /* background-size:contain; */
        background-repeat: no-repeat;
    }

    .second-section{
        /* background: blue; */
        /* position: absolute; */
        /* top:900px;
        z-index: 1; */
    }

    .first-title{
        margin-top: 120px;
    }

    .small-line{
        background-color: #38ACEC;
        height: 3px;
        width: 70px;
        padding: 0 0;
        position: absolute;
        /* top: 50%; */
        left: 50%;
        transform: translate( -50%);
    }

    .second-sec-content{
        position: relative;
    }

    .sec-content-text-first{
        position: absolute;
        top:200px;
        left: 435px;
        color: white;
        background-color: #38ACEC;
    }

    .sec-content-text-second{
        position: absolute;
        top:200px;
        left: 985px;
        color: white;
        background-color: #38ACEC;
    }

    .third-section{
        height: 700px;
        
    }

    .video{
        position: relative;
    }

    .third-sec-text{
        position: absolute;
        top: 120px;
        left: 50%;
        transform: translate( -50%);
        color: white;   
    }

    .small-line-2{
        background-color: white;
        height: 3px;
        width: 70px;
        padding: 0 0;
        position: absolute;
        /* top: 50%; */
        top: 170px;
        left: 50%;
        transform: translate( -50%);
        z-index: 1;
    }

    .third-sec-content{
        position: absolute;
        top: 310px;
        left: 50%;
        transform: translate( -50%);
    }

    .first-card{
        background-color: rgba(0,0,0,0);
        color: white;
    }

    .second-card{
        background-color: rgba(0,0,0,0);
        color: white;
    }

    .third-card{
        background-color: rgba(0,0,0,0);
        color: white;
    }



   
</style>