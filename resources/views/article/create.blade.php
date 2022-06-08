<form action="{{ route('bai-viet.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Tieu de: </label>
        <input type="text" value="" name="title"/>
    </div>
    <div>
        <label for="content">Noi dung: </label><br>
        <textarea name="content"  cols="25" rows="8"></textarea>
    </div>
    <div>
        <button type="submit">Dang bai</button>
    </div>
</form>