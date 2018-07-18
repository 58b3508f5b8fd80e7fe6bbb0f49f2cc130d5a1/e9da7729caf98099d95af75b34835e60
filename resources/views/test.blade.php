<form action="{{url('/greenwhitetest')}}" type="post">
    {{csrf_field()}}
    Limit: <input name="limit"> <br>
    Offset: <input name="offset"> <br>
    Send: <input name="send" type="checkbox">
    <input type="submit">
</form>
