<!-- @extends('layouts.main')
@section('content')

<form action='#'>
<div style="display:flex; gap:3px;">
    <input type="number" class="input-field" id="num1" palceholder="Enter a number" value="">
    <input type="number" class="input-field" id="num2" placeholder="Enter another number" value="">
</div>
<br>
<div id="operator" style="display:flex; padding:20px; margin:20px; border:2px; gap:2px;" >
<button class="add_btn" id='add_btn' >+</button> 
<button class="sub_btn" id='sub_btn' >-</button>
<button class="mul_btn" id='mul_btn' >x</button>
<button class="div_btn" id='div_btn' >/</button>
</div>
</form>
<br>
<div style="display:flex;">
<div>
    <h1>OUTPUT</h1>
</div> 
<div id='output'></div>
</div>
</div>

<script>
        var buttons= document.getElementById('operator');
        var buttons2=document.getElementByClassName("btn");
        buttons.addEventlistener("click",function(btn));

        let num1=Number(document.getElementById(num1).value);
        let num2=Number(document.getElementById(num2).value);
        let result=0;
        switch(operators){
            case"+":
                Number(num1)+Number(num2);
                break;
            case"-":
                Number(num1)-Number(num2);
                break;  
            case"x":
                Number(num1)*Number(num2);
                break; 
            case"/":
                if (num1==0){
                    return("invalid");
                }
                else{
                    Number(num1)/Number(num2);}
                break;

        }
        

        let outputdiv=document.getElementById('output');
        outputdiv.innerHTML = '<h3>'+result+'</h3>';
        console.log("output:",result);
    

</script>



@endsection -->
