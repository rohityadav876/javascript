<!DOCTYPE HTML>
<html>
<head>
<style>
body
{
	background: rgba(234, 62, 62, 0.75);
}
.div1 {
    width: 150px;
    height: 150px;
    padding: 10px;
    border: 1px solid #FDFDFD;
    background: #dccccc;
}

/*#div1:hover{
    background: #fff;
}
*/
#left
{
	border: 1px solid #aaaa;
	width: 200px;
	float: left
	
}

#right
{
	border: 1px solid #aaaa;
	width: 200px;
	float: right;
	
}
#container
{
	width:50%;
	margin: auto;
}
p
{
	font-size: 25px;
	text-align: center;
	color: #fff;
}

</style>

</head>
<body>
<div id="container">
<p>Want me to check. Ohh thats good. So pick this two sided image and press your mouse to drag and try to drop it into any of the squares with white background.</p>
<div id="left">


<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ></div>

<br>
<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)"  > </div>
<br>

</div>
<img id="drag1" src="drag.png" draggable="true" ondragstart="drag(event)" width="150" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" >


<div id="right">
<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ></div>
<br>
<div class="div1" ondrop="drop(event)" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ></div>
<br>

</div>
</div>


<script>
function allowDrop(ev) {
    ev.preventDefault();

}

function dragEnter(ev) {

        ev.target.style.background = "rgba(168,168,168,0.5)";

}

function dragLeave(ev) {
   
        ev.target.style.background = "#dccccc";
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);

}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
   // ev.target.style.border = "4px dotted green";
}



</script>

</body>
</html>
