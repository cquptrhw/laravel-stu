@extends('layouts.app')
@section('content')
<link href="{{ URL::asset('assets/css/form.css') }}" rel="stylesheet" type="text/css"/>

    <div class="content">
    <img src="{{ URL::asset('assets/imgs/index_top.jpg') }}" >
    <form action="delete_permission_role" method="post">
        {!!csrf_field()!!}
        <input placeholder="输入需要删除的角色" NAME="role_id" TYPE="text"onmouseover="this.style.borderColor='black';this.style.backgroundColor='plum'" style="width: 106; height:50" onmouseout="this.style.borderColor='black';this.style.backgroundColor='#ffffff'" style="border-width:1px;border-color=black" CLASS="text">
         <input placeholder="输入需要删除角色的权限" NAME="permission_id" TYPE="text"onmouseover="this.style.borderColor='black';this.style.backgroundColor='plum'" style="width: 106; height:50" onmouseout="this.style.borderColor='black';this.style.backgroundColor='#ffffff'" style="border-width:1px;border-color=black" CLASS="text">

        <input type="submit" value="删除" class="button">
    </form>
    </div>
@endsection


 
