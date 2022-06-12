
<div align = "text-center">
    


<form method="POST" action="formDataSumbit">
    @csrf
    
    @if($pidval!="")
    <input name="prdId"  value={{$pidval}} type="hidden"></input>
    @endif
    <input type="text" name="prdName" placeholder="Enter Prod Name" value="{{$pname_val}}"  > <br>
    <span style="color : red">@error('prdName'){{$message}} @enderror</span><br><br>
    <input type="number" name="prdPrice" placeholder="Price Value" value="{{$price_val}}"  />
    
    <select name = "crncyType" align = "right"  >
                @if($crncy_val=="$")
                    <option selected="selected" >{{$crncy_val}}</option>
                @endif

                <option value="Rs">₹</option>
                <option value="$">$</option>
            </select><br>
            <span style="color : red">@error('PriceValue'){{$message}} @enderror</span><br><br>
    <input type="text" name="prdType" placeholder="ProductType" value="{{$desc_val}}" /> <br><br>
    <button type = "submit">Submit</button>
</form>
</div>

<style> 
input[type='number']{
    width: 138px;
    style="color : red";
} 
  </style>

  <script>
    console.log($crncy_val);
  </script>