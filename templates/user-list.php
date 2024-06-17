<div class="form_auth_block">
    <div class="form_auth_block_content">
        <form name="search" method="get" action="pageView.php">
            <input class="search" type="search" name="user" placeholder="Поиск">
            <button class="search" type="submit">Найти</button>
            <input class="search" style="visibility:hidden" type="niggaalarm" name="id" value="user-list.php">
        </form>
        <p class="form_auth_block_head_text">Список пользователей</p>
        <div class="table-responsive">
            <table class="user_table">
                <thead>
                    <tr>
                        <th>Имя пользователя</th>
                        <th>Зашифрованный пароль</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET["user"]) && $_GET["user"] !== "") {
                        $user = $_GET["user"];
                        $db_host = 'localhost';
                        $db_username = 'root';
                        $db_password = '1111';
                        $db_name = 'valo_bd';
                        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
                        $sql = "SELECT * FROM users WHERE username = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $user);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        echoUsers($result);
                        $conn->close();
                    } else {
                        $db_host = 'localhost';
                        $db_username = 'root';
                        $db_password = '1111';
                        $db_name = 'valo_bd';
                        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
                        $sql = "SELECT * FROM users LIMIT 10"; 
                        $result = $conn->query($sql);
                        echoUsers($result);
                        $conn->close();
                    }
                    function echoUsers($result)
                    {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $encrypted_pass_base64 = $row["password"];
                                $encrypted_pass = base64_decode($encrypted_pass_base64);
                                $key = "my3DESkey1234567890123456";
                                $decrypted_pass = openssl_decrypt($encrypted_pass, 'DES-EDE3', $key, OPENSSL_RAW_DATA);
                                echo "<tr>";
                                echo "<td>" . $row["username"] . "</td>";
                                echo "<td>" . $row["password"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>0 результатов</td></tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="privyaz">
    <div class="link">
            <a href="https://vk.com/playvalorant" target="_blank"><img class="links" src="img/socials.png" alt=""></a>
            <a href="https://valorantesports.com/" target="_blank"><img class="links" src="img/esport.png" alt=""></a>
            <a href="https://playvalorant.com/ru-ru/news/" target="_blank"><img class="links" src="img/news.png" alt=""></a>
        </div> 
        <a href="index.php"><img class="logo2" src="img/logo2.png" alt=""></a>
</footer>  
