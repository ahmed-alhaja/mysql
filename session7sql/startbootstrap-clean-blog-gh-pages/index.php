<?php
// Config
require_once dirname(__FILE__) . '/config/config.php';
// Database Connection
require_once dirname(__FILE__) . '/config/connectionDb.php';
// Validations
require_once dirname(__FILE__) . '/core/validations/validation.php';
// Functions
require_once dirname(__FILE__) . '/core/functions/function.php';
// Layouts
require_once dirname(__FILE__) . '/inc/layouts.php';
// Page Header
require_once dirname(__FILE__) . '/inc/header.php';

?>



<?php
showMessage();
switch ($_GET['page'] ?? 'home') {
    case 'home':
        require_once dirname(__FILE__) . '/views/home.php';
        break;
    case 'register':
        require_once dirname(__FILE__) . '/views/auth/register.php';
        break;
    case 'sign-up':
        require_once dirname(__FILE__) . '/actions/controller/auth/registerController.php';
        break;
    case 'login':
        require_once dirname(__FILE__) . '/views/auth/login.php';
        break;
    case 'create_blog':
        require_once dirname(__FILE__) . '/views/blogs/create.php';
        break;
    case 'editBlog':
        require_once dirname(__FILE__) . '/views/blogs/edit.php';
        break;
    case 'add_blog':
        require_once dirname(__FILE__) . '/actions/controller/blogs/blogController.php';
        store();
        break;
    case 'updateBlog':
        require_once dirname(__FILE__) . '/actions/controller/blogs/blogController.php';
        update();
        break;
    case 'deleteBlog':
        require_once dirname(__FILE__) . '/actions/controller/blogs/blogController.php';
        break;
    case 'sign-in':
        require_once dirname(__FILE__) . '/actions/controller/auth/loginController.php';
        break;
    case 'logout':
        require_once dirname(__FILE__) . '/views/auth/logout.php';
        break;
    default:
        require_once dirname(__FILE__) . '/views/404.php';
}





?>



<!-- Footer-->
<?php require_once dirname(__FILE__) . '/inc/footer.php'; ?>