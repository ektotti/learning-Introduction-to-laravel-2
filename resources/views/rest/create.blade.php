<form action="/laravelintroduction/rest" method="POST">
    @csrf
    <table>
        <tr>
            <th>message:</th>
            <td><input type="text" name="message"></td>
        </tr>
        <tr>
            <th>address:</th>
            <td><input type="text" name="adress"></td>
        </tr>
        <tr>
            <th>url:</th>
            <td><input type="url" name="url"></td>
        </tr>
        <tr>
            <td><input type="submit" value="送信"></td>
        </tr>
    </table>
    
</form>