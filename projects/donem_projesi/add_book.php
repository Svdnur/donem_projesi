<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_to_store = array_filter($_POST);
    $data_to_store['created_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    $last_id = $db->insert('books', $data_to_store);
    if ($last_id) {
        $_SESSION['success'] = "Book added successfully!";
        header('location: books.php');
        exit();
    } else {
        echo 'insert failed: ' . $db->getLastError();
        exit();
    }
}

$edit = false;
require_once 'includes/header.php';
?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Add Books</h2>
            </div>

        </div>
        <form class="form" action="" method="post" id="book_form" enctype="multipart/form-data">
            <?php include_once('./forms/book_form.php'); ?>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#book_form").validate({
                rules: {
                    author: {
                        required: true
                    },
                    name: {
                        required: true
                    },
                    type: {
                        required: true
                    }
                }
            });
        });
    </script>
<?php include_once 'includes/footer.php'; ?>