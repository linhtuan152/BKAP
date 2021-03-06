<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Quản lý Website </a>
                </li>
                
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Danh mục</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="index.php?view=addcategory">Thêm mới</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="index.php?view=listcategory">Danh sách</a></li>
                        
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Sản phẩm</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="index.php?view=addproducts">Thêm mới</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="index.php?view=listproducts">Danh sách</a></li>
                        
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Hình ảnh</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="index.php?view=addimages">Thêm mới ảnh</a></li>
                        <li><i class="fa fa-table"></i><a href="index.php?view=listimages">Danh sách ảnh</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>