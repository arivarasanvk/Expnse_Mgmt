use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpnseFormSubmitController;

<tr id="{{$pidval}}">
    <td> {{$pname_val}}</td>
    <td>{{$price_val }}({{$crncy_val}})</td>
   <td>{{$desc_val}}</td>
   <td>
    <a href="{{route('editDataForm',['rowvalId'=>$pidval])}}">Edit</a>
    /
    <a href="{{route('removeDataForm',['rowvalId'=>$pidval])}}">Remove</a>
   </td>
</tr>