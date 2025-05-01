<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try {
        require_once "db.inc.php";
        $query = "INSERT INTO messages(name,email,message) VALUES( ?,?,?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $email, $message]);

        $pdo = null;
        $stmt = null;

        // SweetAlert2 popup with custom style
        echo '
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <style>
                .swal2-popup.custom-popup {
                    background-color: #28a745 !important;
                    color: #fff !important;
                    width: 300px !important;
                    font-size: 14px !important;
                    border-radius: 10px;
                }
                .swal2-confirm.custom-button {
                    background-color: #ffffff !important;
                    color: #28a745 !important;
                    font-weight: bold;
                    border-radius: 5px;
                    padding: 6px 20px;
                }
            </style>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Message Sent!",
                    text: "Thank you, ' . htmlspecialchars($name) . '! Your message has been received.",
                    confirmButtonText: "OK",
                    customClass: {
                        popup: "custom-popup",
                        confirmButton: "custom-button"
                    }
                }).then(() => {
                    window.location.href = "../index.php";
                });
            </script>
        </body>
        </html>';
        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: ../index.php");
    exit();
}
?>
