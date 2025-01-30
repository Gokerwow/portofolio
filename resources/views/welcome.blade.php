<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="FullContainer">
        <nav class="navbar">
            <div class="navbar-left">
                <h1 class="navbar-text">Brillian Maulana Syah</h1>
            </div>
            <ul class="navbar-right">
                <li class="navbar-item item-Home">
                    <a href="">Home</a>
                </li>
                <li class="navbar-item item-Projetcs">
                    <a href="">Projects</a>
                </li>
                <li class="navbar-item item-Achiev">
                    <a href="">Achievements</a>
                </li>
                <li class="navbar-item item-Resume">
                    <a href="">Resume</a>
                </li>
                <li class="navbar-item">
                    <a href=""><svg width="40px" height="36px" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 43.2 (39069) - http://www.bohemiancoding.com/sketch -->
                        <title>UI/icons/dark/github</title>
                        <desc>Created with Sketch.</desc>
                        <defs/>
                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="UI/icons/dark/github" fill="#fff">
                                <path d="M17.9985267,2 C9.16436969,2 2,9.16338746 2,18.0004911 C2,25.0695847 6.58405721,31.0660855 12.9420179,33.1818042 C13.7425335,33.3291384 14.0342552,32.8350778 14.0342552,32.4107554 C14.0342552,32.0306332 14.020504,31.0248319 14.0126462,29.6899843 C9.56217195,30.6564965 8.62316216,27.5447988 8.62316216,27.5447988 C7.89533135,25.696246 6.84631204,25.2041499 6.84631204,25.2041499 C5.3935971,24.2120998 6.95632156,24.2317444 6.95632156,24.2317444 C8.56226404,24.3447006 9.40697996,25.8809049 9.40697996,25.8809049 C10.834157,28.3256699 13.1522146,27.6194481 14.063722,27.2098591 C14.2090917,26.1765554 14.6226097,25.4713159 15.0793456,25.0715492 C11.5266276,24.6678535 7.7912152,23.294699 7.7912152,17.163633 C7.7912152,15.417232 8.41492986,13.9880905 9.43841125,12.8703152 C9.27339697,12.4656374 8.72433162,10.8380859 9.5955677,8.63593112 C9.5955677,8.63593112 10.9382731,8.20571534 13.9949661,10.2762516 C15.27088,9.9206851 16.6401056,9.7438841 18.0004911,9.7370085 C19.3598944,9.7438841 20.7281378,9.9206851 22.0060161,10.2762516 C25.0607447,8.20571534 26.4014856,8.63593112 26.4014856,8.63593112 C27.2746861,10.8380859 26.7256208,12.4656374 26.5615888,12.8703152 C27.5870346,13.9880905 28.2058381,15.417232 28.2058381,17.163633 C28.2058381,23.3104147 24.4645324,24.6629424 20.9010099,25.0587802 C21.4746309,25.5528408 21.9863716,26.5291752 21.9863716,28.0211793 C21.9863716,30.1604715 21.966727,31.8862457 21.966727,32.4107554 C21.966727,32.8390067 22.255502,33.3369962 23.0668222,33.180822 C29.4198717,31.0601921 34,25.0676202 34,18.0004911 C34,9.16338746 26.8356303,2 17.9985267,2" id="icons/icon-github"/>
                            </g>
                        </g>
                    </svg></a>
                </li>
            </ul>
        </nav>
        <div class="Video-Content">
            <div class="video-background">
                <video autoplay muted loop>
                  <source src="{{ asset('assets/background.mp4') }}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
            </div>
            <div class="video-text">
                <h1>HI</h1>
                <p>I'm Brillian Maulana Syah,</p>
                <p>An Aspiring Learner and Developer</p>
            </div>
            <div class="scroll-content">
                <h1 class="scroll-item1">WEB DEVELOPER</h1>
                <h1 class="scroll-item2">MOBILE DEVELOPER</h1>
                <h1 class="scroll-item3">3D MODELLER</h1>
                <h1 class="scroll-item4">VIDEO EDITOR</h1>
            </div>
            <button class="animated-button">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
                <span class="text">My Projects</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
              </button>  
              <div class="bar-wrapper">
                <svg width="964" height="795" viewBox="0 0 1112 795" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M908 501C908 663.372 704.737 795 454 795C203.263 795 0 663.372 0 501C0 338.628 203.263 207 454 207C704.737 207 908 338.628 908 501Z" fill="transparent"/>
                    <path d="M1022.08 220.211C1071.21 341.83 958.801 501.933 770.995 577.812C583.189 653.69 391.108 616.61 341.971 494.991C292.834 373.372 405.247 213.269 593.053 137.39C780.859 61.5118 972.94 98.5917 1022.08 220.211Z" fill="transparent"/>
                    </svg>    
                <div class="bars">
                    <div class="bar-item barFront1"></div>
                    <div class="bar-item barFront2"></div>
                    <div class="bar-item barFront3"></div>
                    <div class="bar-item barFront4"></div>
                    <div class="bar-item barFront5"></div>
                    <div class="bar-item barFront6"></div>
                    <div class="bar-item barFront7"></div>
                    <div class="bar-item barFront8"></div>
                    <div class="bar-item barFront9"></div>
                    <div class="bar-item barFront10"></div>
                    <div class="bar-item barFront11"></div>
                    <div class="bar-item barFront12"></div>
                    <div class="bar-item barFront13"></div>
                    <div class="bar-item barFront14"></div>
                    <div class="bar-item barFront15"></div>
                    <div class="bar-item barFront16"></div>
                    <div class="bar-item barFront17"></div>
                </div>
                <div class="bars-back">
                    <div class="bar-item2 bar1"></div>
                    <div class="bar-item2 bar2"></div>
                    <div class="bar-item2 bar3"></div>
                    <div class="bar-item2 bar4"></div>
                    <div class="bar-item2 bar5"></div>
                    <div class="bar-item2 bar6"></div>
                    <div class="bar-item2 bar7"></div>
                    <div class="bar-item2 bar8"></div>
                    <div class="bar-item2 bar9"></div>
                    <div class="bar-item2 bar10"></div>
                    <div class="bar-item2 bar11"></div>
                    <div class="bar-item2 bar12"></div>
                    <div class="bar-item2 bar13"></div>
                    <div class="bar-item2 bar14"></div>
                    <div class="bar-item2 bar15"></div>
                    <div class="bar-item2 bar16"></div>
                    <div class="bar-item2 bar17"></div>

                </div>                          
            </div>    
        </div>   
 
    </div>
</body>
</html>