<div class="sidebar left-sidebar">
    <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h4 class="floatleft">Danh mục</h4>
        </div>
        <div class="categories left-right-p">
            <ul id="accordion" class="panel-group clearfix">
                <?php $i = 1;
                foreach ($data_chitietDM as $row) {
                    if (isset($_GET['sp'])) {
                        echo '<style> 
                        .sidebar  .categories [data-target="#collapse' . $_GET['sp'] . '"]  .medium-a:after {
                            content:"";
                            color:red;
                            
                        }
                        .sidebar .categories [aria-expanded="false"][data-target="#collapse' . $_GET['sp'] . '"] .medium-a:after {
                            content: ""!important
                        }
                        #collapse' . $_GET['sp'] . ' 
                        {
                            display:block;
                        }
                        .tieude' . $_GET['sp'] . ' .ten
                        {
                            color:red;
                        }
                        </style>';
                        if (isset($_GET['loai'])) {
                            echo '<style>
                            #loai' . preg_replace('/[^0-9]/', '', base64_encode($_GET['loai'])) . '{
                                color:red;
                            }
                            
                            
                            
                            </style>';
                        }
                    }

                ?>
                    <li class="panel">
                        <div data-toggle="collapse" data-parent="#accordion" class="tieude<?= $i ?>" data-target="#collapse<?= $i ?>">


                            <div class="medium-a">
                                <a href="?act=shop&sp=<?= $i ?>&ten=<?= $data_danhmuc[$i - 1]['TenDM'] ?>"><b class="ten"><?= $data_danhmuc[$i - 1]['TenDM'] ?></b></a>
                            </div>
                        </div>
                        <div class="paypal-dsc panel-collapse collapse" id="collapse<?= $i ?>">
                            <div class="normal-a">
                                <?php foreach ($row as $value) { ?>
                                    <a id="loai<?= preg_replace('/[^0-9]/', '', base64_encode($value['TenLoaiTaiLieu'])) ?>" href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLoaiTaiLieu'] ?>"><?= $value['TenLoaiTaiLieu'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                <?php $i++;
                } ?>
            </ul>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>