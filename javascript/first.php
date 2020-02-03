<html>
<head>
<script type="text/javascript">

   var a =10;
   var b =20;
   var sum = a + b;

 function print(){
	 
	 
     document.write("a + b:"+sum+"</br>");
 
 for(var c=0;c<10;c++)
 {
	 
	 document.write("Numbers:"+c+"</br>");
	 var sum1 = sum + c;
	 document.write("total:"+sum1+"</br>");
	 
 }
 document.write("end</br>");
 var d=0;
 while(d<10){
	 
	 document.write("N1:"+d+"</br>");
	 var sum2 = sum1 + d;
	 document.write("Total1:"+sum2+"</br>");
	 d++;
	 
 }
 document.write("end of statement");
 }
 var e =[[1,2],[3,4]];
 var f =[[[1][2][3]],[4,5,6]]
 t = e.length;
 t1 = f.length;
 for(var i=0;i<e.length;i++){
	 
	 document.write(e[i]+"</br>");
	 
 }
 for(var i=0;i<f.length;i++){
	 
	  document.write(f[i]+"</br>");
 }
 document.write("endof array");
 
</script>
</head>
<body>
</br>
<input type="button" value="submit" name="submit" onclick="print()">
</body>
</html>
