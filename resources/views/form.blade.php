<form action="test" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="name">姓名</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">年龄</label>
        <input type="text" name="age">
    </div>
    <label for="userfile">
        头像
    </label>
    <input type="file" name="profile" multiple="multiple">
    <button type="submit">提交</button>
</form>