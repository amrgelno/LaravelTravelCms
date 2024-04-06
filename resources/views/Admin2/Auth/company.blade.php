<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>company info</title>
</head>
<body>
<br />
<br />
<br />
<form action="{{route('company.store')}}"   method="post"  enctype="multipart/form-data">
@csrf
<table >
<tr>
<td>
<label for='company_name'> company_name:-  </label>
<input type="text"    value='{{$company_name}}'  name="comp_Na" placeholder="أسم الشركةاو المؤسسة"/>
</td>
</tr>
<tr>
<td>
<label for='Business Type'> Business Type:-   </label>
<input type="text"  value='{{$Business_Type}}'  name="Business_Type" placeholder="مجال العمل"/>
</td>
</tr>
<tr>
<td>
<label for='streetAddress'>  streetAddress:-   </label>
<input type="text"   value='{{$streetAddress}}'   name="streetAddress" placeholder="الشارع"/>
</td>
</tr>
<tr>
<td>
<label for='Tele_Number'> Tele_Number:-  </label>
<input type="text"  value='{{$Tele_Number}}'  name="Tele_Number" placeholder="رقم التليفون"/>
</td>
<td>
<label for='Email'> Email:-  </label>
<input type="Email"   value='{{$Email}}'  name="Email" placeholder="الايميل "/>
</td>
</tr>


<td>
<label for='fax'>  fax:-  </label>
<input type="text"   value='{{$fax}}'  name="fax" placeholder="الفاكس" />
</td>

<td>
<label for='postalCode'>  postalCode:-  </label>
<input type="postalCode"   value='{{$postalCode}}'  name="postalCode" placeholder="رمز البريدي" />
</td>

</tr>


<tr>
<td>
<label for='country'>   country:-   </label>
<input type="text"  value='{{$country}}' name="country"   placeholder="أسم الدولة"/> 
<label for='city'>  city:-    </label>
<input type="text"  value='{{$city}}' name="city"    placeholder="أسم المدينة"/>
</td>
</tr>

<tr>
<td>
<label for='WBDescription'> WBDescription:-  </label> <br/>
<textarea  name="WBDescription"   id="WBDescription"  placeholder="وصف الموقع" required/> {{$WBDescription}} </textarea>
</td>
</tr>

</td>
</tr>
<tr>
<td>
</td>
</tr>
<tr>
<td>
<label for='company logo'>company logo:- </label>
<input type="file"     name="uploadlogo"  placeholder="uploadfile" required />
</td>
</tr>
<tr>
<td>
<input type="submit"      value="حفظ"       name="save" />
</form>
</tr>
</td>
</table>
<!--<form action="{{route('index')}}"  method="post">
<input type="submit"  name="submit"  value="استعرض بيانات الشركة" />

</form>-->
</body>
</html>
