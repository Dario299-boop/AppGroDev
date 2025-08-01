<?php
require('system/main.php');
$layout = new HTML(title: '404');
?>

<div class="cow">
  <div class="head">
    <div class="face"></div>
  </div>
  <div class="leg b l"></div>
  <div class="leg b r"></div>
  <div class="leg f l"></div>
  <div class="leg f r"></div>
  <div class="tail"></div>
</div>
<div class="well"><a class="home-btn" href="/dashboard">Ir al menu</a></div>
<div class="text-box">
  <h1>404</h1>
  <p>Perdón, No tenes acceso a esta página...</p>
</div>
<style>
  *, *:after , *:before {
  box-sizing: border;
}
:root{
  font-size: 0.75vw;
  --bg:#FF8A65;
  --anime-speed: 0.2s;
}
body {
  height: 100vh;
  font-family: arial;
  background: var(--bg);
  overflow: hidden;
  background-image: url("favicon_nbg.webp");
    background-repeat: no-repeat;
  background-size: 20%;
}



.cow {
  width: 30rem;
  aspect-ratio: 2/1;
  border-radius: 4rem/15%;
  background-color: #fefefe;
  position: absolute;
  top: 40%;
  z-index: 10;
  transform-origin: 100% 150%;
  left: 38%;
    transform: translateY(15rem) rotate(90deg);
  animation: 
    jmb var(--anime-speed) linear,
    move calc(var(--anime-speed) * 10) linear;
  &:before {
    content: '';
    position: absolute;
    left:11%;
    top: 0;
    width: 40%;
    height: 60%;
    color: #000;
    background: currentcolor;
    border-radius: 0 0 100% 50%;
    box-shadow: 9rem -2rem 0 -2rem,
      15rem -3rem 0 -3rem;
  }
  &:after {
    content: '';
    position: absolute;
    left:20%;
    bottom: 6%;
    color: #000;
    background: currentcolor;
    box-shadow: 8rem -4rem 0 -1rem;
    width: 5rem;
    aspect-ratio: 1/1;
    border-radius:43% 57% 51% 49% / 51% 55% 45% 49% 
  }
  
  .head {
      position: absolute;
      top: 0;
      left: 100%;
      z-index: 1;
    .face {
      width: 11rem;
      aspect-ratio: 12.5/7.5;
      background: #fff;
      box-shadow: -2rem 4.5rem  #000 inset;
      border-radius: 10% 100% 50% 45% / 44% 72% 26% 25%;
      transform: rotateX(180deg) rotate(-55deg) translate(-25%, -55%);
      position: relative;
      z-index: 10;
    }
    &:after , &:before{
      content: '';
      position: absolute;
      top: -3.5rem;
      left: -5.5rem;
      transform: rotate(-25deg);
      background: #000;
      width: 4rem;
      height: 5rem;
      z-index: 20;
      box-shadow: 0.2rem 0.1rem 0 0.2rem #fff inset;
      border-radius: 0% 100% 38% 62% / 41% 73% 27% 59%;
    }
    &:before{
      z-index: 2;
      top: -4rem;
      left: -5rem;
      transform: rotate(-5deg);
    }
  }
  .leg {
    position: absolute;
    top: 95%;
    background: #FFF;
    width: 1.5rem;
    height: 3rem;
    transform-origin: top center;
    &:after{
      content: '';
      position: absolute;
      left: 0;
      top: 90%;
      width: 100%;
      height: 2.5rem;
      background: #FFF;
      border-bottom: 1.5rem solid #000;
    }
    &.b {
      left: 4%;
      animation: legMoveB var(--anime-speed) alternate infinite;
      &.l {
        left: 13%;
        &:after {
          left: 10%;
          top: 75%;
          background: #FFF;
          transform: rotate(-5deg);
        } 
      }
      &.r {
        animation-delay: var(--anime-speed);
        &:after {
          left: 32%;
          top: 90%;
          background: #FFF;
          transform: rotate(-15deg);
        }
      }
      
    }
    
    &.f {
      right: 5%;
      animation: legMoveF var(--anime-speed) alternate infinite;
       &.l {
        right: 10%;
        animation-delay: var(--anime-speed);
        &:after {
          right: 10%;
          left: auto;
          top: 75%;
          background: #FFF;
          transform: rotate(5deg);
        } 
      }
      &.r {
        &:after {
          right: 20%;
          left: auto;
          top: 90%;
          background: #FFF;
          transform: rotate(10deg);
        }
      }
    }
    
    
  }
  
  .tail{
    position:absolute;
    right: 98%;
    top: 12%;
    width: 2rem;
    height: 10rem;
    border-left: 0.5rem solid #fff;
    border-top: 0.5rem solid #fff;
    border-radius: 100% 0% 51% 49% / 42% 100% 0% 58% ;
    transform-origin: top left;
    animation: tail 0.75s alternate infinite;
    &:after {
      content: '';
      position: absolute;
      left: 7%;
      top: 100%;
      background: #000;
      width: 1.5rem;
      height: 1.75rem;
      border-radius: 70% 30% 100% 0% / 100% 30% 70% 0% ;
      transform: rotate(-60deg)
    }
  }
}

.well {
  background: #000;
  width: 30rem;
  height: 2rem;
  position: absolute;
  top: calc(40% + 19rem);
  left: 60%;
  border-radius: 50%;
  &:before{
    content: '';
    position: absolute;
    left: 0;
    top: 0%;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    box-shadow: 0 -1.2rem 0.25rem #000 inset;
    z-index: 110;
  }
  
  &::after{
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 24rem;
    background: var(--bg);
    z-index: 100;
  }
}

.home-btn{
  position: absolute; 
  left: -190%;
  top: 2rem;
  font-size: 2.5rem;
  font-weight: bold;
  color: #000;
  background: #FFD600;
  display: inline-block;
  text-decoration: none;
  padding: 1.5rem 3rem;
  border-radius: 1rem;
  transition: background 0.3s ease-in;
  transform-origin: 45rem 45rem;
  animation: btnAnim calc(var(--anime-speed) * 20) linear;
  &:hover {
    background: #FBC02D;
  }
}

.text-box {
  font-family: "Cabin Sketch", serif;
  font-weight: 700;
  color: #fff;
  text-align: center;
  position: absolute;
  left: 10%;
  top: 28%;
  animation: textAnim calc(var(--anime-speed) * 18) linear;
  h1 {
    font-size: 24rem;
    margin: 0;
    line-height: 18rem;
  }
  p {
    width: 42rem;
    font-size: 4rem;
    line-height: 1;
    margin: 0;
  }
}

@keyframes btnAnim {
  0% , 48% {   
    transform: translateX(-10rem) rotate(95deg) } 
 55%,  100% {   transform: translateX(-0rem) rotate(0deg) }
}


@keyframes textAnim {
  0% , 60% { top: 0%; transform: translatey(0); opacity: 0}
  70% , 76% , 85%  { top: 28%; transform: translatey(5%); opacity: 1}
  73%, 79% { top: 28%; transform: translatey(-15%); opacity: 1}
  100% { top: 28%; transform: translatey(0);}
}

@keyframes move {
  0% { 
    left: 0%;
    transform: translateY(0) rotate(0deg);
  }
  85% { 
    left: 38%;
    transform: translateY(0) rotate(0deg);
  }
  90% { 
    left: 40%;
    transform: translateY(0) rotate(5deg);
  }
  95% { 
    left: 38%;
    transform: translateY(0) rotate(90deg);
  }
  100% { 
    left: 38%;
    transform: translateY(15rem) rotate(90deg);
  }
}

@keyframes jmb {
  0% , 100%{ transform: translatey(0)}
  50% { transform: translatey(5px)}
}

@keyframes legMoveB {
  0% {transform: rotate(2deg) translatey(0%)}
  100% {transform: rotate(-5deg) translatey(-5%)}
}

@keyframes legMoveF {
  0% {transform: rotate(0deg) translatey(0%)}
  100% {transform: rotate(-15deg) translatey(-5%)}
}

@keyframes tail {
  0% {transform: rotate(3deg); height:10rem;}
  100% {transform: rotate(-3deg); height: 8rem; }
}

</style>