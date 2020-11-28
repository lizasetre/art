<html>
	<head>
		<style>
      .container {
  margin-top: 20px;
  text-align: center;
}

.item{
  font-size: 1.2rem;
  width: 8rem;
  height: 8rem;
  margin: 1rem;
  position: relative;
  display: inline-block;
}

.apple {
  width:6em;
  height:5em;
  background-color:  #ff4355;
  box-shadow: inset 0.2em -0.2em  #cc1022;
  border-radius: 2em 2em 3em 3em;
  position:absolute;
  top: 1em;
  left:0.3em;
}

.apple:before {
  top:-.2em;
  left:1.8em;
  content:"";
  width:4.1em;
  height:2.75em;
  background-color: inherit;
  border-radius: 3em 3em 0 0 ;
  position: absolute;
  box-shadow:-1.5em 0 0   #ff4355, inset .2em 0.2em  #ff4355;
}

.apple:after{
  content:"";
  width: 0.2em;
  height: 1em;
  background-color:brown;
  position:absolute;
  z-index: 2;
  top: -0.5em;
  left: 3em;
}

.orange {
  width: 5.6em;
  height: 5.6em;
  border-radius: 50%;
  background-color: #ffb526;
  box-shadow: inset 0.2em -.2em  #cc8a0c;
  position: absolute;
  top:0.9em;
  left: 0.3em;
}

.orange:before {
  content: "";
  position: absolute;
  top: -1em;
  left: 3em;
  height: 0;
  width: 0;
  border: 1em solid #539e3d;
  border-radius: 50% 0 50% 0;
  border-bottom-color: #437512;
  border-right-color: #437512;
}

.banana {
  width:6em;
  height: 6em;
  background-color: transparent;
  box-shadow: -1.1em 1.1em 0 0 #fcd110;
  border-radius: 50%;
  position: absolute;
  top:-0.9em;
  left:1.6em;
}

.banana:before {
  content:"";
  width: 0.3em;
  height: 0.3em;
  transform: rotate(45deg);
  background-color: #937714;
  position: absolute;
  top: 5.4em;
  left:4.3em;
  z-index:1;
}

.banana:after {
  content: "";
  width: 0.4em;
  height: 0.8em;
  transform: rotate(31deg);
  background-color: #b3bb03;
  position: absolute;
  top:1.1em;
  left:0.2em;
  z-index:1;
}

.banana-line {
  width: 5.5em;
  height: 5.8em;
  background-color: transparent;
  box-shadow: -0.4em 0.4em 0 0 #ffe23c;
  border-radius: 50%;
  position: absolute;
  top:-0.7em;
  left:1.7em;
  transform: rotate(-4deg);
}

.lemon {
  width: 5.1em;
  height: 5.1em;
  margin: 0.8em;
  background-color: #ffe135;
  border-radius: 50% 15%;
  box-shadow: inset 0.2em 0.2em  #ccb42a;
  transform: rotate(225deg);
  position: absolute;
}

.pear {
  width:5.4em;
  height: 5.4em;
  margin-top: 1.2em;
  background-color: #d7c322;
  border-radius: 50% 15% 50% 50%;
  transform: rotate(-45deg);
  box-shadow: inset .15em .25em #c3b11f;
  position: absolute;
  left: 0.6em;
}

.pear:after{
  content:"";
  width: 0.2em;
  height: 1em;
  background-color:brown;
  position:absolute;
  z-index: 2;
  top: -0.2em;
  left: 5.1em;
  transform: rotate(45deg);
}

.strawberry {
  width:5em;
  height: 5em;
  margin-top: 0.7em;
  background-color: #ed2607;
  border-radius: 50% 15% 50% 50%;
  transform: rotate(135deg);
  box-shadow: inset -.15em -.25em #C62106;
  position: absolute;
  left: 0.6em;
}

.strawberry:before{
  content:"";
	position:absolute;
	top:3.5em;
	left:2em;
	width:.3em;
	height:.3em;
	background-color:white;
	border-radius:50%;
 	box-shadow:1.7em 0 0 0 white, -1em -2.8em 0 0 white, 2.5em -1.5em 0 0 white,
  2em -2.5em 0 0 white, 0.75em -1.5em 0 0 white, -1em -1em 0 0 white, 0.8em -3.2em 0 0 white;
}

.leaf-up {
  position: absolute;
  width:0;
  height:0;
  border-bottom: 1.5em solid #539e3d;
  border-left: 1em solid transparent;
  border-right: 1em solid transparent;
  border-top: 0 solid transparent;
}

.strawberry-leaf-up{
  top: 0.3em;
  left: 2.3em;
}

.leaf-down {
  position: absolute;
  width:0;
  height:0;
  border-top: 1.5em solid #539e3d;
  border-left: 1em solid transparent;
  border-right: 1em solid transparent;
  border-bottom: 0 solid transparent;
}

.strawberry-leaf-down {
  top: 0.8em;
  left: 2.3em;
}

.blueberry {
  position: absolute;
  width:6em;
  height: 5.5em;
  top: 0.6em;
  left:0.4em;
  border-radius: 50%;
  background-color: #89a2ca;
  box-shadow: inset 0.2em -.2em  #6081B8;
}

.blueberry:before{
  content: "";
  width: 2em;
  height: 1em;
  left: 2em;
  position: absolute;
  background-color: #3e4d64;
  border-radius:50%;
}

.peach  {
   width:6em;
   height:5em;
   background-color:  #fca049;
   box-shadow: inset 0.2em -0.2em #c9803a;
   border-radius: 2.5em 2.5em 3em 3em;
   position:absolute;
   top: 1.3em;
   left:0.3em;
 }

 .peach:before {
   content: "";
   position: absolute;
   top: -1.7em;
   left: 3em;
   height: 0;
   width: 0;
   border: 1em solid #539e3d;
   border-radius: 50% 0 50% 0;
   border-bottom-color: #437512;
   border-right-color: #437512;
 }
      </style>
	</head>
  <body>
		<table>
		<th>
       <div class="container">
  <div class="item">
     <div class="apple"></div>
  </div>
  <div class="item">
     <div class="orange"></div>
  </div>
  <div class="item">
     <div class="banana"></div>
     <div class="banana-line"></div>
  </div>
  <div class="item">
     <div class="lemon"></div>
  </div>
  <div class="item">
    <div class="pear"></div>
  </div>
  <div class="item">
    <div class="strawberry"></div>
    <div class="leaf-up strawberry-leaf-up "></div>
    <div class="leaf-down strawberry-leaf-down"></div>
  </div>
  <div class="item">
    <div class="blueberry"></div>
  </div>
  <div class="item">
    <div class="peach"></div>
  </div>
