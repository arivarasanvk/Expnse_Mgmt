
<div align = "center">
       
<div>
<h1>Expense Arguement</h1>
@if($ExpnseFormEditData!=null)
<x-exnse-form-comp pid="{{$ExpnseFormEditData->prdId}}" pnameData="{{$ExpnseFormEditData->prdName}}" priceData="{{$ExpnseFormEditData->prdPrice}}" crncyData="{{$ExpnseFormEditData->crncyType}}" descData="{{$ExpnseFormEditData->prdType}}" />
    <!-- <x-exnse-form-comp pid="" pnameData="" priceData="" crncyData="" descData="" /> -->
@endif

@if($ExpnseFormEditData==null)
<x-exnse-form-comp pid="" pnameData="" priceData="" crncyData="" descData="" />
<!-- echo "ppp"; -->
@endif

<br><br><br>
 </div>

	<link rel="stylesheet" type="text/css" href="{{'/css/TableCss.css'}}">
    <table>
<thead>
    <tr>
        <td>Name</td> <td>Price</td> <td>Type</td> <td>Edit/Remove</td>
    </tr>
</thead>
        <tbody>
            <tr>
                
                <span hidden>{{$totalVal=0}}<span>

                @foreach ($ExpnseFormValViewData as $eachVal)
                    <span hidden>{{$totalVal++}}<span>
                     <x-product-details-table-comp pid="{{$eachVal->prdId}}" pnameData="{{$eachVal->prdName}}" priceData="{{$eachVal->prdPrice}}" crncyData="{{$eachVal->crncyType}}" descData="{{$eachVal->prdType}}"  />
                @endforeach
            </tr>
            <span>Total {{$totalVal}}</span>
        </tbody>
</div>