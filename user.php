<html>
    <input type="button" value="Mostra utenti" onclick="showUsers()">
    <div id="userList"></div>

    <script>
        function showUsers() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("userList").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get_users.php", true);
            xhttp.send();
        }
    </script>
    <?php
$users = shell_exec('net user');
echo "<pre>$users</pre>";
?>

</html>
